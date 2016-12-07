
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
