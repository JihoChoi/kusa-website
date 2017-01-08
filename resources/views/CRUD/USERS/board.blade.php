@extends('layouts.index-layout')
@section('title')
<title>Board</title>
@stop

@section('main-content')
<style>
body {
  background-color: #fcfcfc;
}
.container-intro {
  margin-top: -25px;
  background-color: white;
  text-align: center;
  height: 635px;
  background-image: url('/images/events/kusa_all.jpg');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
</style>
<div class = "container-intro">
</div>
<div class = "container">
  @foreach ($teams as $team)
    <div class = "page-header"><h4>{{ $team->team_name }}</h4></div>
    <div class = "row">
    @foreach ($active_members as $member)
      @foreach ($member->teams as $team_member)
        @if ($team_member->team_name == $team->team_name)
          <div class = "col-sm-5 col-md-3">
            <div class = "thumbnail">
              <img src = "/images/profiles/{{ $member->profile_img }}" class = "img-responsive" width = "350px" height = "350px">
              <div class = "caption" style = "text-align: center;">
                <h4 style = "font-family: 'Open Sans', sans-serif; letter-spacing: 0;">{{ $member->firstname }} {{ $member->lastname }}</h4>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>
  @endforeach
</div>
@include('footer')
@stop
