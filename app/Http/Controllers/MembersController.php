<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use Input;
use Mail;
use Auth;
use App\Users;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class MembersController extends Controller
{
    //
    public function directIndex() {
      return view('index');
    }
    public function directLogin() {
      return view('login');
    }

    public function doLogin(Request $request) {
      $credential = array(
        'email' => $request->input('username'),
        'password' => $request->input('password')
      );

      if (Auth::attempt($credential, true)) {
        $userinfo = Auth::user();
        if ($userinfo->user_status == "invalid") {
          $request->session()->flash('msg', 'Please clink on the confirmation link in your email to verify before you can proceed.');
          Auth::logout();
          return $this->directLogin();
        }
        $request->session()->flash('msg-general', 'Welcome '.$userinfo->firstname.'!');
        return $this->directIndex();
      } else {
        $request->session()->flash('msg', 'Your email address or password does not match with our record.');
        return $this->directLogin();
      }


    }

    public function directRegister() {
      return view('register');
    }

    public function doLogout() {
      Auth::logout();
      return redirect()->action('MembersController@directLogin')->with('msg-general', 'You are now signed out.');
    }

    public function doRegister(Request $request) {
      $profileimg = '/images/profiles/default/default.png';
      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $username = $request->input('email');
      $password = Hash::make($request->input('password-reconfirm'));
      $registertype = $request->input('type');
      $rememberToken = '';
      $userstatus = 'invalid';
      $phonenumber = $request->input('phone');
      $kusa_team = 'none';
      $kusa_role = 'none';
      $reset_token = '';
      $confirmation_code = str_random(45);

      $member = new Users();
      $member->profile_img_path = $profileimg;
      $member->firstname = $firstname;
      $member->lastname = $lastname;
      $member->email = $username;
      $member->password = $password;
      $member->register_type = $registertype;
      $member->user_status = $userstatus;
      $member->phone_number = $phonenumber;
      $member->kusa_team = $kusa_team;
      $member->kusa_role = $kusa_role;
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

    public function emailConfirmation($member) {
      Mail::send('email.email-verification', ['member' => $member], function ($message) use ($member) {
        $message->from('purduekusa@gmail.com', 'Purdue KUSA');
        $message->to($member->email);
        $message->subject("Purdue KUSA: Verify your account");
      });
    }

    public function confirm($confirmation_code) {
      $user = Users::where('confirmation_code', $confirmation_code)->first();
      if ($user) {
        $user->user_status = "general";
        $user->confirmation_code = null;
        $user->save();
        return redirect()->action('MembersController@directLogin')->with('msg-general', 'Success! Your email is verified.');
      }
      return redirect()->action('MembersController@directLogin')->with('msg', 'This email is already verified.');
    }
}
