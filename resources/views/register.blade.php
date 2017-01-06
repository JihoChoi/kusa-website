@extends('layouts.index-layout')
@section('title')
<title>Join Purdue KUSA</title>
@stop
@section('main-content')
<style>
.register-container {
  position: relative;
  max-width: 650px;
  margin-top: 50px;
}
</style>

<div class = "register-container container">
  <div class = "panel panel-primary">
    <div class = "panel-heading">
      <div class = "panel-title">Join Purdue KUSA</div>
    </div>

    <div class = "panel-body" style = "padding-top:30px;">
      <div class = "well" style = "font-size: 15px">
        We will use your personal information to:
        <ul>
          <li>
            provide information, particularly those associated with Korean Undergraduate Student Association's.
          </li>
          <li>
            manage our internal operations.
          </li>
        </ul>
        We will only disclose information for the purpose for which it was collected, and where appropriate, after obtaining the necessary consent from the individual.
      </div>
      <form id = "registerform" class = "form-horizontal" role = "form" method = "POST" action = "register" data-toggle = "validator">
        {{ csrf_field() }}
        <div class = "form-group">
          <label for="firstname" class = "col-sm-3 control-label">First Name</label>
          <div class = "col-sm-9">
            <input id = "firstname" type = "text" class = "form-control" name = "firstname" placeholder = "First name*" required = "true" data-error = "Please enter your first name">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for="lastname" class = "col-sm-3 control-label">Last Name</label>
          <div class = "col-sm-9">
            <input id = "lastname" type = "text" class = "form-control" name = "lastname" placeholder = "Last name*" required = "true" data-error = "Please enter your last name">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for = "email" class = "col-sm-3 control-label">Email</label>
          <div class = "col-sm-9">
            <input id = "email" type = "email" class = "form-control" name = "email" placeholder = "Email address*" data-error = "Please enter your valid email address" required = "true">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for = "register-password" class = "col-sm-3 control-label">Password</label>
          <div class = "col-sm-9">
            <input id = "register-password" type = "password" class = "form-control" name = "password" placeholder = "Password*" required = "true" data-error = "A password is required">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for = "register-password-reconfirm" class = "col-sm-3 control-label">Confirm Password</label>
          <div class = "col-sm-9">
            <input id = "register-password-reconfirm" type = "password" class = "form-control" name = "password-reconfirm" placeholder = "Confirm Password*" required = "true" data-error = "A password is required" data-match = "#register-password" data-match-error = "Password does not match">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for="type" class = "col-sm-3 control-label">Registration Type</label>
            <div class = "col-sm-9">
              <select class="form-control" id="type" name = "type">
                <option>Undergraduate</option>
                <option>Graduate</option>
                <option>Faculty</option>
                <option>Family</option>
                <option>Alumni</option>
                <option>General</option>
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
            <input id="phone" type = "text" class = "form-control" name = "phone" placeholder = "US Phone Number (not required)">
          </div>
        </div>
        <div class = "form-group" style = "margin-top: 10px">
          <div class = "col-sm-12 controls">
            <center><button type = "submit" id = "btn-login" class = "btn btn-success">Sign Up</button></center>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@stop
