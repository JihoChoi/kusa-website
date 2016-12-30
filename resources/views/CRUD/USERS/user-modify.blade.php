@extends('layouts.dashboard-layout')
@section('title')
Modify user
@stop

@section('content')
<div class = "container" style = "margin-left: 150px;">
  <div class = "jumbotron" style = "margin-left: 150px;">
    <h4>Modify {{ $user->firstname }}'s profile.</h4>
  </div>
</div>
@stop
