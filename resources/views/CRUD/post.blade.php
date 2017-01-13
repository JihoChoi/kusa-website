@extends('layouts.dashboard-layout')
@section('content')
<div class = "container">
  <div class = "container">
    <label class = "label-control">Upload Display Image</label>
    <form enctype = "multipart/form-data" action = "{{ action('PostsController@dispImg') }}" method = "POST">
      {{ csrf_field() }}
      <input type = "file" name = "dispimg" class = "pull-left" style = "margin-top: 5px;">
      <button type = "submit" class = "pull-right btn btn-primary"><i class = "fa fa-cloud-upload"></i> Upload</button>
    </form>
  </div>
  <form role = "form" action = "{{ action('PostsController@postContent') }}" method = "POST" data-toggle = "validator">
    {{ csrf_field() }}
    <div class = "container">
      <div class = "form-group">
        <label for = "content_title" class = "col-sm-3 control-label">Content Title:</label>
        <div class = "col-sm-9">
          <input type = "text" class = "form-control" name = "content_title" placeholder = "Content Title" required>
        </div>
      </div>
    </div>
    <div class = "container">
      <div class = "form-group">
        <label for = "content_category" class = "col-sm-3 control-label">Category:</label>
        <div class = "col-sm-6">
          <select class="form-control" id="content_category" name = "content_category">
            @foreach ($event_types as $event_type)
            <option>{{ $event_type->event_type }}</option>
            @endforeach
          </select>
        </div>
        <div class = "col-sm-3">
          <a class = "btn btn-primary" href = "event-category-manage"><i class = "fa fa-plus"></i> Manage Categories</a>
        </div>
      </div>
    </div>
  <!--  <div class = "container">
      <form enctype = "multipart/form-data" action = "profile" method = "POST" style = "margin-left: 150px;">
        {{ csrf_field() }}
        <input type = "file" name = "profile" class = "pull-left" style = "margin-top: 5px;" multiple>
        <button type = "submit" class = "pull-right btn btn-primary"><i class = "fa fa-cloud-upload"></i> Upload</button>
      </form>
    </div> -->
    <div class = "container">
      <div class = "form-group">
        <textarea class = "form-control" name = "content_area"></textarea>
      </div>
    </div>
    <div class = "container">
      <div class = "form-group">
        <button type = "submit" class = "btn btn-primary pull-right"><i class = "fa fa-plus"></i> Post</button>
      </div>
    </div>
  </form>
</div>
@stop
