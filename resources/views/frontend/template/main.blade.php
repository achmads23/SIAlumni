<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIAlumni | @yield('title') </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('css/FontOpenSans.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('css/FontMerriweather.css') }}" rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/creative.css') }}" type="text/css">

    @yield('cssjsheader')
</head>

<body id="page-top">

    @include('frontend.template.header')

    @yield('toppage')

    @yield('content')

    @include('frontend.template.footer')

    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.fittext.js')}}"></script>
    <script src="{{ URL::asset('js/wow.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('js/creative.js')}}"></script>

    @yield('jsfooter')
</body>

</html>
