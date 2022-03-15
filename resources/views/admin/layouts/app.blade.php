<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <link rel="stylesheet" href="assets/css/pace.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600|Roboto:400" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/vendors/material-icons/material-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/vendors/mono-social-icons/monosocialiconsfont.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/vendors/feather-icons/feather.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    @yield('css')
</head>

<body class="header-dark sidebar-light sidebar-expand">
<div id="wrapper" class="wrapper">
    <!-- HEADER & TOP NAVIGATION -->
    <nav class="navbar">
        <!-- Logo Area -->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img class="logo-expand" alt="" src="{{ asset('admin/assets/demo/logo-expand.png') }}">
                <img class="logo-collapse" alt="" src="{{ asset('admin/assets/demo/logo-collapse.png') }}">
                <!-- <p>BonVue</p> -->
            </a>
        </div>
        <!-- /.navbar-header -->
        <!-- Left Menu & Sidebar Toggle -->
        <ul class="nav navbar-nav">
            <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="feather feather-menu list-icon fs-20"></i></a>
            </li>
        </ul>
        <!-- /.navbar-left -->
        <div class="spacer"></div>
        <!-- Button: Create New -->
        <div class="btn-list dropdown d-none d-md-flex mr-4 mr-0-rtl ml-4-rtl"><a href="javascript:void(0);" class="btn btn-primary dropdown-toggle ripple" data-toggle="dropdown"><i class="feather feather-plus list-icon"></i> Create New</a>
            <div class="dropdown-menu dropdown-left animated flipInY"><span class="dropdown-header">Create new ...</span>  <a class="dropdown-item" href="#">Projects</a>  <a class="dropdown-item" href="#">User Profile</a>  <a class="dropdown-item" href="#"><span class="d-flex align-items-end"><span class="flex-1">To-do Item</span> <span class="badge badge-pill bg-primary-contrast">7</span> </span></a>
                <a
                    class="dropdown-item" href="#"><span class="d-flex align-items-end"><span class="flex-1">Mail</span>  <span class="badge badge-pill bg-color-scheme-contrast">23</span></span>
                </a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><span class="d-flex align-items-center"><span class="flex-1">Settings</span> <i class="feather feather-settings list-icon icon-muted"></i></span></a>
            </div>
        </div>
        <!-- /.btn-list -->
        <!-- User Image with Dropdown -->
        <ul class="nav navbar-nav">
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-xs2"><img src="{{ asset('admin/assets/demo/users/user1.jpg') }}" class="rounded-circle" alt=""> <i class="feather feather-chevron-down list-icon"></i></span></a>
                <div
                    class="dropdown-menu dropdown-left dropdown-card dropdown-card-profile animated flipInY">
                    <div class="card">
                        <header class="card-header d-flex mb-0">
                            <a href="javascript:void(0);" class="col-md-6 text-center">
                                <i class="feather feather-settings align-middle"></i>
                            </a>
                            <a
                                href="javascript:void(0);" class="col-md-6 text-center"><i class="feather feather-power align-middle"></i>
                            </a>
                        </header>
                        <ul class="list-unstyled card-body">
                            <li><a href="#"><span><span class="align-middle">Hesap Ayarları</span></span></a>
                            </li>
                            <li><a href="#"><span><span class="align-middle">Çıkış Yap</span></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        <!-- /.navbar-right -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- User Details -->
            <div class="side-user">
                <div class="col-sm-12 text-center p-0 clearfix">
                    <div class="d-inline-block pos-relative mr-b-10">
                        <figure class="thumb-sm mr-b-0 user--online">
                            <img src="{{ asset('admin/assets/demo/users/user1.jpg') }}" class="rounded-circle" alt="">
                        </figure><a href="page-profile.html" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
                    </div>
                    <!-- /.d-inline-block -->
                    <div class="lh-14 mr-t-5"><a href="page-profile.html" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Scott Adams</a>
                        <br><small class="hide-menu">Developer</small>
                    </div>
                </div>
                <!-- /.col-sm-12 -->
            </div>
            <!-- /.side-user -->
            <!-- Sidebar Menu -->
            @include('admin.layouts.sidebar')
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
          @yield('content')
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrappper -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer"><span class="heading-font-family">Copyright @ 2017. All rights reserved BonVue Admin by Unifato</span>
    </footer>
</div>
<!--/ #wrapper -->
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.2/countUp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mithril/1.1.1/mithril.js"></script>
<script src="{{ asset('assets/vendors/theme-widgets/widgets.js') }}"></script>
<script src="{{ asset('admin/assets/js/theme.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
@yield('js')
</body>

</html>
