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
            <th></th>
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
              <td> <input type = "hidden" value = "{{ $user->id }}"> </td>
              <td> <img src = "images/profiles/{{ $user->profile_img }}" width = "150px" height = "150px"> </td>
              <td> {{ $user->firstname }} </td>
              <td> {{ $user->lastname }} </td>
              <td> {{ $user->email }} </td>
              <td> @if ($user->user_status != "admin") <a class = "btn btn-success" href = "user-manage-edit/{{ $user->id }}"><i class = "fa fa-pencil-square-o"></i> Edit</a>
                <button class = "btn btn-danger" data-toggle = "modal" data-target = ".open_confirm_delete"><i class = "fa fa-trash"></i> Delete</button>
                @endif</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <center> {{ $users->appends(['user_status' => $user_status])->render() }} </center>
    </div>
  </div>
</div>

<div class = "modal fade open_confirm_delete" tabindex = "-1" id = "open_confirm_delete" role = "dialog">
  <div class = "modal-dialog modal-lg">
    <div class = "modal-content">
      <div class = "modal-header">
        <button type = "button" class = "close" data-dismiss = "modal">&times;</button>
        <h4 class = "modal-title">Confirm Delete</h4>
      </div>
      <div class = "modal-body">
        <p> Are you sure you want to delete? </p>
      </div>
      <div class = "modal-footer">
        <a class = "btn btn-danger" href = "#">Delete</a><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
      $('#kusa_team').multiselect();
  });
</script>
@stop
