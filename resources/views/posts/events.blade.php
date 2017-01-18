@extends('layouts.index-layout')
@section('main-content')
<div class = "container" style = "margin-top: 150px;">
  @for ($i = count($events) - 1; $i >= 0; $i--)
      <div class = "row">
        <div class = "col-md-6">
          <center><img src = "/images/dispimg/{{ $events[$i]->dispimg }}" class = "img-responsive">
        </div>
      </div>
  @endfor
  <center> {{ $events->render() }} </center>
</div>
@stop
