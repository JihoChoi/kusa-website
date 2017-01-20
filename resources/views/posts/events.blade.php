@extends('layouts.index-layout')
@section('main-content')
<div class = "container" style = "margin-top: 100px;">
  @foreach ($events as $event)
    <div class = "container-fluid content-container">
      <img class = "img-responsive" src = "/images/dispimg/{{ $event->dispimg }}">
      <div class = "event-box">
        <div class = "thumbnail">
          <h4 class = "caption" style = "padding-left: 40px; font-family: 'Open Sans', sans-serif; color: white;">{{ $event->content_title }}</caption>
        </div>
      </div>
    </div>
  @endforeach
  <center> {{ $events->render() }} </center>
</div>
@stop
