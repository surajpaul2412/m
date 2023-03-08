<!doctype html>
<html lang="en"> 
<head> 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="author" content="Abhisan Technology" />
    @yield('title')
    @include('layouts.backend.partials.style')
    @yield('css')
</head>

<body data-sidebar="dark" data-layout-mode="light">
    <div id="layout-wrapper">
        @include('layouts.backend.partials.header')
        @include('layouts.backend.partials.sidenav')  
         
        <div class="main-content">
            @yield('content')
            @include('layouts.backend.partials.footer')
        </div>  
    </div> 

    @include('layouts.backend.partials.script')
    <!-- apexcharts -->
    <script src="{{asset('backend/admin/libs/apexcharts/apexcharts.min.js')}}"></script> 
    <!-- dashboard init -->
    <script src="{{asset('backend/admin/js/pages/dashboard.init.js')}}"></script>
    @yield('script')
</body> 
</html>