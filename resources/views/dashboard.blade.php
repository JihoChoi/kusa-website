@extends('layouts.dashboard-layout')
@section('title')
Purdue KUSA Admin Dashboard
@stop
@section('content')
<div class = "container">
  <div class = "col-sm-3" style = "margin-left: 150px;">
    <div class = "panel panel-primary">
      <div class = "panel-heading">
        <div class = "panel-title"><center>Total Users</center></div>
      </div>
      <div class = "panel-body">
        <center><h1>{{ count($users) }}</h1></center>
      </div>
    </div>
  </div>
  <div class = "col-sm-3">
    <div class = "panel panel-danger">
      <div class = "panel-heading">
        <div class = "panel-title"><center>Unchecked Messages</center></div>
      </div>
      <div class = "panel-body">
        <center><h1>0</h1></center>
      </div>
    </div>
  </div>
</div>
<div class = "container">
  <div class = "panel panel-primary" style = "margin-left: 150px;">
    <div class = "panel-heading">
      <div class = "panel-title">Posts</div>
    </div>
    <div class = "panel-body">
      <table class = "table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($contents as $content)
          <tr>
            <td>{{ $content->content_title }}</td>
            <td>{{ $content->event_category }}</td>
            <td><a class = "btn btn-primary">View</a><a class = "btn btn-success">Edit</a><a class = "btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
