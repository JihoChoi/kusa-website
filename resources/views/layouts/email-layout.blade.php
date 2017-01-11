<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!--#70bbd9-->

  <style>
  .email-header {
    background-color: #70bbd9;
    padding: 30px 0 30px 0;
  }
  .email-header img {
    display: block;
    margin: 0 auto;
  }
  .email-content {
    font-family: 'Open Sans', sans-serif;
    padding: 30px 0 30px 0;
  }
  .email-footer {
    background-color: #525252;
    display: block;
  }
  </style>

  <div class = "container" width = "600">
    <div class = "email-header">
      <img src = "{{asset('images/KUSA_Logo.png')}}" class = "img-responsive" width = "400">
    </div>
    <div class = "email-content">
      @yield('content')
    </div>
    <div class = "email-footer">
      @include('email.email-footer')
    </div>
  </div>
</body>
</html>
