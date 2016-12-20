@extends('layouts.index-layout')
@section('title')
<title> {{ $user->firstname }}'s profile</title>
@stop
@section('main-content')
<style>
.alert-container {
	position: relative;
	top: 100px;
	max-width: 55em;
	width: 90%;
	margin: 0 auto;
}
</style>
<div class = "container" style = "margin-top: 130px; font-family: 'Ubuntu', sans-serif;">
  <div class = "panel panel-primary">
    <div class = "panel-body">
      <div class = "row">
        <div class = "col-md-10 col-md-offset-1">
          <img src = "/images/profiles/{{ $user->profile_img }}" style = "width: 150px; height: 150px; float: left; margin-right: 25px;">
          <h2>{{ $user->firstname }}'s profile</h2>
          <hr>
          <label class = "label-control">Update Profile Image</label>
          <form enctype = "multipart/form-data" action = "profile" method = "POST">
            {{ csrf_field() }}
            <input type = "file" name = "profile" class = "pull-left">
            <button type = "submit" class = "pull-right btn btn-primary"><i class = "fa fa-cloud-upload"></i> Upload</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class = "container" style = "margin-top: 100px;">
  <div class = "panel panel-primary">
    <div class = "panel-heading">
      <div class = "panel-title">Basic Profile</div>
    </div>
    <div class = "panel-body">
      <form class = "form-horizontal" method = "POST" action = "profile_update" data-toggle = "validator">
        {{ csrf_field() }}
        <input type = "hidden" value = "{{ $user->id }}" name = "id">
        <div class = "form-group" style = "margin-top: 35px;">
          <label for="firstname" class = "col-sm-3 control-label">First Name</label>
          <div class = "col-sm-9">
            <input id = "firstname" type = "text" class = "form-control" name = "firstname" placeholder = "First name*" required = "true" value = "{{ $user->firstname }}" style = "width: 400px;" data-error = "Please enter your first name">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for="lastname" class = "col-sm-3 control-label">Last Name</label>
          <div class = "col-sm-9">
            <input id = "lastname" type = "text" class = "form-control" name = "lastname" placeholder = "Last name*" required = "true" value = "{{ $user->lastname }}" style = "width: 400px;" data-error = "Please enter your last name">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for = "email" class = "col-sm-3 control-label">Email</label>
          <div class = "col-sm-9" style = "font-family: 'Ubuntu', sans-serif; font-size: 20px;">
            {{ $user->email }}
          </div>
        </div>
        <div class = "form-group">
          <label for="type" class = "col-sm-3 control-label">Registration Type</label>
            <div class = "col-sm-9">
              <select class="form-control" id="type" name = "type" style = "width: 400px;">
                @if ($user->user_status == "admin")
                  <option selected>admin</option>
                @else
                  <option <?php if ($user->register_type == "Undergraduate") echo ("selected")?>>Undergraduate</option>
                  <option <?php if ($user->register_type == "Graduate") echo ("selected")?>>Graduate</option>
                  <option <?php if ($user->register_type == "Faculty") echo ("selected")?>>Faculty</option>
                  <option <?php if ($user->register_type == "Family") echo ("selected")?>>Family</option>
                  <option <?php if ($user->register_type == "Alumni") echo ("selected")?>>Alumni</option>
                  <option <?php if ($user->register_type == "General") echo ("selected")?>>General</option>
                @endif
              </select>
            </div>
        </div>
        <script type = "text/javascript">
          $('document').ready(function($) {
              $('#phone').mask('(000) 000-0000');
          });
        </script>
        <div class = "form-group">
          <label for="phone" class = "col-sm-3 control-label">Phone Number</label>
          <div class = "col-sm-9">
            <input id="phone" type = "text" class = "form-control" name = "phone" style = "width: 400px;" value = "{{ $user->phone_number }}" placeholder = "US Phone Number (not required)">
          </div>
        </div>
        <div class = "form-group" style = "margin-top: 10px">
          <div class = "col-sm-12 controls">
            <center><button action = "submit" class = "btn btn-success"><i class = "fa fa-save"></i> Save</button></center>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@stop


<!--
<form class = "form-horizontal" method = "POST" action = "profile_update" style = "margin-left: -100px;">
  {{ csrf_field() }}
  <div class = "form-group" style = "margin-top: 35px;">
    <label for="firstname" class = "col-sm-2 control-label">First Name</label>
    <div class = "col-sm-5">
      <input id = "firstname" type = "text" class = "form-control" name = "firstname" placeholder = "First name*" required = "true" value = "{{ $user->firstname }}" style = "width: 400px;" data-error = "Please enter your first name">
      <div class = "help-block with-errors"></div>
    </div>
  </div>
  <div class = "form-group">
    <label for="lastname" class = "col-sm-2 control-label">Last Name</label>
    <div class = "col-sm-5">
      <input id = "lastname" type = "text" class = "form-control" name = "lastname" placeholder = "Last name*" required = "true" value = "{{ $user->lastname }}" style = "width: 400px;" data-error = "Please enter your last name">
      <div class = "help-block with-errors"></div>
    </div>
  </div>
  <div class = "form-group">
    <label for = "email" class = "col-sm-2 control-label">Email</label>
    <div class = "col-sm-5" style = "font-family: 'Ubuntu', sans-serif; font-size: 20px;">
      {{ $user->email }}
    </div>
  </div>
  <div class = "form-group">
    <label for="type" class = "col-sm-2 control-label">Registration Type</label>
      <div class = "col-sm-5">
        <select class="form-control" id="type" name = "type" style = "width: 400px;">
          @if ($user->user_status == "admin")
            <option selected>admin</option>
          @else
            <option <?php if ($user->register_type == "Undergraduate") echo ("selected")?>>Undergraduate</option>
            <option <?php if ($user->register_type == "Graduate") echo ("selected")?>>Graduate</option>
            <option <?php if ($user->register_type == "Faculty") echo ("selected")?>>Faculty</option>
            <option <?php if ($user->register_type == "Family") echo ("selected")?>>Family</option>
            <option <?php if ($user->register_type == "Alumni") echo ("selected")?>>Alumni</option>
            <option <?php if ($user->register_type == "General") echo ("selected")?>>General</option>
          @endif
        </select>
      </div>
  </div>
  <script type = "text/javascript">
    $('document').ready(function($) {
        $('#phone').mask('(000) 000-0000');
    });
  </script>
  <div class = "form-group">
    <label for="phone" class = "col-sm-2 control-label">Phone Number</label>
    <div class = "col-sm-5">
      <input id="phone" type = "text" class = "form-control" name = "phone" style = "width: 400px;" value = "{{ $user->phone_number }}" placeholder = "US Phone Number (not required)">
    </div>
  </div>
  <div class = "form-group pull-right">
    <button action = "submit" class = "btn btn-success"><i class = "fa fa-save"></i> Save</button>
  </div>
</form>
-->
