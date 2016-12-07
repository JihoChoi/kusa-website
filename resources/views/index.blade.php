@extends('layouts.index-layout')
@section('nav-content')
<li class = "active"><a href = "#">Home</a></li>
<li class = "dropdown">
  <a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">About<span class = "caret"></span></a>
  <ul class = "dropdown-menu">
    <li><a href = "#">Kusa</a></li>
    <li><a href = "#">Members</a></li>
  </ul>
</li>
<li class = "dropdown">
  <a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Updates<span class = "caret"></span></a>
  <ul class = "dropdown-menu">
    <li><a href = "#">News</a></li>
    <li><a href = "#">D-Korea</a></li>
    <li><a href = "#">Calendar</a></li>
  </ul>
</li>
<li class = "dropdown">
  <a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Resources<span class = "caret"></span></a>
  <ul class = "dropdown-menu">
    <li><a href = "#">link</a></li>
    <li><a href = "#">link2</a></li>
  </ul>
</li>
@stop
@section('main-content')
<div class = "container-fluid background-A3CFEA">
    <div class = "container main-title">
      <h1 style="color: black;">
        We are a <span style = "color: white">Korean Community</span> that helps fellow international students gently blend in with the foreign customs.
      </h1>

    </div>
    <div class = "container sub-video">
      <div class = "outer">
        <video controls width="560" height="315" frameborder="0" src="/videos/kusa-video.mp4" type = "video/mp4" allowfullscreen>
          <!--<source src="/videos/kusa-video.mp4" type = "video/mp4"/>-->
        </video>
      </div>
    </div>
    <div class = "container">
      <h1 data-aos = "fade-in" data-aos-once = "true" style = "font-family: 'Ubuntu', sans-serif;">Mission Statements</h1>
      <!--<center><h4 style = "font-family: 'Ubuntu', sans-serif;">Sub title</h4><center>-->
      <hr class = "style5">
      <!-- first row -->
      <div class = "row">
        <div class = "col-sm-4" data-aos = "fade-in" data-aos-delay = "100" data-aos-once = "true">
          <div class = "panel panel-primary">
            <div class = "panel-heading"><center><i class = "glyphicon glyphicon-glass" style = "font-size: 55px;"></i></center></div>
            <div class = "panel-body">
              <p>
                <center>Provide “_____” to improve students' life at Purdue University.</center>
                <br><br>
              </p>
            </div>
          </div>
        </div>
        <div class = "col-sm-4" data-aos = "fade-in" data-aos-delay = "200" data-aos-once = "true">
          <div class = "panel panel-success">
            <div class = "panel-heading"><center><i class = "glyphicon glyphicon-camera" style = "font-size: 55px;"></i></center></div>
            <div class = "panel-body">
              <p>
                <center>Coordinate various events and activities centered around undergraduate students at Purdue University.</center>
              </p>
              <br>
            </div>
          </div>
        </div>
        <div class = "col-sm-4" data-aos = "fade-in" data-aos-delay = "300" data-aos-once = "true">
          <div class = "panel panel-danger">
            <div class = "panel-heading"><center><i class = "glyphicon glyphicon-comment" style = "font-size: 55px;"></i></center></div>
            <div class = "panel-body">
              <p>
                <center>
                  Share and promulgate Korean Culture to people in the United States of America. Strive to raise awareness in Korean-related current events.
                </center>
              </p>
            </div>
          </div>
        </div>
      </div>
  <!-- Second row -->
      <div class = "row">
        <div class = "col-sm-4" data-aos = "fade-in" data-aos-delay = "400" data-aos-once = "true">
          <div class = "panel panel-info">
            <div class = "panel-heading"><center><i class = "glyphicon glyphicon-ok" style = "font-size: 55px;"></i></center></div>
            <div class = "panel-body">
              <p>
                <center>Provide proactive academic assistance and support to students at Purdue University.</center>
                <br>
              </p>
            </div>
          </div>
        </div>
        <div class = "col-sm-4" data-aos = "fade-in" data-aos-delay = "500" data-aos-once = "true">
          <div class = "panel panel-warning">
            <div class = "panel-heading"><center><i class = "glyphicon glyphicon-piggy-bank" style = "font-size: 55px;"></i></center></div>
            <div class = "panel-body">
              <p>
                <center>Foster a strong sense of service to the society in students at Purdue University and raise funds to support appropriate charities.</center>
              </p>
            </div>
          </div>
        </div>
        <div class = "col-sm-4" data-aos = "fade-in" data-aos-delay = "600" data-aos-once = "true">
          <div class = "panel panel-default">
            <div class = "panel-heading"><center><i class = "glyphicon glyphicon-globe" style = "font-size: 55px;"></i></center></div>
            <div class = "panel-body">
              <p>
                <center>
                  Create networking channels with intercollegiate cultural organizations.
                </center>
              </p>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
