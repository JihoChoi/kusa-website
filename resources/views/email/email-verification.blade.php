@extends('layouts.email-layout')
@section('content')
<h4>{{$member->firstname}}</h4>
<p>
  {{$body}}
</p>
@stop
