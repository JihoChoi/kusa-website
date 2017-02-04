<?php

namespace App\Http\Controllers;

use App\EVENT_CATEGORY;
use App\KUSA_ROLE;
use App\KUSA_TEAM;
use App\Posts;
use App\Users;
use Auth;

class AdminController extends Controller
{

/*

--------------------------------------------------------------
| Direct Collections
--------------------------------------------------------------
|
| Directing to various routes.
|
--------------------------------------------------------------
*/

    public function directDashboard()
    {
      $users = Users::all();
      $contents = Posts::all();
      return view('dashboard', compact('contents', 'users'));
    }

    public function directPost()
    {
      $event_types = EVENT_CATEGORY::all();
      return view('CRUD.post', compact('event_types'));
    }

    public function directEdit()
    {
        return view('CRUD.edit');
    }

    public function directDelete()
    {
        return view('CRUD.delete');
    }

    public function directEventCategoryManage()
    {
      $categories = EVENT_CATEGORY::paginate(10);
      return view('CRUD.EVENTS.event-category-manage', ['categories' => $categories]);
    }

    public function directTeamManage()
    {
      $teams = KUSA_TEAM::paginate(10);
      return view('CRUD.TEAMS.team-manage', ['teams' => $teams]);
    }

    public function directRoleManage()
    {
      $roles = KUSA_ROLE::paginate(10);
      return view('CRUD.ROLES.role-manage', ['roles' => $roles]);
    }

    public function directPostImages($post_id)
    {
      $post = Posts::findOrFail($post_id);
      return view('posts.postimages', ['post' => $post]);
    }
}
