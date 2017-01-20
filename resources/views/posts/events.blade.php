@extends('layouts.index-layout')
@section('main-content')
<div class = "container" style = "margin-top: 100px;">
  @foreach ($events as $event)
    <div class = "content-container">
      {{ $event->content_title }}
      <div class = "content-img">
        <img class = "img-responsive" src = "/images/dispimg/{{ $event->dispimg }}">
      </div>
    </div>
  @endforeach
  <center> {{ $events->render() }} </center>
</div>
@stop
