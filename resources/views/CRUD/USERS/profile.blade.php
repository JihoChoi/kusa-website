@extends('layouts.index-layout')
@section('title')
<title> {{ $user->firstname }}'s profile</title>
@stop
@section('main-content')
<div class = "container" style = "margin-top: 150px; font-family: 'Ubuntu', sans-serif;">
  <div class = "panel panel-primary">
    <div class = "panel-heading">
      <div class = "panel-title">
        {{ $user->firstname }}'s profile
      </div>
    </div>
    <div class = "panel-body">
      <ul class = "nav nav-tabs">
        <li class = "active">
          <a data-toggle = "tab" href = "#profile"><i class = "fa fa-user"></i> Profile</a>
        </li>
        <li>
          <a data-toggle = "tab" href = "#authentication"><i class = "fa fa-lock"></i> Authentication</a>
        </li>
        <li>
          <a data-toggle = "tab" href = "#connectfb"><i class = "fa fa-facebook-square"></i> Connect Facebook</a>
        </li>
      </ul>
      <div class = "tab-content">
        <!-- #Profile -->
        <div id = "profile" class = "tab-pane active">
          <div class = "row">
            <div class = "col-md-10 col-md-offset-1">
              <img src = "/images/profiles/{{ $user->profile_img }}" style = "width: 150px; height: 150px; float: left; margin-top: 15px; margin-right: 25px;">
              <h2>{{ $user->firstname }}'s profile</h2>
              <label class = "label-control">Update Profile Image</label>
              <form enctype = "multipart/form-data" action = "profile" method = "POST">
                {{ csrf_field() }}
    						<input type = "hidden" name = "id" value = "{{ $user->id }}">
                <input type = "file" name = "profile" class = "pull-left" style = "margin-top: 5px;">
                <button type = "submit" class = "pull-right btn btn-primary"><i class = "fa fa-cloud-upload"></i> Upload</button>
              </form>
            </div>
          </div>
          <hr>
          <div class = "container">
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
                  <input id="phone" type = "text" class = "form-control" name = "phone" style = "width: 400px;" value = "{{ $user->phone_number }}" placeholder = "US Phone Number (optional)">
                </div>
              </div>
              <div class = "form-group" style = "margin-top: 10px">
                <div class = "col-sm-12 controls">
                  <center><button type = "submit" class = "btn btn-success"><i class = "fa fa-save"></i> Save</button></center>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- End of #Profile -->

        <!-- Authentication -->
        <div id = "authentication" class = "tab-pane">
          <style>
            .auth-container {
              margin-top: 25px;
              margin-left: 25px;
              width: 75.77%;
              margin: 0 auto;
            }

            .tab-title {
              margin-top: 20px;
              padding: 5px 0 10px 15px;
              margin-bottom: 15px;
              color: #000;
              text-align: center;
              background-color: #dcdcdc;
            }
          </style>
          <div class = "auth-container">
            <div class = "tab-title">
              <h3>Change Password</h3>
            </div>
            <form role = "form" class = "form-horizontal" method = "POST" action = "{{ action('MembersController@changePassword') }}" data-toggle = "validator">
              {{ csrf_field() }}
              <input type = "hidden" value = "{{ $user->id }}" name = "id">

              <div class = "form-group">
                <label class = "col-sm-3 label-control">Current Password</label>
                <div class = "col-sm-9">
                  <input id = "currentpassword" type = "password" class = "form-control" required = "true" name = "currentpassword" data-error = "A password is required">
                  <div class = "help-block with-errors"></div>
                </div>
              </div>
              <div class = "form-group">
                <label class = "col-sm-3 label-control">New Password</label>
                <div class = "col-sm-9">
                  <input id = "newpassword" type = "password" class = "form-control" required = "true" name = "newpassword" data-error = "A password is required">
                  <div class = "help-block with-errors"></div>
                </div>
              </div>
              <div class = "form-group">
                <label class = "col-sm-3 label-control">Confirm Password</label>
                <div class = "col-sm-9">
                  <input id = "confirmpassword" type = "password" class = "form-control" required = "true" name = "confirmpassword" data-error = "A password is required" data-match = "#newpassword" data-match-error = "Password does not match">
                  <div class = "help-block with-errors"></div>
                </div>
              </div>
              <div class = "form-group" style = "margin-top: 10px">
                <div class = "col-sm-12 controls">
                  <center><button type = "submit" class = "btn btn-success"><i class = "fa fa-save"></i> Change Password</button></center>
                </div>
              </div>
            </form>

            <div class = "tab-title">
              <h3>Change Email</h3>
            </div>
          </div>
        </div>
        <!-- End of #Authentication -->

        <!-- #Facebook -->
        <div id = "connectfb" class = "tab-pane">
          <h2>Connect facebook</h2>
        </div>
        <!-- End of #Facebook -->
      </div>
    </div>
  </div>
</div>

<div class = "container" style = "margin-top: 100px;">

</div>
@stop
