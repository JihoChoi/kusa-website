@extends('layouts.index-layout')
@section('title')
<title>Board</title>
@stop

@section('main-content')
<style>
body {
  background-color: #fcfcfc;
}
.container {
  margin-top: 150px;
}
</style>
<div class = "container">
  @foreach ($teams as $team)
    <div class = "page-header"><h2>{{ $team->team_name }}</h2></div>
    <div class = "row">
    @foreach ($active_members as $member)
      @if ($member->kusa_team == $team->team_name)
        <div class = "col-sm-5 col-md-3">
          <div class = "thumbnail">
            <img src = "/images/profiles/{{ $member->profile_img }}" class = "img-responsive" width = "350px" height = "350px">
            <div class = "caption" style = "text-align: center;">
              <h3>{{ $member->lastname }} {{ $member->firstname }}</h3>
              <p> {{ $member->kusa_role }} </p>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  </div>
  @endforeach
</div>
@stop
