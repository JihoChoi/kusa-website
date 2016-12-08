@extends('layouts.index-layout')
@section('title')
<title>Join Purdue KUSA</title>
@stop
@section('main-content')
<style>
.register-container {
  max-width: 650px;
  margin-top: 150px;
}
</style>

<div class = "register-container container">
  <div class = "panel panel-primary">
    <div class = "panel-heading">
      <div class = "panel-title">Join Purdue KUSA</div>
    </div>
    <div class = "panel-body" style = "padding-top:30px;">
      <div class = "well" style = "font-size: 15px">
        We will use personal information to:
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
      <div style = "display:none" id = "register-alert" class = "alert alert-danger col-sm-12"></div>
      <span style = "color: red; font-size: 12px;">* required field</span>
      <form id = "registerform" class = "form-horizontal" role = "form" method = "POST" action = "">
        {{ csrf_field() }}
        <div class = "input-group" style = "margin-bottom: 25px">
          <span class = "input-group-addon"><i class = "glyphicon glyphicon-user"></i></span>
          <input id = "firstname" type = "text" class = "form-control" name = "firstname" placeholder = "First name*" required = "true">
        </div>
        <div class = "input-group" style = "margin-bottom: 25px">
          <span class = "input-group-addon"><i class = "glyphicon glyphicon-user"></i></span>
          <input id = "lastname" type = "text" class = "form-control" name = "lastname" placeholder = "Last name*" required = "true">
        </div>
        <div class = "input-group" style = "margin-bottom: 25px">
          <span class = "input-group-addon"><i class = "fa fa-at"></i></span>
          <input id = "email" type = "email" class = "form-control" name = "email" placeholder = "Email address*" required = "true">
        </div>
        <div class = "input-group" style = "margin-bottom: 25px">
          <span class = "input-group-addon"><i class = "glyphicon glyphicon-lock"></i></span>
          <input id = "register-password" type = "password" class = "form-control" name = "password" placeholder = "Password*" required = "true">
        </div>
        <div class = "input-group" style = "margin-bottom: 25px">
          <span class = "input-group-addon"><i class = "glyphicon glyphicon-lock"></i></span>
          <input id = "register-password-reconfirm" type = "password" class = "form-control" name = "password-reconfirm" placeholder = "Confirm Password*" required = "true">
        </div>
        <div class = "input-group" style = "margin-bottom: 25px">
          <label for="type">Registration Type*</label>
            <select class="form-control" id="type">
              <option>Undergraduate</option>
              <option>Graduate</option>
              <option>Faculty</option>
              <option>Family</option>
              <option>Alumni</option>
              <option>General</option>
            </select>
        </div>
        <script type = "text/javascript">
        $('document').ready(function($) {
            $('#phone').mask('(000) 000-0000');
        });
        </script>
        <div class = "input-group" style = "margin-bottom: 25px">
          <span class = "input-group-addon"><i class = "glyphicon glyphicon-phone"></i></span>
          <input id="phone" type = "text" class = "form-control" name = "phone" placeholder = "US Phone Number">
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
