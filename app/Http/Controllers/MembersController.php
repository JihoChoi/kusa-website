<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use Input;
use Auth;
use App\Users;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class MembersController extends Controller
{
    //
    public function directLogin() {
      return view('login');
    }

    public function doLogin(Request $request) {
      $credential = array(
        'email' => $request->input('username'),
        'password' => $request->input('password')
      );

      if (Auth::attempt($credential, false)) {
        return redirect('/');
      } else {
        return redirect('login');
      }


    }

    public function directRegister() {
      return view('register');
    }

    public function doLogout() {
      Auth::logout();
      return redirect('/');
    }

    public function doRegister(RegisterRequest $request) {
      $profileimg = '/images/profiles/default/default.png';
      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $username = $request->input('email');
      $password = Hash::make($request->input('password-reconfirm'));
      $registertype = $request->input('type');
      $rememberToken = '';
      $userstatus = 'general';
      $phonenumber = $request->input('phone');
      $kusa_team = 'none';
      $kusa_role = 'none';

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
      $member->remember_token = $rememberToken;

      $registered = $member->save();

      if ($registered) {
        echo 'Success!!!';
      } else {
        App::abort(500, 'Error');
      }
    }
}
