<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;
use Auth;

class RoleController extends Controller
{
    //
    public function postRole(Request $request) {
      $role_title = $request->input('role_title');
      $roles = new Roles();
      $roles->role = $role_title;
      if (!($roles::where('role', $role_title)->first())) {
        if ($roles->save()) {
          return redirect()->action('AdminController@directRoleManage')->with('msg-general', 'Role has been added.');
        }
      } else {
        return redirect()->action('AdminController@directRoleManage')->with('msg', 'Duplicate role is not allowed.');
      }
    }

    public function modifyRole(Request $request) {
      $role_id = $request->input('role_id');
      $role_title = $request->input('modify_field');
      $role = new Roles();
      if ($role::where('id', $role_id)->update(array(
        'role' => $role_title
      ))) {
        return redirect()->action('AdminController@directRoleManage')->with('msg-general', 'Role has been modifed.');
      }
    }

    public function deleteRole($role_id) {
      $user = Auth::user();
      if ($user->user_status == "admin") {
        $role = new Roles();
        if ($role::where('id', $role_id)->delete()) {
            return redirect()->action('AdminController@directRoleManage')->with('msg-general', 'Role has been deleted.');
        }
      }
      return redirect()->action('MembersController@directIndex')->with('msg', 'Admin authentication failed.');
    }
}
