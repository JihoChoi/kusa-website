@extends('layouts.email-layout')
@section('content')
<h3>Welcome {{$member->firstname}}!</h3>
<hr>
<p style = "font-size: 18px; text-align: center;">
  Thanks for joining our community. <br>
  Please click link below to verfiy your email.<br>
  <!--https://localhost:8000/register/verify/confirmation_code-->
  <a style = "margin-top: 15px; text-docoration: none;" href = "http://localhost:8000/register/verify/{{ $member->confirmation_code }}">Confirm</a>
</p>
@stop
