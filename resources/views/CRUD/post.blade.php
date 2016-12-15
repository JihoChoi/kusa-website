@extends('layouts.dashboard-layout')
@section('content')
<div class = "container">
  <form role = "form" action = "" method = "POST" data-toggle = "validator">
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
          <a class = "btn btn-primary"><i class = "fa fa-plus"></i> Add Category</a>
        </div>
      </div>
    </div>
    <div class = "container">
      <div class = "form-group">
        <textarea class = "form-control" name = "content_area"></textarea>
      </div>
    </div>
    <div class = "container">
      <div class = "form-group">
        <button type = "submit" class = "btn btn-primary btn-lg">Post</button>
      </div>
    </div>
  </form>
</div>
@stop
