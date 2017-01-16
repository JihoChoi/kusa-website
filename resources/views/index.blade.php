@extends('layouts.index-layout')
@section('title')
<title>Welcome to Purdue KUSA</title>
@stop
@section('main-content')
<div class = "container-fluid background-A3CFEA">
    <div class = "container main-title">
      PURDUE KOREAN UNDERGRADUATE STUDENT ASSOCIATION
    </div><br><br>
    <div class = "container sub-video">
      <div class = "outer">
        <video preload = "preload" controls = "controls" allowfullscreen>
          <source src = "videos/kusa_video.mp4" type = 'video/mp4;'/>
          <source src = "videos/kusa_video.webm" type = 'video/webm;'/>
          <source src = "videos/kusa_video.ogv" type = 'video/ogv;'/>
          <source src = "videos/kusa_video.m4v" type = 'video/mp4;'/>
          Your browser does not support this video.
        </video>
      </div>
    </div>
    <div class = "container" style = "background-color: #fafafa; width: 100vw; margin-left: -50vw; left: 50%;">
      <div class = "container" style = "position: relative;">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;"><i class="fa fa-bell" aria-hidden="true"></i> Latest News / Announcements</h4>
        </div>

        <?php $i = 0; ?>
        <div class = "row" style = "margin-top: 30px;">
          @foreach ($posts as $post)
            @if ($post->event_category == "Announcement")
              <div class = "col-sm-2 col-md-4 col-lg-4">
                <div class = "thumbnail">
                  <div class = "caption" >
                    <center><h4>{{ $post->content_title }}</h4></center>
                    <hr class = "style5">
                    <?php echo substr($post->content, 0, strlen($post->content) / 2); ?> ...
                  </div>
                </div>
              </div>
              <?php
                $i++;
                if ($i >= 3) break;
              ?>
            @endif
          @endforeach
        </div>
      </div>

      <!-- END OF NEWS/ANNOUNCEMENTS -->

      <!--<div class = "container" style = "background-color: #f79591; width: 100vw; margin-left: -50vw; left: 50%;">
        <div class = "container">
          <div class = "page-header">
            <h4 style = "color: white; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;">KUSA Radio</h4>
          </div>
          <div class = "row">
            <div class = "col-md-4">
              <img src = "images/kusa_radio.jpg" class = "img-responsive">
            </div>
            <div class = "col-md-8" style = "margin-bottom: 15px;">
              <p style = "color: white; font-size: 15px;">
                Purdue KUSA가 운영하고 있는 라디오, "퍼듀의 아는 사람 이야기" 에 오신 것을 환영합니다! 두 DJ의 각기 다른 코너와 색 있는 라디오를 진행합니다~ 사연을 나누고 공감할 수 있는 자리! 많은 관심 부탁드립니다.
              </p>
            </div>
          </div>
        </div>
      </div>-->
      <!-- END OF EXP -->
      <div class = "container event-container" style = "position: relative;">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;"><i class="fa fa-calendar" aria-hidden="true"></i> Events</h4>
        </div>
        <?php $i = 0; ?>
        <div class = "row">
          @foreach ($posts as $post)
            @if ($post->event_category != "Announcement")
              <div class = "col-md-6 event-box">
                <center><img src = "/images/dispimg/{{ $post->dispimg }}" class = "img-responsive"></center>
                <div class = "thumbnail">
                  <div class = "caption">
                    <p class = "category">{{ $post->event_category }}</p>
                    <h3>{{ $post->content_title }}</h3>
                  </div>
                </div>
              </div>
              <?php
                $i++;
                if ($i >= 2) break;
              ?>
            @endif
          @endforeach
        </div>
        <div class = "row">
          
            <div class = "col-md-4 event-box">
              <img src = "/images/kusa_radio.jpg" class = "img-responsive">
              <div class = "thumbnail">
                <div class = "caption">
                  <p class = "category">D-Korea</p>
                  <h3>D-Korea</h3>
                </div>
              </div>
            </div>
        </div>
      </div>
      <!--<div class = "container" style = "background-color: white; width: 100vw; margin-left: -50vw; left: 50%;">
        <div class = "container" style = "margin-top: 20px;">
          <div class = "row">
            <div class = "col-md-4">
            </div>
            <div class = "col-md-4">
              <img src = "images/kusa_radio.jpg" class = "img-responsive">
              <div class = "thumbnail">
                <div class = "caption">
                  <center><h4><i class = "fa fa-headphones"></i> KUSA Radio</h4></center>
                  <hr class = "style5">
                  <p style = "letter-spacing: .2em;">Purdue KUSA가 운영하고 있는 라디오, "퍼듀의 아는 사람 이야기" 에 오신 것을 환영합니다! 두 DJ의 각기 다른 코너와 색 있는 라디오를 진행합니다~ 사연을 나누고 공감할 수 있는 자리! 많은 관심 부탁드립니다.</p>
                </div>
              </div>
            </div>
            <div class = "col-md-4">
            </div>
          </div>
        </div>
      </div>-->
    </div>
  </div>
  @include('footer')
@stop
