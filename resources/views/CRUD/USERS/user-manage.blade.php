@extends('layouts.dashboard-layout')
@section('content')
<div class = "container">
  <div class = "panel panel-primary" style = "margin-left: 150px;">
    <div class = "panel-heading">
      <div class = "panel-title">Filter Users</div>
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
          <div class = "col-sm-3">
            <button type = "submit" class = "btn btn-primary"><i class = "fa fa-search"></i> Filter</button>
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
        <input type = "hidden" value = "{{$user->id}}">
        <td><img src = "{{ $user->profile_img_path }}"></td>
        <td>
          @if ($user->user_status == "admin")
          {{$user->firstname}}
          @else
          <input class = "form-control" value = "{{ $user->firstname }}" style = "width: 100px;">
          @endif
        </td>
        <td>
          @if ($user->user_status == "admin")
          {{$user->lastname}}
          @else
          <input class = "form-control" value = "{{ $user->lastname }}" style = "width: 100px;">
          @endif
        </td>
        <td>
          @if ($user->user_status == "admin")
          {{$user->email}}
          @else
          <input class = "form-control" value = "{{ $user->email }}" style = "width: 200px;">
          @endif
        </td>
        <td>
          @if ($user->user_status == "admin")
          {{ $user->register_type }}
          @else
          <select class = "form-control" id = "register_type" name = "register_type">
            <option <?php if ($user->register_type == "Undergraduate") echo ("selected")?>>Undergraduate</option>
            <option <?php if ($user->register_type == "Graduate") echo ("selected")?>>Graduate</option>
            <option <?php if ($user->register_type == "Faculty") echo ("selected")?>>Faculty</option>
            <option <?php if ($user->register_type == "Family") echo ("selected")?>>Family</option>
            <option <?php if ($user->register_type == "Alumni") echo ("selected")?>>Alumni</option>
            <option <?php if ($user->register_type == "General") echo ("selected")?>>General</option>
          </select>
          @endif
        </td>
        <td>
          @if ($user->user_status == "admin")
          {{ $user->user_status }}
          @else
          <select class = "form-control" id = "user_status" name = "user_status">
            <option <?php if ($user->user_status == "active") echo ("selected")?>>active</option>
            <option <?php if ($user->user_status == "nolonger") echo ("selected")?>>nolonger</option>
            <option <?php if ($user->user_status == "general") echo ("selected")?>>general</option>
            <option <?php if ($user->user_status == "invalid") echo ("selected")?>>invalid</option>
            <option <?php if ($user->user_status == "blocked") echo ("selected")?>>blocked</option>
          </select>
          @endif
        </td>
        <td>{{ $user->phone_number }}</td>
        <td>{{ $user->kusa_team }}</td>
        <td>{{ $user->kusa_role }}</td>
        <td>
          @if ($user->user_status != "admin")
          <a href = "#" class = "btn btn-success">Edit</a> <a class = "btn btn-danger" href = "#">Delete</a>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@stop
