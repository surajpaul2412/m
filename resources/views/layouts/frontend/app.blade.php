<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    @include('layouts.partials.style')
    @yield('css')
    @livewireStyles
</head> 
<body class="template-index"> 

    <!--Page Wrapper-->
    <div class="page-wrapper">
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')
        @include('layouts.partials.drawer')
        @include('layouts.partials.script')
        @yield('script')
        @livewireScripts 
    </div>
    <!--End Page Wrapper-->
</body>
</html>
