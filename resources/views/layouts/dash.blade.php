<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{ config('app.name', 'Warehouse Admin & Dashboard') }}</title>
    <meta content="Warehouse Admin & Dashboard " name="description" />
    <meta content="Ksard & NanoItGroup" name="author" />
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <link href="{{asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="   text/css">
    <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    @livewireStyles
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <x-topmenu></x-topmenu>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <x-sidebar></x-sidebar>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

             @yield('content')
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <x-footer></x-footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>

</body>

</html>
