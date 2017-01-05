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
.thumbnail {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.10);
}
</style>
<div class = "container">
  @foreach ($teams as $team)
    <div class = "page-header"><h2>{{ $team->team_name }}</h2></div>
    <div class = "row">
    @foreach ($active_members as $member)
      @foreach ($member->teams as $team_member)
        @if ($team_member->team_name == $team->team_name)
          <div class = "col-sm-5 col-md-3">
            <div class = "thumbnail">
              <img src = "/images/profiles/{{ $member->profile_img }}" class = "img-responsive" width = "350px" height = "350px">
              <div class = "caption" style = "text-align: center;">
                <h3>{{ $member->lastname }} {{ $member->firstname }}</h3>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>
  @endforeach
</div>
@stop
