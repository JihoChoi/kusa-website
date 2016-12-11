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
      if ($this->isAdmin()) {
        return $this->directIndex();
      }
      return $this->authFail();
    }

    public function isAdmin() {
      $username = Auth::user();
      $isadmin = $this->checkIfAdmin($username->email);
      return $isadmin;
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


    public function directPost() {
      if ($this->isAdmin()) {
        return view('CRUD.post');
      }
      return $this->authFail();
    }

    public function directEdit() {

    }

    public function directDelete() {

    }


}
