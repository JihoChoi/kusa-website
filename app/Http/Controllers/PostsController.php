<?php

namespace App\Http\Controllers;

use App\EVENT_CATEGORY;
use App\Posts;
use Illuminate\Http\Request;
use Image;

class PostsController extends Controller
{
    // CRUD Controller
    public function postContent(Request $request)
    {

        $post = new Posts();
        $title = $request->input('content_title');
        $category = $request->input('content_category');
        $content = $request->input('content_area');
        $filename = 'null';

        if ($request->hasFile('dispimg')) {
          $dispimg = $request->file('dispimg');
          $filename = time().str_random(10).'.'.$dispimg->getClientOriginalExtension();
          Image::make($dispimg)->save(public_path('/images/dispimg/'.$filename));
          $post->dispimg = $filename;
        }

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
