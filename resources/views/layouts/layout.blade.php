<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{ config('app.name') }} | @yield('titre', ' ')</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="{{ asset('assets/logo/lg.png') }}">
   <!--Bootstarp min css-->
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
   <!--main css-->
   <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
@include("parties.menu")

@yield("content")

@include("parties.footer")
   <!--Jquery 3 7 0 Min Js-->
   <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
   <!--Viewport Jquery Js-->
   <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
   <!--plugin Js-->
   <script src="{{ asset('assets/js/plugin.js') }}"></script>
   <!--main Js-->
   <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
