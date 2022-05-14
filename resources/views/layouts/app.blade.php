<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ url('/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="app/css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <style>
        .padded-50{
            padding: 40px;
        }
        .text-center{
            text-align: center;
        }
    </style>


</head>
<body>

    @include('layouts.navbar')

    @yield('content')


    <!-- JS Script -->
    <script src="{{ url('/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ url('/js/crum-mega-menu.js') }}"></script>
    <script src="{{ url('/js/swiper.jquery.min.js') }}"></script>
    <script src="{{ url('/js/theme-plugins.js') }}"></script>
    <script src="{{ url('/js/main.js') }}"></script>
    <script src="{{ url('/js/form-actions.js') }}"></script>
    <script src="{{ url('/js/velocity.min.js') }}"></script>
    <script src="{{ url('/js/ScrollMagic.min.js') }}"></script>
    <script src="{{ url('/js/animation.velocity.min.js') }}"></script>
    <!-- ...end JS Script -->
    
</body>
</html>