@extends('layouts.index-layout')
@section('title')
<title>Board</title>
@stop

@section('main-content')
<style>
body {
  background-color: #fcfcfc;
}
.container {
  margin-top: 150px;
}
</style>
<div class = "container">
  <div class = "page-header"><h1>회장단</h1></div>
  <div class="row">
    <div class="col-sm-5 col-md-3">
      <div class="thumbnail">
        <img src="http://placehold.it/350x350" alt="...">
        <div class="caption" style = "text-align: center;">
          <h2>허준</h2>
          <h3>회장단</h3>
          <p>임원</p>
        </div>
      </div>
    </div>
    <div class="col-sm-5 col-md-3">
      <div class="thumbnail">
        <img src="http://placehold.it/350x350" alt="...">
        <div class="caption" style = "text-align: center;">
          <h1>허준</h1>
          <h3>회장단</h3>
          <p>임원</p>
        </div>
      </div>
    </div>
    <div class="col-sm-5 col-md-3">
      <div class="thumbnail">
        <img src="http://placehold.it/350x350" alt="...">
        <div class="caption" style = "text-align: center;">
          <h1>허준</h1>
          <h3>회장단</h3>
          <p>임원</p>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
