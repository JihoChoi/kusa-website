<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Purdue KUSA</title>

    <!-- STYLE -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href = "css/animate.css" rel = "stylesheet">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
      <nav class = "navbar navbar-default navbar-fixed-top">
        <div class = "container-fluid">
          <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#kusanavbar">
              <span class = "icon-bar"></span>
              <span class = "icon-bar"></span>
              <span class = "icon-bar"></span>
            </button>
            <a class = "navbar-brand" href = "#">
              <img alt = "Brand" src = "images/KUSA_Logo.png">
            </a>
          </div>
          <div class = "collapse navbar-collapse" id = "kusanavbar">
            <ul class = "nav navbar-nav">
              @yield('nav-content')
            </ul>
            <ul class = "nav navbar-nav navbar-right">
              <li><a href = "https://www.facebook.com/purduekusa" target = "_blank"><i class = "fa fa-facebook"></i></a></li>
              <li><a href = "#"><i class = "fa fa-envelope-o"></i></a></li>
              <li><a href = "#"><span class = "glyphicon glyphicon-user"></span> Sign Up </a></li>
              <li><a href = "#"><span class = "glyphicon glyphicon-log-in"></span> Login </a></li>
            </ul>
          </div>
        </div>
      </nav>
    @yield('main-content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos-init.js"></script>
  </body>
</html>
