<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function doRegister() {

    }
}
