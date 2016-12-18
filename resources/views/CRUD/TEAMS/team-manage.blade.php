@extends('layouts.dashboard-layout')
@section('content')
<div class = "container">
  <div class = "row">
    <div class = "col-sm-10" style = "margin-left: 150px;">
      <div class = "panel panel-primary">
        <div class = "panel-heading">
          <div class = "panel-title">
            Add a team
          </div>
        </div>
        <div class = "panel-body" style = "text-align: center;">
          <form role = "form" action = "" method = "POST" data-toggle = "validator">
            {{ csrf_field( )}}
            <div class = "col-sm-10">
              <input type = "text" class = "form-control" required placeholder = "Team title" name = "team_title">
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
            Manage Teams
          </div>
        </div>
        <div class = "panel-body">
          <table class = "table">
            <thead>
              <tr>
                <th>Team Title</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($teams as $team)
                <form role = "form" method = "POST" action = "team-manage-edit">
                  {{ csrf_field() }}
                  <tr>
                    <input type = "hidden" value = "{{ $team->id }}" name = "team_id">
                    <td><input type = "text" class = "form-control" name = "modify_field" value = "{{ $team->team_name }}"></td>
                    <td><button type = "submit" class = "btn btn-success">Edit</button> <a href = "team-manage-delete/{{ $team->id }}"class = "btn btn-danger">Delete</a></td>
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
