<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.8/validator.min.js"></script>

  <!-- STYLE -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dashboard-style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css')}}" type="text/css">

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- JAVASCRIPT -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('js/tinymce/jquery.tinymce.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
  @include('tinymce.tinymceinit')

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
  <div id="wrapper">

       <!-- Sidebar -->
       <div id="sidebar-wrapper">
           <ul class="sidebar-nav">
               <li class="sidebar-brand">
                   <a href="#">
                       Dashboard
                   </a>
               </li>
               <li>
                   <a href="{{ action('AdminController@directDashboard') }}"><i class = "fa fa-tachometer"></i> Dashboard</a>
               </li>
               <li>
                   <a href = "{{ action('MembersController@directIndex') }}"><i class = "fa fa-home"></i> Back to Homepage</a>
               </li>
               <hr>
               <li>
                   <a href="{{ action('AdminController@directPost') }}"><i class = "fa fa-pencil-square-o"></i> Create Content</a>
                   <a href=""><i class = "fa fa-pencil"></i> Manage Contents </a>
               </li>
               <hr>
               <li>
                   <a href="#"><i class = "fa fa-envelope-o"></i> Messages</a>
               </li>
               <li>
                   <a href="#"><i class = "fa fa-bell"></i> Push Notification</a>
               </li>
               <li>
                   <a href = "{{ action('MembersController@filterUsers') }}"><i class = "fa fa-users"></i> Users</a>
               </li>
               <hr>
               <li>
                  <a href = "{{ action('AdminController@directEventCategoryManage') }}"><i class = "fa fa-gear"></i> Manage Categories</a>
               </li>
               <li>
                 <a href = "{{ action('AdminController@directTeamManage') }}"><i class = "fa fa-gear"></i> Manage KUSA Teams</a>
               </li>
               <li>
                 <a href = "{{ action('AdminController@directRoleManage') }}"><i class = "fa fa-gear"></i> Manage KUSA Roles</a>
               </li>
               <hr>
               <li>
                   <a href="{{ action('MembersController@doLogout') }}"><i class = "fa fa-sign-out"></i>Logout</a>
               </li>
           </ul>
       </div>
       <!-- /#sidebar-wrapper -->



   </div>
   <!-- Page Content -->
   <div id="page-content-wrapper">
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-12">
                  @yield('content')
               </div>
           </div>
       </div>
   </div>
   <!-- /#page-content-wrapper -->


</body>
</html>
