<?php

namespace App\Http\Controllers;

use App\Roles;
use Auth;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function postRole(Request $request)
    {
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

    public function modifyRole(Request $request)
    {
        $role_id = $request->input('role_id');
        $role_title = $request->input('modify_field');
        $role = new Roles();
        if ($role::where('id', $role_id)->update([
        'role' => $role_title,
      ])) {
            return redirect()->action('AdminController@directRoleManage')->with('msg-general', 'Role has been modifed.');
        }
    }

    public function deleteRole($role_id)
    {
        $user = Auth::user();
        if ($user->user_status == 'admin') {
            $role = new Roles();
            if ($role::where('id', $role_id)->delete()) {
                return redirect()->action('AdminController@directRoleManage')->with('msg-general', 'Role has been deleted.');
            } else {
                return redirect()->action('MembersController@directRoleManage')->with('msg', 'Error occured.');
            }
        }

        return redirect()->action('MembersController@directIndex')->with('msg', 'Admin authentication failed.');
    }
}
