<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.8/validator.min.js"></script>

    <!-- STYLE -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href = "css/animate.css" rel = "stylesheet">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>

  <body>
      @if (session()->has('msg'))
        <div class = "alert-container">
          <div class = "alert alert-danger alert-dismissible" role = "alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center> {{ session()->get('msg') }} </center>
          </div>
          <?php session()->forget('msg'); ?>
        </div>
      @endif
      @if (session()->has('msg-general'))
        <div class = "alert-container">
          <div class = "alert alert-success alert-dismissible" role = "alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center> {{ session()->get('msg-general') }} </center>
          </div>
          <?php session()->forget('msg-general'); ?>
        </div>
      @endif
      <nav class = "navbar navbar-default navbar-static-top">
        <div class = "container-fluid">
          <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#kusanavbar">
              <span class = "icon-bar"></span>
              <span class = "icon-bar"></span>
              <span class = "icon-bar"></span>
            </button>
            <a class = "navbar-brand" href = "/">
              <img alt = "Brand" src = "images/KUSA_Logo.png">
            </a>
          </div>
          <div class = "collapse navbar-collapse" id = "kusanavbar">
            <ul class = "nav navbar-nav">
              <li><a href = "/">Home</a></li>
              <li class = "dropdown">
                <a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">About<span class = "caret"></span></a>
                <ul class = "dropdown-menu">
                  <li><a href = "kusa">KUSA</a></li>
                  <li><a href = "board">Board</a></li>
                </ul>
              </li>
              <li class = "dropdown">
                <a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Updates<span class = "caret"></span></a>
                <ul class = "dropdown-menu">
                  <li><a href = "news">News</a></li>
                  <li><a href = "d-korea">Events</a></li>
                  <li><a href = "calendar">Calendar</a></li>
                </ul>
              </li>
              <li class = "dropdown">
                <a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Resources<span class = "caret"></span></a>
                <ul class = "dropdown-menu">
                  <li><a href = "#">link</a></li>
                  <li><a href = "#">link2</a></li>
                </ul>
              </li>
            </ul>
            <ul class = "nav navbar-nav navbar-right">
              <li><a href = "https://www.facebook.com/purduekusa" target = "_blank"><i class = "fa fa-facebook"></i></a></li>
              <li><a href = "#"><i class = "fa fa-envelope-o"></i></a></li>
              @if (Auth::check())
              <?php $userinfo = Auth::user();?>
              <li class = "dropdown">
                <a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><?php echo $userinfo->firstname?><span class = "caret"></span></a>
                <ul class = "dropdown-menu">
                  <li><center><img src = "/images/profiles/<?php echo $userinfo->profile_img?>"  style = "margin-top: 15px;" class = "default-profile"></center></li>
                  <hr>
                  <li><a href = "profile">My profile</a></li>
                  @if ($userinfo->user_status == "admin")
                  <li><a href = "dashboard">Dashboard</a></li>
                  @endif
                  <li><a href = "logout">Sign-out</a></li>
                </ul>
              </li>
              @else
              <li><a href = "register"><span class = "glyphicon glyphicon-user"></span> Sign-up </a></li>
              <li><a href = "login"><span class = "glyphicon glyphicon-log-in"></span> Sign-in </a></li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
    @yield('main-content')
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos-init.js"></script>
  </body>
</html>
