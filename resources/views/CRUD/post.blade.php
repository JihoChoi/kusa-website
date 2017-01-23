@extends('layouts.dashboard-layout')
@section('content')
<div class = "container">
  <form enctype = "multipart/form-data" role = "form" action = "{{ action('PostsController@postContent') }}" method = "POST" data-toggle = "validator">
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
            <option>Announcement</option>
            @foreach ($event_types as $event_type)
              <option>{{ $event_type->event_type }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class = "container">
      <label class = "col-sm-3 label-control">Display Image (<u>2048</u> × <u>1400</u> or bigger is preferable)</label>
      <div class = "col-sm-6">
        <input type = "file" name = "dispimg" class = "pull-left" style = "margin-top: 5px;">
      </div>
    </div>

    <div class = "container">
      <div class = "form-group">
        <textarea class = "form-control" name = "content_area"></textarea>
      </div>
    </div>

    <div class = "container">
      <div class = "form-group">
        <button type = "submit" class = "btn btn-primary btn-block" style = "height: 50px;">Post</button>
      </div>
    </div>
  </form>
</div>
@stop
