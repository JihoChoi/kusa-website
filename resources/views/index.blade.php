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
        <video id = "intro" controls = "controls" width="560" height="315" allowfullscreen>
          <source src = "{{ asset('videos/kusa_video.mp4') }}"/>
          <source src = "{{ asset('videos/kusa_video.webm') }}" type = "video/webm"/>
          <source src = "{{ asset('videos/kusa_video.ogv') }}" type = "video/ogv"/>
          <source src = "{{ asset('videos/kusa_video.m4v') }}" type = "video/mp4"/>
          Your browser does not support this video.
        </video>
      </div>
    </div>

    <div class = "container" style = "background-color: white; width: 100vw; margin-left: -50vw; left: 50%;">
      <div class = "container" style = "position: relative;">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;">Latest News / Announcements</h4>
        </div>

        <div class = "row" style = "margin-top: 30px;">
          <div class = "col-sm-2 col-md-4 col-lg-4">
            <div class = "thumbnail">
              <!--<img src = "/images/events/post.jpg" class = "img-responsive" width = "550px">-->
              <div class = "caption" >
                <h4>PEPERO DAY</h4>
                <p>
                  아직도 꿈 속의 낭군님을 쳐다보고만 계신가요? 뭐라구요? 공대 여신님께 사귀자는 말을 못하겠다구요?걱정마세요!
                  그래서 퍼듀 쿠사가 준비했습니다! ...
              </p>
              </div>
            </div>
          </div>
          <div class = "col-sm-2 col-md-4 col-lg-4">
            <div class = "thumbnail">
              <!--<img src = "/images/events/kusa_all.jpg" class = "img-responsive" width = "550px">-->
              <div class = "caption">
                <h4>D-Korea</h4>
                <p>
                  아직도 꿈 속의 낭군님을 쳐다보고만 계신가요? 뭐라구요? 공대 여신님께 사귀자는 말을 못하겠다구요?걱정마세요!
                  그래서 퍼듀 쿠사가 준비했습니다! ...
                </p>
              </div>
            </div>
          </div>
          <div class = "col-sm-2 col-md-4 col-lg-4">
            <div class = "thumbnail">
              <!--<img src = "/images/events/kusa_all.jpg" class = "img-responsive" width = "550px">-->
              <div class = "caption">
                <h4>Volunteer</h4>
                <p>
                  아직도 꿈 속의 낭군님을 쳐다보고만 계신가요? 뭐라구요? 공대 여신님께 사귀자는 말을 못하겠다구요?걱정마세요!
                  그래서 퍼듀 쿠사가 준비했습니다! ...
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- END OF NEWS/ANNOUNCEMENTS -->


      <div class = "container event-container" style = "position: relative;">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;">Events</h4>
        </div>
        <div class = "row">
          <div class = "col-md-7 event-box">
            <center><img src = "/images/111.jpg" class = "img-responsive"></center>
            <div class = "thumbnail">
              <div class = "caption">
                <p class = "category">News</p>
                <h3>KUSA: Tasty Road</h3>
              </div>
            </div>
          </div>
          <div class = "col-md-5 event-box">
            <img src = "/images/events/post.jpg" class = "img-responsive">
            <div class = "thumbnail">
              <div class = "caption">
                <p class = "category">Announcement</p>
                <h3>Peppero Day</h3>
              </div>
            </div>
          </div>
        </div>
        <div class = "row">
          <div class = "col-md-4 event-box">
            <img src = "/images/events/about.jpg" class = "img-responsive">
            <div class = "thumbnail">
              <div class = "caption">
                <p class = "category">D-Korea</p>
                <h3>D-Korea</h3>
              </div>
            </div>
          </div>
          <div class = "col-md-4 event-box">
            <img src = "/images/111.jpg" class = "img-responsive">
            <div class = "thumbnail">
              <div class = "caption">
                <p class = "category">D-Korea</p>
                <h3>D-Korea: Playground-the season 3</h3>
              </div>
            </div>
          </div>
          <div class = "col-md-4 event-box">
            <img src = "/images/events/post.jpg" class = "img-responsive">
            <div class = "thumbnail">
              <div class = "caption">
                <p class = "category">D-Korea</p>
                <h3>D-Korea</h3>
                <h3>D-Korea</h3>
                <h3>D-Korea</h3>
                <h3>D-Korea</h3>
                <h3>D-Korea</h3>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  @include('footer')
@stop
