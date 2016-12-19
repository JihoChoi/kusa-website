<?php

namespace App\Http\Controllers;

use App\Users;
use App\KUSA_TEAM;
use App\KUSA_ROLE;
use Auth;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

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

/*
--------------------------------------------------------------
| Direct Collections
--------------------------------------------------------------
|
| Directing to various routes.
|
*/

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

    public function directPost() {
      if ($this->isAdmin()) {
        $event_types = DB::table('event_categories')->get();
        return view('CRUD.post', compact('event_types'));
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

    public function directEventCategoryManage() {
      if ($this->isAdmin()) {
        $categories = DB::table('event_categories')->get();
        return view('CRUD.EVENTS.event-category-manage', compact("categories"));
      }
      return $this->authFail();
    }

    public function directTeamManage() {
      if ($this->isAdmin()) {
        $teams = DB::table('kusa-team')->get();
        return view('CRUD.TEAMS.team-manage', compact("teams"));
      }
      return $this->authFail();
    }

    public function directRoleManage() {
      if ($this->isAdmin()) {
        $roles = DB::table('roles')->get();
        return view('CRUD.ROLES.role-manage', compact("roles"));
      }
      return $this->authFail();
    }

    public function directUserManage() {
      if ($this->isAdmin()) {
        $users = DB::table('users')->get();
        $teams = KUSA_TEAM::all();
        $roles = KUSA_ROLE::all();
        return view('CRUD.USERS.user-manage', compact("users", "teams", "roles"));
      }
      return $this->authFail();
    }

}
