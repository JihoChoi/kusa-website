@extends('layouts.index-layout')
@section('title')
<title>Welcome to Purdue KUSA</title>
@stop
@section('main-content')
<div class = "container-fluid background-A3CFEA">
    <br>
    <div class = "browser">
      <div class = "container main-title">
        PURDUE KOREAN UNDERGRADUATE STUDENT ASSOCIATION<br>
      </div>
    </div>
    <br><br>
    <div class = "container" style = "background-color: #f9f9f9; width: 100vw; margin-left: -50vw; left: 50%;">
      <div class = "container" style = "position: relative;">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;"><i class="fa fa-bell-o" aria-hidden="true"></i> Latest News / Announcements</h4>
          <a href = "{{ action('PostsController@directAnnouncements') }}" class = "pull-right" style = "text-decoration: none; margin-top: -10px; color: #f4645f;">View More</a>
        </div>

        <?php $i = 0; $cnt = 0;?>
        <div class = "row" style = "margin-top: 30px;">
          @for ($i = count($posts) - 1; $i >= 0; $i--)
            @if ($posts[$i]->event_category == "Announcement")
              <div class = "col-sm-2 col-md-4 col-lg-4">
                <a href = "view/{{ $posts[$i]->id }}"><img src = "/images/dispimg/{{ $posts[$i]->dispimg }}" class = "img-responsive"></a>
                <div class = "thumbnail" style = "padding: 25px 10px 20px 10px;">
                  <div class = "caption">
                    <center><p style = "color: #f4645f;">{{ date('F d, Y', strtotime($posts[$i]->created_at)) }}</p></center>
                    <hr width = "20%">
                    <center><a href = "view/{{ $posts[$i]->id }}"><h4><i class = "fa fa-newspaper-o"></i> {{ $posts[$i]->content_title }}</h4></a></center>
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

      <div class = "container">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;"><i aria-hidden="true"></i> Short Intro</h4>
        </div>
        <div class = "video-container">
          <center>
            <video preload = "preload" controls = "controls" allowfullscreen>
              <source src = "videos/kusa_video.mp4" type = "video/mp4;"/>
            </video>
          </center>
        </div>
        <br>
        <center><a class = "btn btn-primary btn-lg">Learn More <i class = "fa fa-arrow-right"></i></a></center>
      </div>

      <div class = "container event-container" style = "position: relative;">
        <div class = "page-header">
          <h4 style = "color: #f4645f; font-family: 'Ubuntu', sans-serif; letter-spacing: .2em;"><i class="fa fa-calendar" aria-hidden="true"></i>Recent Events</h4>
          <a href = "{{ action('PostsController@directEvents') }}" class = "pull-right" style = "text-decoration: none; margin-top: -10px; color: #f4645f;">View More</a>
        </div>

        <?php $cnt = 0; ?>
        <div class = "row">
          @for ($i = count($posts) - 1; $i >= 0; $i--)
            @if ($posts[$i]->event_category != "Announcement")
              <div class = "col-md-6 event-box">
                <center><a href = "view/{{ $posts[$i]->id }}"><img src = "/images/dispimg/{{ $posts[$i]->dispimg }}" class = "img-responsive"></a></center>
                <div class = "thumbnail">
                  <div class = "caption">
                    <h4 class = "category">{{ date('F d, Y', strtotime($posts[$i]->created_at)) }}</h4>
                    <p class = "category">{{ $posts[$i]->event_category }}</p>
                    <a href = "view/{{ $posts[$i]->id }}"><h4 style = "padding-left: 40px; font-family: 'Open Sans', sans-serif; color: white;">{{ $posts[$i]->content_title }}</h4></a>
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
                <center><a href = "view/{{ $posts[$j]->id }}"><img src = "/images/dispimg/{{ $posts[$j]->dispimg }}" class = "img-responsive"></a></center>
                <div class = "thumbnail">
                  <div class = "caption">
                    <h4 class = "category">{{ date('F d, Y', strtotime($posts[$i]->created_at)) }}</h4>
                    <p class = "category">{{ $posts[$j]->event_category }}</p>
                    <a href = "view/{{ $posts[$j]->id }}"><h4 style = "padding-left: 40px; font-family: 'Open Sans', sans-serif; color: white;">{{ $posts[$j]->content_title }}</h4></a>
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
