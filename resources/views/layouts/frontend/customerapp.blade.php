<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@bhis1">

    <title>My Account | {{env('APP_NAME')}}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    @yield('title')
    @include('layouts.partials.style')
    @yield('css')
    @livewireStyles
</head> 
<body>
    
    <!-- [ Page Wrapper ] start -->
    <div class="page-wrapper">
        @include('layouts.partials.header')
        @yield('content')
    </div>

    @include('layouts.partials.footer')
    @include('layouts.partials.drawer')
    @include('layouts.partials.script')
    @yield('script')
    @livewireScripts 
</body>
</html>