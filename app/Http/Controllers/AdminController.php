<?php

namespace App\Http\Controllers;

use App\EVENT_CATEGORY;
use App\KUSA_ROLE;
use App\KUSA_TEAM;
use App\Posts;
use App\Users;
use Auth;
use DB;

class AdminController extends Controller
{
    //

    public function isAdmin()
    {
        $username = Auth::user();
        $isadmin = $this->checkIfAdmin($username->email);

        return $isadmin;
    }

    public function checkIfAdmin($username)
    {
        $userinfo = Users::where('email', $username)->first();
        if ($userinfo) {
            if ($userinfo->user_status == 'admin') {
                return true;
            }
        }

        return false;
    }

    public function authFail()
    {
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

    public function directDashboard()
    {
        if ($this->isAdmin()) {
          $users = Users::all();
          $contents = Posts::all();
          return view('dashboard', compact('contents', 'users'));
        }

        return $this->authFail();
    }

    public function directPost()
    {
        if ($this->isAdmin()) {
            $event_types = EVENT_CATEGORY::all();

            return view('CRUD.post', compact('event_types'));
        }

        return $this->authFail();
    }

    public function directEdit()
    {
        if ($this->isAdmin()) {
            return view('CRUD.edit');
        }

        return $this->authFail();
    }

    public function directDelete()
    {
        if ($this->isAdmin()) {
            return view('CRUD.delete');
        }

        return $this->authFail();
    }

    public function directEventCategoryManage()
    {
        if ($this->isAdmin()) {
            $categories = EVENT_CATEGORY::paginate(10);

            return view('CRUD.EVENTS.event-category-manage', compact('categories'));
        }

        return $this->authFail();
    }

    public function directTeamManage()
    {
        if ($this->isAdmin()) {
            $teams = KUSA_TEAM::paginate(10);

            return view('CRUD.TEAMS.team-manage', compact('teams'));
        }

        return $this->authFail();
    }

    public function directRoleManage()
    {
        if ($this->isAdmin()) {
            $roles = KUSA_ROLE::paginate(10);

            return view('CRUD.ROLES.role-manage', compact('roles'));
        }

        return $this->authFail();
    }

    public function directUserManage()
    {
        if ($this->isAdmin()) {
            $users = Users::paginate(10);
            $teams = KUSA_TEAM::all();
            $roles = KUSA_ROLE::all();

            return view('CRUD.USERS.user-manage', compact('users', 'teams', 'roles'));
        }

        return $this->authFail();
    }
}
