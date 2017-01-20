@extends('layouts.dashboard-layout')
@section('title')
Purdue KUSA Admin Dashboard
@stop
@section('content')
<div class = "container">
  <div class = "col-sm-3" style = "margin-left: 150px;">
    <div class = "panel panel-primary">
      <div class = "panel-heading">
        <div class = "panel-title"><center>Total Users</center></div>
      </div>
      <div class = "panel-body">
        <center><h1>{{ count($users) }}</h1></center>
      </div>
    </div>
  </div>
  <div class = "col-sm-3">
    <div class = "panel panel-danger">
      <div class = "panel-heading">
        <div class = "panel-title"><center>Unchecked Messages</center></div>
      </div>
      <div class = "panel-body">
        <center><h1>0</h1></center>
      </div>
    </div>
  </div>
</div>
<div class = "container">

</div>
@stop
