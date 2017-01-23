@extends('layouts.index-layout')
@section('title')
<title>{{ $post->content_title }}</title>
@endsection

@section('main-content')
<div class = "view-container">
  <img src = "/images/dispimg/{{ $post->dispimg }}" class = "img-responsive">
  <div class = "view-content">
    <div class = "story">
      <h1>{{ $post->content_title }}</h1><p style = "color: #9c9d9e;">Updated: {{ date('F d, Y', strtotime($post->created_at)) }} / <span style = "color: #f4645f;">{{$post->event_category}}</span></p>
      <hr><br>
      <?php
        echo ($post->content);
      ?>
    </div>
  </div>
</div>

<div class = "prev-next">
  @if ($prev != null)
    <div class = "prev pull-right">
      <a class = "btn btn-default" href = "/view/{{ $prev->id }}"> {{$prev->content_title}} <i class = "fa fa-chevron-right"></i></a>
    </div>
  @endif
  @if ($next != null)
    <div class = "next pull-left">
     <a  class = "btn btn-default" href = "/view/{{ $next->id }}"><i class = "fa fa-chevron-left"></i> {{$next->content_title}}</a>
    </div>
  @endif
</div>


@include('footer')
@endsection
