@extends('layouts.dashboard-layout')
@section('content')

<div class = "container">
  <div class = "panel panel-primary" style = "margin-left: 150px;">
    <div class = "panel-heading">
      <div class = "panel-title">Filter Users</div>
    </div>
    <div class = "panel-body">
      <form method = "POST" action = "user-manage">
        {{ csrf_field() }}
        <div class = "form-group">
          <div class = "col-sm-2">
            <select class = "form-control" name = "user_status">
              <option <?php if ($user_status == "all") echo ("selected") ?>>all</option>
              <option <?php if ($user_status == "member") echo ("selected") ?>>member</option>
              <option <?php if ($user_status == "nolonger") echo ("selected") ?>>nolonger</option>
              <option <?php if ($user_status == "general") echo ("selected") ?>>general</option>
              <option <?php if ($user_status == "invalid") echo ("selected") ?>>invalid</option>
              <option <?php if ($user_status == "blocked") echo ("selected") ?>>blocked</option>
            </select>
          </div>
          <div class = "col-sm-3">
            <input class = "form-control" name = "search_field">
          </div>
          <div class = "col-sm-3">
            <button type = "submit" class = "btn btn-primary"><i class = "fa fa-search"></i> Filter</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class = "panel panel-primary" style = "overflow: auto; margin-left: 150px;">
    <div class = "panel-body">
      <table class = "table" >
        <thead>
          <tr>
            <th>Profile image</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td> <img src = "images/profiles/{{ $user->profile_img }}" width = "150px" height = "150px"> </td>
              <td> {{ $user->firstname }} </td>
              <td> {{ $user->lastname }} </td>
              <td> {{ $user->email }}</td>
              <td> @if ($user->user_status != "admin") <button class = "btn btn-primary" data-toggle = "modal" data-target = ".view-info"><i class = "fa fa-search"></i> View</button> @endif</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <center> {{ $users->appends(['user_status' => $user_status])->render() }} </center>
    </div>
  </div>
</div>

<div class = "modal fade view-info" role = "dialog" tabindex = "-1" aria-labelledby="View Info" aria-hidden = "true">
  <div class = "modal-dialog modal-lg">
    <div class = "modal-content">
      <div class = "container"> <h1>hi</h1> </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
      $('#kusa_team').multiselect();
  });
</script>
@stop
