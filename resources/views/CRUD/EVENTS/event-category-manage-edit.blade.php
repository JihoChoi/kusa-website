@extends('layouts.dashboard-layout')
@section('content')
<div class = "container">
  <div class = "panel panel-primary" style = "margin-left: 150px;">
    <div class = "panel-heading">
      <div class = "panel-title">
        Edit Event Category
      </div>
    </div>
    <div class = "panel-body">
      <form role = "forms" method = "POST" action = "">
        {{ csrf_field( )}}
        <div class = "form-group">
          <div class = "col-sm-6">
            <input type = "text" class = "form-control" name = "event-category-edit-field">
          </div>
        </div>
        <div class = "form-group">
          <div class = "col-sm-3">
            <button type = "submit" class = "btn btn-primary">Modify</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@stop
