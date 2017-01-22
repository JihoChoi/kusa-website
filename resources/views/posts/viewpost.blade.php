@extends('layouts.index-layout')
@section('main-content')
<div class = "view-container">
  <img src = "/images/dispimg/{{ $post->dispimg }}" class = "img-responsive">
  <div class = "view-content">
    <center><h3>{{ $post->content_title }}</h3></center>
    <div class = "story">
      <?php
        echo ($post->content);
      ?>
    </div>
  </div>
</div>

<div class = "prev-next">
  @if ($prev != null)
    <div class = "prev pull-left">
      <a href = "/view/{{ $prev->id }}"><i class = "fa fa-chevron-left"></i>{{ $prev->id }} {{$prev->content_title}}</a>
    </div>
  @endif
  @if ($next != null)
    <div class = "next pull-right">
     <a href = "/view/{{ $next->id }}">{{$next->id}} {{$next->content_title}} <i class = "fa fa-chevron-right"></i></a>
    </div>
  @endif
</div>

@include('footer')
@stop
