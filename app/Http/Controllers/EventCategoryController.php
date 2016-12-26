<?php

namespace App\Http\Controllers;

use App\EVENT_CATEGORY;
use Auth;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    //
    public function postEventCategory(Request $request)
    {
        $event_type = $request->input('event_type');
        $eventcategory = new EVENT_CATEGORY();
        $eventcategory->event_type = $event_type;
        if (!($eventcategory::where('event_type', $event_type)->first())) {
            if ($eventcategory->save()) {
                return redirect()->action('AdminController@directEventCategoryManage')->with('msg-general', 'Category has been added.');
            }
        } else {
            return redirect()->action('AdminController@directEventCategoryManage')->with('msg', 'Duplicate category is not allowed.');
        }
    }

    public function modifyEventCategory(Request $request)
    {
        $event_id = $request->input('category_id');
        $event_type = $request->input('modify_field');
        $eventcategory = new EVENT_CATEGORY();
        if ($eventcategory::where('id', $event_id)->update([
        'event_type' => $event_type,
      ])) {
            return redirect()->back()->with('msg-general', 'Category has been modifed.');
        }
    }

    public function deleteEventCategory($category_id)
    {
        $user = Auth::user();
        if ($user->user_status == 'admin') {
            $eventcategory = new EVENT_CATEGORY();
            if ($eventcategory::where('id', $category_id)->delete()) {
                return redirect()->action('AdminController@directEventCategoryManage')->with('msg-general', 'Category has been deleted.');
            }
        }

        return redirect()->action('MembersController@directIndex')->with('msg', 'Admin authentication failed.');
    }
}
