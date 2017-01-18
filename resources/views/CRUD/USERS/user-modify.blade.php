@extends('layouts.dashboard-layout')
@section('title')
Modify user
@stop

@section('content')
<div class = "container" style = "margin-left: 150px;">
  <div class = "panel panel-primary" style = "margin-left: 150px;">
    <div class = "panel-heading">
      <div class = "panel-title">  <center> <h3>Modify {{ $user->firstname }}'s profile.</h3> </center> </div>
    </div>
    <div class = "panel-body">

      <div class = "row">
        <div class = "col-md-10 col-md-offset-1">
          <img src = "/images/profiles/{{ $user->profile_img }}" style = "width: 150px; height: 150px; float: left; margin-right: 25px;">

          <label class = "label-control"><h2>Update Profile Image</h2></label>
          <form enctype = "multipart/form-data" action = "{{ action('MembersController@updateProfileImage') }}" method = "POST">
            {{ csrf_field() }}
            <input type = "hidden" name = "id" value = "{{ $user->id }}">
            <input type = "hidden" name = "isadmin" value = "isadmin">
            <input type = "file" name = "profile" class = "pull-left" style = "margin-top: 5px;">
            <button type = "submit" class = "pull-right btn btn-primary"><i class = "fa fa-cloud-upload"></i> Upload</button>
          </form>
        </div>
      </div>
      <hr>
      <form id = "modifyform" class = "form-horizontal" role = "form" method = "POST" action = "{{ action('MembersController@modifyUser') }}" data-toggle = "validator">
        {{ csrf_field() }}
        <input type = "hidden" name = "id" value = "{{ $user->id }}">
        <div class = "form-group">
          <label for="firstname" class = "col-sm-3 control-label">First Name</label>
          <div class = "col-sm-9">
            <input id = "firstname" type = "text" class = "form-control" name = "firstname" placeholder = "First name*" required = "true" data-error = "Please enter your first name" value = "{{ $user->firstname }}">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for="lastname" class = "col-sm-3 control-label">Last Name</label>
          <div class = "col-sm-9">
            <input id = "lastname" type = "text" class = "form-control" name = "lastname" placeholder = "Last name*" required = "true" data-error = "Please enter your last name" value = "{{ $user->lastname }}">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for = "email" class = "col-sm-3 control-label">Email</label>
          <div class = "col-sm-9">
            <input id = "email" type = "email" class = "form-control" name = "email" placeholder = "Email address*" data-error = "Please enter your valid email address" required = "true" value = "{{ $user->email }}">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for="type" class = "col-sm-3 control-label">Registration Type</label>
            <div class = "col-sm-9">
              <select class="form-control" id="register_type" name = "register_type">
                <option>Undergraduate</option>
                <option>Graduate</option>
                <option>Faculty</option>
                <option>Family</option>
                <option>Alumni</option>
                <option>General</option>
              </select>
            </div>
        </div>
        <div class = "form-group">
          @if ($user->user_status == "member")
            <label for = "team" class = "col-sm-3 control-label">Team</label>
            <div class = "col-sm-8">
              <select id = "kusa_team" name = "kusa_team[]" class = "selectpicker" multiple>
                @foreach ($teams as $team)
                  <option @foreach ($user->teams as $userteam) @if ($userteam->team_name == $team->team_name) {{ "selected" }} @endif @endforeach> {{ $team->team_name }} </option>
                @endforeach
              </select>
            </div>
          @endif
        </div>
        <div class = "form-group">
          @if ($user->user_status == "member")
            <label for = "team" class = "col-sm-3 control-label">Role</label>
            <div class = "col-sm-8">
              <select id = "kusa_role" name = "kusa_role[]" class = "selectpicker" multiple>
                @foreach ($roles as $role)
                  <option @foreach ($user->roles as $userrole) @if ($userrole->role == $role->role) {{ "selected" }} @endif @endforeach>{{ $role->role }}</option>
                @endforeach
              </select>
            </div>
          @endif
        </div>
        <div class = "form-group">
          <label for = "user_status" class = "col-sm-3 control-label">User Status</label>
          <div class = "col-sm-9">
            <select class = "form-control" name = "user_status">
              <option <?php if ($user_status == "member") echo ("selected") ?>>member</option>
              <option <?php if ($user_status == "nolonger") echo ("selected") ?>>nolonger</option>
              <option <?php if ($user_status == "general") echo ("selected") ?>>general</option>
              <option <?php if ($user_status == "invalid") echo ("selected") ?>>invalid</option>
              <option <?php if ($user_status == "blocked") echo ("selected") ?>>blocked</option>
            </select>
          </div>
        </div>
        <div class = "form-group">
          <label for="phone" class = "col-sm-3 control-label">Phone Number</label>
          <div class = "col-sm-9">
            <input id="phone" type = "text" class = "form-control" name = "phone_number" placeholder = "US Phone Number (not required)" value = "{{ $user->phone_number }}">
          </div>
        </div>
        <div class = "form-group" style = "margin-top: 10px">
          <div class = "col-sm-12 controls">
            <center>
              <button type = "submit" id = "btn-login" class = "btn btn-success pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
            </center>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script type = "text/javascript">

  $('document').ready(function() {
      $('#kusa_team').multiselect();
  });

  $('document').ready(function() {
      $('#kusa_role').multiselect();
  });

  $('document').ready(function($) {
      $('#phone').mask('(000) 000-0000');
  });

</script>
@stop
