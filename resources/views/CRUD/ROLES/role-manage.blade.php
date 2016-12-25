@extends('layouts.dashboard-layout')
@section('content')
<div class = "container">
  <div class = "row">
    <div class = "col-sm-10" style = "margin-left: 150px;">
      <div class = "panel panel-primary">
        <div class = "panel-heading">
          <div class = "panel-title">
            Add a role
          </div>
        </div>
        <div class = "panel-body" style = "text-align: center;">
          <form role = "form" action = "" method = "POST" data-toggle = "validator">
            {{ csrf_field( )}}
            <div class = "col-sm-10">
              <input type = "text" class = "form-control" required placeholder = "Role title" name = "role_title">
            </div>
            <button class = "btn btn-primary" type = "submit"><i class = "fa fa-plus"></i> Add</button>
          </form>
        </div>
      </div>
    </div>
    <div class = "col-sm-10" style = "margin-left: 150px;">
      <div class = "panel panel-primary">
        <div class = "panel-heading">
          <div class = "panel-title">
            Manage Roles
          </div>
        </div>
        <div class = "panel-body">
          <table class = "table">
            <thead>
              <tr>
                <th>Role Title</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($roles as $role)
                <form role = "form" method = "POST" action = "role-manage-edit">
                  {{ csrf_field() }}
                  <tr>
                    <input type = "hidden" value = "{{ $role->id }}" name = "role_id">
                    <td><input type = "text" class = "form-control" name = "modify_field" value = "{{ $role->role }}"></td>
                    <td><button type = "submit" class = "btn btn-success">Save</button> <a href = "role-manage-delete/{{ $role->id }}"class = "btn btn-danger">Delete</a></td>
                  </tr>
                </form>
              @endforeach
            </tbody>
          </table>
          <center> {!! $roles->render(); !!} </center>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
