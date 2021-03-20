<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Favicon -->
    @section('styles')
        <link rel="icon" href="" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        {{-- <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css"> --}}
        <link rel="stylesheet" href="{{asset('assets/css/argon.css')}}" type="text/css">
        </head>
    @endsection
    @yield('styles')
{{-- @can('admin-rights') --}}
    <body>
        {{-- @inertia --}}

        <div>
            <app></app>
            <!-- Sidenav -->
                @include('admin.layouts.partials.sidenav')
            <!-- Main content -->
            <div class="main-content" id="panel">
                <!-- Topnav -->
                @include('admin.layouts.partials.nav')
                @include('admin.layouts.partials.breadcrumb')

                <!-- Page content -->
                @yield('content')
            </div>

        </div>
    <!-- Argon Scripts -->
            <!-- Core -->
            <script src="{{asset('js/app.js')}}"></script>
            <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
            <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
            <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
            <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
            <script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
            <!-- Optional JS -->
            <script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
            <script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
            <!-- Argon JS -->
            <script src="{{asset('assets/js/argon.min.js')}}"></script>
            <script src="{{asset('assets/js/dashboard.js')}}"></script>
            
 

    </body>

{{-- @endcan --}}

</html>


