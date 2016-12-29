@extends('layouts.index-layout')
@section('title')
<title>Board</title>
@stop

@section('main-content')
<style>
body {
  /*background-color: #fcfcfc;*/
}
.container {
  margin-top: 150px;
}
</style>
<div class = "container">
  @foreach ($teams as $team)
    <div class = "page-header"><h2>{{ $team->team_name }}</h2></div>
    @foreach ($active_members as $member)
      @if ($member->kusa_team == $team->team_name)
        <div class = "row">
          <div class = "col-sm-5 col-md-3">
            <div class = "thumbnail">
              <img src = "/images/profiles/{{ $member->profile_img }}" width = "150px" height = "150px">
              <div class = "caption" style = "text-align: center;">
                <h2>{{ $member->firstname}} {{$member->lastname}}</h2>
                <p> {{ $member->kusa_role }}</p>
              </div>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  @endforeach
</div>
@stop
