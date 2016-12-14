@extends('layouts.dashboard-layout')
@section('title')
Purdue KUSA Admin Dashboard
@stop
@section('content')
<div class = "container">
  <div class = "panel panel-primary" style = "width: 800px; margin-left: 150px;">
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
          <tr>
            <td>Test1</td>
            <td>Test2</td>
            <td><a class = "btn btn-primary">View</a><a class = "btn btn-success">Edit</a><a class = "btn btn-danger">Delete</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
