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
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;"><i class="fa fa-bell-o" aria-hidden="true"></i> Latest News / Announcements</h4>
        </div>

        <?php $i = 0; $cnt = 0;?>
        <div class = "row" style = "margin-top: 30px;">
          @for ($i = count($posts) - 1; $i >= 0; $i--)
            @if ($posts[$i]->event_category == "Announcement")
              <div class = "col-sm-2 col-md-4 col-lg-4">
                <div class = "thumbnail" style = "padding: 25px 10px 20px 10px;">
                  <div class = "caption">
                    <center><p style = "color: #f4645f;">{{ date('F d, Y', strtotime($posts[$i]->created_at)) }}</p></center>
                    <hr width = "20%" style = "border-color: black; color: black; background-color: black;">
                    <center><h4><i class = "fa fa-newspaper-o"></i> {{ $posts[$i]->content_title }}</h4></center>
                  </div>
                </div>
              </div>
              <?php
                $cnt++;
                if ($cnt >= 3) break;
              ?>
            @endif
          @endfor
        </div>
      </div>

      <!-- END OF NEWS/ANNOUNCEMENTS -->

      <div class = "container event-container" style = "position: relative;">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;"><i class="fa fa-calendar" aria-hidden="true"></i> Events</h4>
        </div>

        <?php $cnt = 0; ?>
        <div class = "row">
          @for ($i = count($posts) - 1; $i >= 0; $i--)
            @if ($posts[$i]->event_category != "Announcement")
              <div class = "col-md-6 event-box">
                <center><img src = "/images/dispimg/{{ $posts[$i]->dispimg }}" class = "img-responsive"></center>
                <div class = "thumbnail">
                  <div class = "caption">
                    <h4 class = "category">{{ date('F d, Y', strtotime($posts[$i]->created_at)) }}</h4>
                    <p class = "category">{{ $posts[$i]->event_category }}</p>
                    <h4 style = "padding-left: 40px; font-family: 'Open Sans', sans-serif; color: white;">{{ $posts[$i]->content_title }}</h4>
                  </div>
                </div>
              </div>
              <?php $cnt++; if ($cnt >= 2) { $cnt = 0; break; } ?>
            @endif
          @endfor
        </div>
        <div class = "row">
          @for ($j = $i - 1; $j >= 0; $j--)
            @if ($posts[$j]->event_category != "Announcement")
              <div class = "col-md-4 event-box">
                <center><img src = "/images/dispimg/{{ $posts[$j]->dispimg }}" class = "img-responsive"></center>
                <div class = "thumbnail">
                  <div class = "caption">
                    <h4 class = "category">{{ date('F d, Y', strtotime($posts[$i]->created_at)) }}</h4>
                    <p class = "category">{{ $posts[$j]->event_category }}</p>
                    <h4 style = "padding-left: 40px; font-family: 'Open Sans', sans-serif; color: white;">{{ $posts[$j]->content_title }}</h4>
                  </div>
                </div>
              </div>
              <?php $cnt++; if ($cnt >= 3) { $cnt = 0; break; } ?>
            @endif
          @endfor
        </div>

      </div>
    </div>
  </div>
  @include('footer')
@stop
