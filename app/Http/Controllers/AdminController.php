<?php

namespace App\Http\Controllers;

use App\Users;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function directIndex() {
      return view('dashboard');
    }
    public function directDashboard() {
      $username = Auth::user();
      $isadmin = $this->checkIfAdmin($username->email);
      if ($isadmin) {
        return $this->directIndex();
      }
      return $this->authFail();
    }

    public function checkIfAdmin($username) {
      $userinfo = Users::where('email', $username)->first();
      if ($userinfo) {
        if ($userinfo->user_status == "admin") return true;
      }
      return false;
    }

    public function authFail() {
      return redirect()->action('MembersController@directIndex')->with('msg', 'Admin authentication failed.');
    }
}
