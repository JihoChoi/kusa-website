@extends('layouts.index-layout')
@section('main-content')
<div class = "container" style = "">
  <div class = "col-md-8">
    @foreach ($announcements as $announcement)
      <div class = "content-container">
        <a href = "view/{{ $announcement->id }}"><img class = "img-responsive" src = "/images/dispimg/{{ $announcement->dispimg }}"></a>
        <div class = "event-box">
          <div class = "thumbnail">
            <h4 class = "category">{{ date('F d, Y', strtotime($announcement->created_at)) }}</h4>
            <p class = "category">{{ $announcement->event_category }}</p>
            <a href = "view/{{ $announcement->id }}"><h3 class = "caption" style = "padding-left: 40px; font-family: 'Open Sans', sans-serif; color: white;">{{ $announcement->content_title }}</h3></a>
            <div class = "summary">

              <?php
                $content = strip_tags($announcement->content);
                $content = mb_substr($content, 0, 250, "utf-8");
                echo ($content);
              ?>

              ... (Read more)
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class = "col-md-4">
    <div class = "sidebox">
      <h4 class = "sidebox-title">Trending</h4>
    </div>
  </div>
</div>
<center> {{ $announcements->render() }} </center>
@include('footer')
@stop
