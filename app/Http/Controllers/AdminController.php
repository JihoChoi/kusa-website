<?php

namespace App\Http\Controllers;

use App\Users;
use Auth;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function directIndex() {
      $users = DB::table('users')->get();
      $contents = DB::table('posts_table')->get();
      //$contents = $contents->toArray();
      return view('dashboard', compact("contents", "users"));
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
      if ($this->isAdmin()) {
        return view('CRUD.edit');
      }
      return $this->authFail();
    }


    public function directDelete() {
      if ($this->isAdmin()) {
        return view('CRUD.delete');
      }
      return $this->authFail();
    }



}
