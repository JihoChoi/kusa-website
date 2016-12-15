<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EVENT_CATEGORY;

class EventCategoryController extends Controller
{
    //
    public function postEventCategory(Request $request) {
      $event_type = $request->input('event_type');
      $eventcategory = new EVENT_CATEGORY();
      $eventcategory->event_type = $event_type;

      if ($eventcategory->save()) {
        return redirect()->action('AdminController@directDashboard')->with('msg-general', 'Category has been added.');
      }
    }
}
