@extends('layouts.dashboard-layout')
@section('content')
<div class = "container">
  <div class = "row">
    <div class = "col-sm-10" style = "margin-left: 150px;">
      <div class = "panel panel-primary">
        <div class = "panel-heading">
          <div class = "panel-title">
            Add a new category
          </div>
        </div>
        <div class = "panel-body" style = "text-align: center;">
          <form role = "form" action = "" method = "POST" data-toggle = "validator">
            {{ csrf_field( )}}
            <div class = "col-sm-10">
              <input type = "text" class = "form-control" required placeholder = "Event category title" name = "event_type">
            </div>
            <button class = "btn btn-primary" type = "submit">Add</button>
          </form>
        </div>
      </div>
    </div>
    <div class = "col-sm-10" style = "margin-left: 150px;">
      <div class = "panel panel-primary">
        <div class = "panel-heading">
          <div class = "panel-title">
            Manage Categories
          </div>
        </div>
        <div class = "panel-body">
          <table class = "table">
            <thead>
              <tr>
                <th>Category</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
              <tr>
                <td>{{ $category->event_type }}</td>
                <td><a href = "event-category-manage-edit/{{ $category->event_type }}"class = "btn btn-success">Edit</a><a class = "btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
