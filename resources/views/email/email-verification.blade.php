@extends('layouts.email-layout')
@section('content')
<div class = "message">
  <p> Hi {{ $member->firstname }}! </p>
  <p> Thanks for joining Purdue Korean Undergraduate Student Association Community. </p>
  <p> To finish setting up your account, please click this button: <a class = "btn btn-success" href = "http://localhost:8000/register/verify/<?php echo $member->confirmation_code?>">
    VERIFY
  </a>
</div>
@stop
