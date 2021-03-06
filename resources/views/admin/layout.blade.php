<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{url('admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('admin_theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{url('admin_theme/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{url('admin_theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{url('admin_theme/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('admin_theme/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('admin_theme/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{url('frontend/assets/img/apple-touch-icon.png')}}"alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="/add-home"> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{ route('about-page-add') }}" > About <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{ route('courses-page-add') }}" > Courses <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{ route('trainers-page-add') }}"> Trainers <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{ route('events-page-add') }}"> Events <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{ route('pricing-page-add') }}"> Pricing <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{ route('contact-page-add') }}"> Contact <span class="fa fa-chevron-down"></span></a>
                  </li>
                  
                  <li><a href="{{ route('post-show') }}"> Posts <span class="fa fa-chevron-down"></span></a>
                  </li>
                  
                  <li><a href="{{ route('admin.contact.show') }}"> Users <span class="fa fa-chevron-down"></span></a>
                  </li>
                  
                </ul>

              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

    
    </div>

    <!-- jQuery -->
    <script src="{{url('admin_theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('admin_theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    
    <!-- Custom Theme Scripts -->
    <script src="{{url('admin_theme/build/js/custom.min.js')}}"></script>
    <script src="{{ url('admin_theme/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('admin_theme/vendors/ckeditor/js/sample.js') }}"></script>
    @stack('footer-script')
	
  </body>
</html>
