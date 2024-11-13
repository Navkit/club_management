<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Sports Center Management Program</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/quill/dist/quill.snow.css') }}">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif; /* Common English font */
            direction: ltr; /* Set left-to-right text flow */
            text-align: left; /* Align text to the left */
        }

        .navbar, .sidebar-nav, .footer {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Modern clean font */
        }

        /* Standardizing the direction for content */
        [dir="ltr"] {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Adjust the message fade-out */
        #message {
            display: none;
        }

        .preloader {
            display: none; /* Hidden preloader */
        }

        .topbar {
            background-color: #f8f9fa; /* Light topbar for clarity */
        }

        footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <a class="navbar-brand" href="/">
                        <span class="logo-text">
                            <img src="{{ asset('assets/images/logo-icon.png') }}" width="170px" height="30px" alt="homepage" />
                        </span>
                    </a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav float-right">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('change.language', ['lang' => 'en']) }}">English</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Main Content -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if (Session::has('message'))
                                <p id="message" class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                    {{ Session::get('message') }}
                                </p>
                            @endif
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                All rights reserved for the Marine Information Systems Branch
            </footer>
        </div>
    </div>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script>
        $('#message').fadeOut(3000);
    </script>
    @yield('scripts')
</body>

</html>
