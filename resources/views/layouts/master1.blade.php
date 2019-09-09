
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TJMIS</title>
  <meta name="csrf-token" content="{{csrf_token()}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel ="stylesheet" href="{{asset('css/toastr.min.css')}}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TJ</b>MIS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TJ</b>MIS</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
     
      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/img/user.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
           
          <!-- Status -->
         
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="active"><a href="{{route('home')}}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
       
       

     <!--@@@@@@@@@@@@@@@@@@@@@-->


         <li>
           <a class="nav-link" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-link"></i>
                        {{ __('Logout') }}
                  </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
         </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       
       
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Where Teachers Meet
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Teacher Junction</a>.</strong> All rights reserved.
  </footer>

  
 
  <div class="control-sidebar-bg"></div>
</div>
<script src="/js/app.js"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>

<script>

@if (Session::has('success'))

      toastr.success("{{Session::get('success')}}")
      
@endif


@if (Session::has('warning'))

      toastr.warning("{{Session::get('warning')}}")
      
@endif

@if (Session::has('info'))

      toastr.info("{{Session::get('info')}}")
      
@endif


</script>
</body>
</html>