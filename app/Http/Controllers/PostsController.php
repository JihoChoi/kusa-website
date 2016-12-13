<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\KUSA_ROLE;
use App\KUSA_TEAM;
use App\EVENT_CATEGORY;

class PostsController extends Controller
{
    // CRUD Controller
    public function postContent(Request $request) {
      $title = $request->input('content_title');
      $category = $request->input('event_category');
      $content = $request->input('content-area');

      $post = new Posts();
      $post->content_title = $title;
      $post->content = $content;
      $post->content_category = $category;
      $issaved = $post->save();

      if ($issaved) {
        return redirect()->action('AdminController@directDashboard')->with('msg-general', 'Content has been posted.');
      }
    }
}
