@extends('layouts.index-layout')
@section('title')
<title> {{ $user->firstname }}'s profile</title>
@stop
@section('main-content')
<div class = "container" style = "margin-top: 130px; font-family: 'Ubuntu', sans-serif;">
  <div class = "row">
    <div class = "col-md-10 col-md-offset-1">
      <img src = "/images/profiles/{{ $user->profile_img }}" style = "width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
      <h2>{{ $user->firstname }}'s profile</h2>
      <hr>
      <label class = "label-control">Update Profile Image</label>
      <form enctype = "multipart/form-data" action = "profile" method = "POST">
        {{ csrf_field() }}
        <input type = "file" name = "profile" class = "pull-left">
        <button type = "submit" class = "pull-right btn btn-primary"><i class = "fa fa-cloud-upload"></i> Upload</button>
      </form>
    </div>
  </div>
</div>
@stop
