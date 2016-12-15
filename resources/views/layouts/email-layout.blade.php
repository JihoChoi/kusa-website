<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<style>
body {
  background-color: white;
}

#header {
  width: 100%;
  padding-top: 10px;
  text-align: center;
}
#headerImage {
  width: 250px;
  height: 100px;
}

.message {
  margin-top: 15px;
  background-color: white;
  padding: 20px;
  width: 500px;
  margin-left: auto;
  margin-right: auto;
}

a {
  color: #0043bb;
  text-decoration: none;
}

a:hover {
  color: #4485ff;
}

#footer {
  padding: 5px;
  width: 500px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}
</style>
<div id = "header">
  <img src = "{{ Request::root() }}/images/KUSA_Logo.png" id = "headerImage">
</div>
<div class = "message">
  @yield('content')
</div>
</body>
</html>
