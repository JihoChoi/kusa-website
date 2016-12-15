@extends('layouts.dashboard-layout')
@section('content')
<div class = "col-sm-6">
  <div class = "panel panel-primary">
    <div class = "panel-heading">
      <div class = "panel-title">
        Add a new category
      </div>
    </div>
    <div class = "panel-body">
      <form role = "form" action = "" method = "POST" data-toggle = "validator">
        <input type = "text" class = "form-group" required placeholder = "Event category title">
        <button class = "btn btn-primary" type = "submit">Submit</button>
      </form>
    </div>
  </div>
</div>
@stop
