@extends('layouts.dashboard-layout')
@section('content')
  <input type = "hidden" value = "{{ $post->id }}">
  <div class = "container">
    <div class = "panel panel-primary" style = "margin-left: 125px;">
      <div class = "panel-heading">
        <h3>{{ $post->content_title }}</h3>
      </div>
      <div class = "panel-body">
        <label class = "col-sm-3 label-control">Gallery Images: </label>
        <div class = "col-sm-6">
          <form enctype = "multipart/form-data" role = "form" action = "" method = "POST" data-toggle = "validator">
            {{ csrf_field() }}
            <input type = "file" name = "images[]" class = "pull-left" style = "margin-top: 5px;" multiple>
            <button type = "submit" class = "btn btn-primary">Post Images</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
