<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>ASET | @yield('title','Dashboard')</title>
    <!-- GLOBAL MAINLY STYLES-->


    <link href="{{asset('assets/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon">
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/toastr/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('assets/css/sweetalert.css')}}">
    <!-- PLUGINS STYLES-->
    @yield('plugins_styles')
    <!-- THEME STYLES-->
    <link href="{{asset('assets/css/main.min.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    @yield('page_styles')
</head>

<body class="fixed-layout">
    <div class="page-wrapper">
        {{-- START HEADER --}}
        @include('includes.header')
        {{-- END HEADER --}}
        {{-- START SIDEBAR --}}
        @include('includes.sidebar')
        {{-- END SIDEBAR --}}
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            @yield('content')
            <!-- END PAGE CONTENT-->
            @include('includes.footer')
        </div>
    </div>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->

    <!-- CORE PLUGINS-->

    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/angular.min.js')}}"></script>
    <script src="{{asset('assets/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/metisMenu/dist/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-idletimer/dist/idle-timer.min.js')}}"></script>
    <script src="{{asset('assets/vendors/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert.js')}}"></script>
    @include('sweetalert::alert')
    <!-- PAGE LEVEL PLUGINS-->
    @yield('plugins_scripts')
    <!-- CORE SCRIPTS-->
    <script src="{{asset('assets/js/app.min.js')}}"></script>

    <!-- PAGE LEVEL SCRIPTS-->
    @yield('page_scripts')
</body>

</html>
