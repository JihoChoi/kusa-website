@extends('layouts.dashboard-layout')
@section('content')
<div class = "container">
  <div class = "panel panel-primary" style = "margin-left: 150px;">
    <div class = "panel-heading">
      <div class = "panel-title">Search User</div>
    </div>
    <div class = "panel-body">
      <form method = "POST" action = "">
        {{ csrf_field() }}
        <div class = "form-group">
          <div class = "col-sm-3">
            <select class = "form-control" name = "user_status">
              <option>all</option>
              <option>active</option>
              <option>nolonger</option>
              <option>general</option>
              <option>invalid</option>
              <option>blocked</option>
            </select>
          </div>
          <div class = "col-sm-6">
            <input class = "form-control" type = "text" placeholder = "검색할 사람의 이름" name = "search_field">
          </div>
          <div class = "col-sm-3">
            <button type = "submit" class = "btn btn-primary"><i class = "fa fa-search"></i> Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <table class = "table" style = "margin-left: 150px;">
    <thead>
      <tr>
        <th>Profile</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Registration type</th>
        <th>User Status</th>
        <th>Phone number</th>
        <th>KUSA Team</th>
        <th>KUSA Role</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td><img src = "{{ $user->profile_img_path }}"></td>
        <td>{{ $user->firstname }}</td>
        <td>{{ $user->lastname }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->register_type }}</td>
        <td>{{ $user->user_status }}</td>
        <td>{{ $user->phone_number }}</td>
        <td>{{ $user->kusa_team }}</td>
        <td>{{ $user->kusa_role }}</td>
        <td><a href = "#" class = "btn btn-success">Edit</a> <a class = "btn btn-danger" href = "#">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop
