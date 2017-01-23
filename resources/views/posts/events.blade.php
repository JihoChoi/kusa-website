@extends('layouts.index-layout')
@section('main-content')
<div class = "container">
</div>
<div class = "container" style = "">
  <div class = "col-md-8">
    @foreach ($events as $event)
      <div class = "content-container">
        <img class = "img-responsive" src = "/images/dispimg/{{ $event->dispimg }}">
        <div class = "event-box">
          <div class = "thumbnail">
            <h4 class = "category">{{ date('F d, Y', strtotime($event->created_at)) }}</h4>
            <p class = "category">{{ $event->event_category }}</p>
            <h3 class = "caption" style = "padding-left: 40px; font-family: 'Open Sans', sans-serif; color: white;">{{ $event->content_title }}</h3>
            <div class = "summary">
              <?php
                $content = strip_tags($event->content);
                $content = mb_substr($content, 0, 100, "utf-8");
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
<center> {{ $events->render() }} </center>
@include('footer')
@stop
