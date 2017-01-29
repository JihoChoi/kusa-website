@extends('layouts.index-layout')
@section('title')
  <title>Events</title>
@endsection
@section('main-content')
<div class = "container">
</div>
<div class = "container" style = "">
  <div class = "col-md-8">
    @foreach ($events as $event)
      <div class = "content-container">
        <a href = "view/{{ $event->id }}"><img class = "img-responsive" src = "/images/dispimg/{{ $event->dispimg }}"></a>
        <div class = "event-box">
          <div class = "thumbnail">
            <h4 class = "category">{{ date('F d, Y', strtotime($event->created_at)) }}</h4>
            <p class = "category">{{ $event->event_category }}</p>
            <a href = "view/{{ $event->id }}"><h3 class = "caption" style = "padding-left: 40px; font-family: 'Open Sans', sans-serif; color: white;">{{ $event->content_title }}</h3></a>
            <div class = "summary">
              <?php
                $content = strip_tags($event->content);
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
      <h4 class = "sidebox-title">Categories</h4>
      <div class = "sidebox-contents">
        <a href = "#"><h5 class = "sidebox-content">All</h5></a>
        @foreach ($event_categories as $event_category)
          <a href = "#"><h5 class = "sidebox-content">{{ $event_category->event_type }}</h5></a>
        @endforeach
      </div>
    </div>
  </div>
</div>
<center> {{ $events->render() }} </center>
@include('footer')
@stop
