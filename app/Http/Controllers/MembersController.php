<?php

namespace App\Http\Controllers;

use DB;
use Auth;
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
        'username' => $request->input('username'),
        'password' => $request->input('password')
      );

      if (Auth::attempt(credential, false)) {
        return view('/');
      } else {
        return view('login');
      }


    }

    public function directRegister() {
      return view('register');
    }

    public function doRegister(RegisterRequest $request) {
      $profileimg = '/images/profiles/default.png';
      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $username = $request->input('email');
      $password = Hash::make($request->input('password-reconfirm'));
      $registertype = Input::get('type');
      $rememberToken = '';
      $userstatus = 'general';
      $phonenumber - $request->input('phone');
      $kusa_team = 'none';
      $kusa_role = 'none';
    }
}
