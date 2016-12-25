<?php

namespace App\Http\Controllers;

use App\EVENT_CATEGORY;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // CRUD Controller
    public function postContent(Request $request)
    {
        $title = $request->input('content_title');
        $category = $request->input('content_category');
        $content = $request->input('content_area');

        $post = new Posts();
        $post->content_title = $title;
        $post->content = $content;
        $post->event_category = $category;
        $issaved = $post->save();

        if ($issaved) {
            return redirect()->action('AdminController@directDashboard')->with('msg-general', 'Content has been posted.');
        }
    }

    public function editContent(Request $request)
    {
        $id = $request->input('content_id');
        $title = $request->input('content_title');
        $category = $request->input('content_category');
        $content = $request->input('content_area');

        $post = new Posts();
        if ($posts::where('id', $id)->update([
          'content_title' => $title,
          'content' => $content,
          'event_category' => $category,
        ])) {
          return redirect()->action('AdminController@directDashboard')->with('msg-general', 'Content has been modified.');
        }
    }
}
