<?php

namespace App\Http\Controllers;

use App\KUSA_TEAM;
use Auth;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function postTeamTitle(Request $request)
    {
        $team_title = $request->input('team_title');
        $team = new KUSA_TEAM();
        $team->team_name = $team_title;
        if (!($team::where('team_name', $team_title)->first())) {
            if ($team->save()) {
                return redirect()->action('AdminController@directTeamManage')->with('msg-general', 'Team has been added.');
            }
        } else {
            return redirect()->action('AdminController@directTeamManage')->with('msg', 'Duplicate team is not allowed.');
        }
    }

    public function modifyTeam(Request $request)
    {
        $team_id = $request->input('team_id');
        $team_title = $request->input('modify_field');
        $team = new KUSA_TEAM();
        if ($team::where('id', $team_id)->update([
        'team_name' => $team_title,
      ])) {
            return redirect()->back()->with('msg-general', 'Team has been modifed.');
        }
    }

    public function deleteTeam($team_id)
    {
        $user = Auth::user();
        if ($user->user_status == 'admin') {
            $team = new KUSA_TEAM();
            if ($team::where('id', $team_id)->delete()) {
                return redirect()->action('AdminController@directTeamManage')->with('msg-general', 'Team has been deleted.');
            }
        }

        return redirect()->action('MembersController@directIndex')->with('msg', 'Admin authentication failed.');
    }
}
