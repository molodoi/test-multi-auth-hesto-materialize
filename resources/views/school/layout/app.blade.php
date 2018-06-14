<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Styles -->
    <link href="{{ asset('school/css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">        
        @include('school.layout.main-navbar')   
        <br />
        @yield('content')
    </div>    
    <!-- Scripts -->    
    <script src="{{ asset('rentschooler/js/app.js') }}"></script>
    @yield('javascript')   
</body>
</html>

