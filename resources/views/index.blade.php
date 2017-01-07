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
        <video id = "intro" controls width="560" height="315" allowfullscreen>
          <source src="/videos/kusa_video.mp4" type = "video/mp4"/>
          <source src="/videos/kusa-video.webm" type = "video/webm"/>
          Your browser does not support this video.
        </video>
      </div>
    </div>
    <div class = "container" style = "background-color: white; width: 100vw; position: relative; margin-left: -50vw; left: 50%; height: 1500px;">
      <!--
      <div class="strike">
        <span style = "color: #f4645f; font-size: 15px;">KUSA  ANNOUNCEMENTS  /  NEWS</span>
      </div>
    -->
      <div class = "container">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;">Latest News / Announcements</h4>
        </div>

        <div class = "row" style = "margin-top: 30px;">
          <div class = "col-sm-2 col-md-4 col-lg-4">
            <div class = "thumbnail">
              <img src = "/images/events/post.jpg" class = "img-responsive" width = "550px">
              <div class = "caption" style = "text-align: center;">
                <h5>달콤하게 사랑을 전하세요.</h5>
              </div>
            </div>
          </div>
          <div class = "col-sm-2 col-md-4 col-lg-4">
            <div class = "thumbnail">
              <img src = "/images/events/kusa_all.jpg" class = "img-responsive" width = "550px">
              <div class = "caption" style = "text-align: center;">
                <h5>D-Korea</h5>
              </div>
            </div>
          </div>
          <div class = "col-sm-2 col-md-4 col-lg-4">
            <div class = "thumbnail">
              <img src = "/images/111.jpg" class = "img-responsive" width = "550px">
              <div class = "caption" style = "text-align: center;">
                <h5>News 1</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class = "container">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;">Events</h4>
        </div>

        <div class = "row">
          
        </div>
      </div>
    </div>
  </div>
  @include('footer')
@stop
