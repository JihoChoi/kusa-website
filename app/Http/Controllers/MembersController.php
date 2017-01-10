<?php

namespace App\Http\Controllers;

use App\KUSA_ROLE;
use App\KUSA_TEAM;
use App\Users;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Image;
use Mail;

class MembersController extends Controller
{
    //
    public function directIndex()
    {
        return view('index');
    }

    public function directBoard()
    {
        $active_members = Users::where('user_status', 'member')->get();
        $teams = KUSA_TEAM::all();
        $roles = KUSA_ROLE::all();

        return view('CRUD.USERS.board', [
          'active_members' => $active_members,
          'teams'          => $teams,
          'roles'          => $roles,
        ]);
    }

    public function directLogin()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('login');
    }

    public function doLogin(Request $request)
    {
        $credential = [
        'email'    => $request->input('username'),
        'password' => $request->input('password'),
      ];

        if (Auth::attempt($credential, true)) {
            $userinfo = Auth::user();
            if ($userinfo->user_status == 'invalid') {
                $request->session()->flash('msg', 'Please click on the confirmation link in your email to verify.');
                Auth::logout();

                return $this->directLogin();
            } elseif ($userinfo->user_status == 'blocked') {
                Auth::logout();

                return view('errors.blocked');
            }
            /*$request->session()->flash('msg-general', 'Welcome '.$userinfo->firstname.'!');*/

            return redirect('/');
        } else {
            $request->session()->flash('msg', 'Your email address or password does not match with our record.');

            return $this->directLogin();
        }
    }

    public function directRegister()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('register');
    }

    public function doLogout()
    {
        Auth::logout();

        return redirect()->action('MembersController@directLogin')->with('msg-general', 'You are now signed out.');
    }

    public function doRegister(Request $request)
    {
        $profileimg = 'default.png';
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $username = $request->input('email');
        $password = Hash::make($request->input('password-reconfirm'));
        $registertype = $request->input('type');
        $rememberToken = '';
        $userstatus = 'invalid';
        $phonenumber = $request->input('phone');
        $reset_token = '';
        $confirmation_code = str_random(45);

        $member = new Users();
        $member->profile_img = $profileimg;
        $member->firstname = $firstname;
        $member->lastname = $lastname;
        $member->email = $username;
        $member->password = $password;
        $member->register_type = $registertype;
        $member->user_status = $userstatus;
        $member->phone_number = $phonenumber;
        $member->reset_token = $reset_token;
        $member->remember_token = $rememberToken;
        $member->confirmation_code = $confirmation_code;

        if (Users::where('email', $username)->first()) {
            $request->session()->flash('msg', 'An account already exists with the email you provided.');

            return $this->directLogin();
        }
        $registered = $member->save();

        if ($registered) {
            $request->session()->flash('msg-general', 'A confirmation email has been sent to '.$member->email.'. Please click the link in the email to confirm your account.');
            $this->emailConfirmation($member);

            return $this->directIndex();
        }
    }

    public function emailConfirmation($member)
    {
        Mail::send('email.email-verification', ['member' => $member], function ($message) use ($member) {
            $message->from('purduekusa@gmail.com', 'Purdue KUSA');
            $message->to($member->email);
            $message->subject('Purdue KUSA: Verify your account');
        });
    }

    public function confirm($confirmation_code)
    {
        $user = Users::where('confirmation_code', $confirmation_code)->first();
        if ($user) {
            $user->user_status = 'general';
            $user->confirmation_code = null;
            $user->save();

            return redirect()->action('MembersController@directLogin')->with('msg-general', 'Success! Your email is verified.');
        }

        return redirect()->action('MembersController@directLogin')->with('msg', 'This email has been already verified.');
    }

    /*

    ---------------------------------------
    | User Profile
    ---------------------------------------
    |
    | Show user profile
    |

    */

    public function directProfile()
    {
        return view('CRUD.USERS.profile', ['user' => Auth::user()]);
    }

    public function updateProfileImage(Request $request)
    {
        $id = $request->input('id');
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $filename = time().str_random(10).'.'.$profile->getClientOriginalExtension();
            Image::make($profile)->resize(300, 300)->save(public_path('/images/profiles/'.$filename));
            $user = Users::findOrFail($id);
            $user->profile_img = $filename;
            $user->save();
        }

        $isadmin = $request->input('isadmin');
        if ($isadmin == "isadmin") {
          // from admin
          return redirect()->back();
        }
        return view('CRUD.USERS.profile', ['user' => $user]);

    }

    public function updateProfile(Request $request)
    {
        $id = $request->input('id');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $register_type = $request->input('type');
        $phone_number = $request->input('phone');
        $users = new Users();
        if ($users::where('id', $id)->update([
        'firstname'     => $firstname,
        'lastname'      => $lastname,
        'register_type' => $register_type,
        'phone_number'  => $phone_number,
      ])) {
            return redirect()->action('MembersController@directProfile')->with('msg-general', 'Basic profile is modified.');
        }
    }

    /*

    ---------------------------------------
    | Member Search
    ---------------------------------------
    |
    | Member Search
    |
    | user_status:
    |
    |   0. all
    |   1. member
    |   2. nolonger
    |   3. general
    |   4. invalid
    |   5. blocked
    |

    */

    public function filterUsers(Request $request)
    {
        $MAX_DISPLAY = 10;
        $user_status = $request->input('user_status');

        if ($user_status == 'all' || $user_status == null) {
            $users = Users::paginate($MAX_DISPLAY)->appends(['user_status' => $user_status]);
        } else {
            $users = Users::where('user_status', $user_status)->paginate($MAX_DISPLAY)->appends(['user_status' => $user_status]);
        }

        $teams = KUSA_TEAM::all();
        $roles = KUSA_ROLE::all();

        return view('CRUD.USERS.user-manage', [

          'users'       => $users,
          'user_status' => $user_status,
          'teams'       => $teams,
          'roles'       => $roles,

        ]);
    }

    public function directModify($user_id) {
      $userinfo = Users::findOrFail($user_id);
      return view('CRUD.USERS.user-modify', [
        'user'        => $userinfo,
        'user_status' => $userinfo->user_status,
        'teams'       => KUSA_TEAM::all(),
        'roles'       => KUSA_ROLE::all(),
      ]);
    }

    public function modifyUser(Request $request)
    {
        $id = $request->input('id');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $register_type = $request->input('register_type');
        $user_status = $request->input('user_status');
        $phone_number = $request->input('phone_number');

        $kusa_team = $request->input('kusa_team');
        $kusa_role = $request->input('kusa_role');

        if ($phone_number == null) {
            $phone_number = 'none';
        }

        if ($kusa_team == null) {
          $kusa_team = 'none';
        }

        if ($kusa_role == null) {
          $kusa_role = 'none';
        }

        $users = new Users();

        $update_result = $users::where('id', $id)->update([
          'firstname'     => $firstname,
          'lastname'      => $lastname,
          'email'         => $email,
          'register_type' => $register_type,
          'user_status'   => $user_status,
          'phone_number'  => $phone_number,
        ]);

        $user = Users::find($id);

        $roles = array();
        $teams = array();

        /*
          Iterate through role
        */

        if ($kusa_role != 'none') {

          foreach ($kusa_role as $role) {
            $roles[] = KUSA_ROLE::where('role', '=', $role)->first();
          }

          $roleids = array();
          foreach ($roles as $role) {
            $roleids[] = $role->id;
          }

          $user->roles()->sync($roleids);

        } else {
          $user->roles()->detach();
        }

        /*
          Iterate through team
        */

        if ($kusa_team != 'none') {

          foreach ($kusa_team as $team) {
            $teams[] = KUSA_TEAM::where('team_name', '=', $team)->first();
          }

          $teamids = array();
          foreach ($teams as $team) {
            $teamids[] = $team->id;
          }

          $user->teams()->sync($teamids);

        } else {
          // if $kusa_team is none
          $user->teams()->detach();
        }

        if ($update_result) {
            return redirect()->back()->with('msg-general', 'User information is modified.');
        }

    }

    public function deleteUser($user_id)
    {
        $users = new Users();
        if ($users::where('id', $user_id)->delete()) {
            return redirect()->action('AdminController@directUserManage')->with('msg-general', 'User has been deleted.');
        }
    }
}
