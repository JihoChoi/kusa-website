<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\EVENT_CATEGORY;

class PostsController extends Controller
{
    // CRUD Controller
    public function postContent(Request $request) {
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
}
