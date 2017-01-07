@extends('layouts.index-layout')
@section('title')
<title>KUSA Login</title>
@stop
@section('main-content')
<style>
.login-container {
  max-width: 650px;
  margin-top: 150px;
}
</style>
<div class = "login-container container">
  <div class = "panel panel-primary">
    <div class = "panel-heading">
      <div class = "panel-title">Login</div>
    </div>
    <div class = "panel-body" style = "padding-top:30px;">
      <div style = "display:none" id = "login-alert" class = "alert alert-danger col-sm-12"></div>

      <form id = "loginform" class = "form-horizontal" role = "form" method = "POST" action = "login" data-toggle = "validator">
        {{ csrf_field() }}
        <div class = "form-group">
          <label for = "login-username" class = "col-sm-3 control-label">Email</label>
          <div class = "col-sm-9">
            <input id = "login-username" type = "text" class = "form-control" name = "username" placeholder = "Email Address" required="true" data-error = "Please enter valid email address">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group">
          <label for = "login-password" class = "col-sm-3 control-label">Password</label>
          <div class = "col-sm-9">
            <input id = "login-password" type = "password" class = "form-control" name = "password" placeholder = "Password" required="true" data-error = "A password is required">
            <div class = "help-block with-errors"></div>
          </div>
        </div>
        <div class = "form-group" style = "margin-top: 10px">
          <div class = "col-sm-12 controls">
            <center>
            <button type = "submit" id = "btn-login" class = "btn btn-success">Login</button>
            <a class = "btn btn-primary">Forgot my password</a>
           </center>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@stop
