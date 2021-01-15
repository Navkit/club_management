<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>برنامج ادارة المركز الرياضي</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/quill/dist/quill.snow.css') }}">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/> --}}
    @yield('head')
    <style>
        @yield('styles') 
         @font-face {
            font-family: myFirstFont;
            src: url({{asset('Droid_Arabic_Kufi.ttf')}});
        }

        body{
            font-family:myFirstFont;
        }

    </style>
</head>

<body dir="rtl">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!--<img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage"
                                class="light-logo animated bounceInRight" width="30px" height="23px" /> -->

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{ asset('assets/images/logo-icon.png') }}" width="170px" height="30px" alt="homepage"
                                class="light-logo animated bounceInLeft" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">


                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown animated bounceInLeft">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class="rounded-circle"
                                    width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInLeft "
                                aria-labelledby="2">

                                <a class="dropdown-item" href="/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i>
                                    تسجيل خروج</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav animated bounce">
                    <ul id="sidebarnav" class="p-t-30">
                        <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/"
                                aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">الرئيسيه</span></a></li> -->


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-account-card-details"></i><span class="hide-menu">العضويات
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/cards" class="sidebar-link"><i
                                            class="mdi mdi-mdi-account-multiple"></i><span class="hide-menu">جميع
                                            العضويات
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/newcard" class="sidebar-link"><i
                                            class="mdi mdi-account-plus"></i><span class="hide-menu"> اضافه عضوية
                                        </span></a></li>
                            </ul>

                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-swim"></i><span
                                    class="hide-menu">الالعاب </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/games" class="sidebar-link"><i
                                            class="mdi mdi-swim"></i><span class="hide-menu">جميع الالعاب
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/newgame" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu"> اضافه لعبة
                                        </span></a></li>
                            </ul>

                        </li>


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">اللاعبين </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/players" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu">جميع اللاعبين
                                        </span></a></li>
                                {{--                            <li class="sidebar-item"><a href="/newplayer" class="sidebar-link"><i--}}
                                {{--                                        class="mdi mdi-note-plus"></i><span class="hide-menu"> اضافة لاعب--}}
                                {{--                                        </span></a></li>--}}
                            </ul>

                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">المرافقين </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/partners" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu">جميع المرافقين
                                        </span></a></li>
                                {{--                            <li class="sidebar-item"><a href="/newpartner" class="sidebar-link"><i--}}
                                {{--                                        class="mdi mdi-note-plus"></i><span class="hide-menu"> اضافة مرافق--}}
                                {{--                                        </span></a></li>--}}
                            </ul>

                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if (Session::has('message'))
                                <p id="message" class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                    {{ Session::get('message') }}</p>
                            @endif
                            @yield('content')
                        </div>
                    </div>

                </div>

            </div>
            <footer class="footer text-center">
                جميع الحقوق محفوظه لفرع نظم المعلومات البحري
            </footer>

            <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
            <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
            <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
            <!--Wave Effects -->
            <script src="{{ asset('dist/js/waves.js') }}"></script>
            <!--Menu sidebar -->
            <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
            <!--Custom JavaScript -->
            <script src="{{ asset('dist/js/custom.min.js') }}"></script>
            <script>
                $('#message').fadeOut(3000)

            </script>
            <!-- This Page JS -->
            @yield('scripts')

</body>

</html>
