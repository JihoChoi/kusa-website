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
                <form role = "form" method = "POST" action = "event-category-manage-edit">
                  {{ csrf_field() }}
                  <tr>
                    <input type = "hidden" value = "{{ $category->id }}" name = "category_id">
                    <td><input type = "text" class = "form-control" name = "modify_field" value = "{{ $category->event_type }}"></td>
                    <td><button type = "submit" class = "btn btn-success">Edit</button><a href = "event-category-manage-delete/{{ $category->id }}"class = "btn btn-danger">Delete</a></td>
                  </tr>
                </form>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
