@extends('layouts.email-layout')
@section('content')
<h3>Welcome {{$member->firstname}}!</h3>
<hr>
<p style = "font-size: 18px;">
  Thanks for joining our community. <br>
  Please click button below to verfiy your email.<br>
  <a style = "margin-top: 15px;" class = "btn btn-primary btn-lg" href = "#">버튼</a>
</p>
@stop
