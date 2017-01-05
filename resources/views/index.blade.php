@extends('layouts.index-layout')
@section('title')
<title>Welcome to Purdue KUSA</title>
@stop
@section('main-content')
<div class = "container-fluid background-A3CFEA">
    <div class = "container main-title">
        PURDUE KOREAN UNDERGRADUATE STUDENT ASSOCIATION
    </div>
    <div class = "container sub-video">
      <div class = "outer">
        <video controls width="560" height="315" frameborder="0" src='/videos/kusa-video.mp4' type = 'video/mp4' allowfullscreen></video>
      </div>
    </div>
    <div class = "container">
      <!--
      <div class="strike">
        <span style = "color: #f4645f; font-size: 15px;">KUSA  ANNOUNCEMENTS  /  NEWS</span>
      </div>
    -->
      <div class = "page-header">
        <h3 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif;">Latest News</h3>
      </div>

      <div class = "row" style = "margin-top: 30px;">
        <div class = "col-sm-2 col-md-4 col-lg-4">
          <div class = "thumbnail">
            <img src = "/images/events/post.jpg" class = "img-responsive" width = "550px">
            <div class = "caption" style = "text-align: center;">
              <h4>News 1</h4>
            </div>
          </div>
        </div>
        <div class = "col-sm-2 col-md-4 col-lg-4">
          <div class = "thumbnail">
            <img src = "/images/events/kusa_all.jpg" class = "img-responsive" width = "550px">
            <div class = "caption" style = "text-align: center;">
              <h4>News 1</h4>
            </div>
          </div>
        </div>
        <div class = "col-sm-2 col-md-4 col-lg-4">
          <div class = "thumbnail">
            <img src = "/images/events/post.jpg" class = "img-responsive" width = "550px">
            <div class = "caption" style = "text-align: center;">
              <h4>News 1</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@stop
