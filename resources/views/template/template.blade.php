<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>5-con-chym</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,700|Source+Sans+Pro:200,300,400,600,700"
          rel="stylesheet">
    <!-- reset css -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
    <!-- Font-awesome -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}"/>

    <!--slide-->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}"/>

    {{--j-query-ui--}}
    <link rel="stylesheet" href="{{ URL::asset('js/jquery-ui.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('js/jquery-ui.theme.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/search.css') }}"/>


    {{--Js--}}
    <script src="{{ URL::asset('js/jquery.js') }}"></script>

    <!-- Jquery UI -->
    <script src="{{ URL::asset('js/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('js/handlebars.js') }}"></script>

    {{--animate--}}
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>

    {{--fullpage--}}
    <link rel="stylesheet" href="css/jquery.fullpage.min.css">
    <script src="js/jquery.fullpage.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/megamenu.css') }}">
    <!-- Main style -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>

    <!--user page-->
    <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}"/>

</head>

<body>

<!--Header-->
@include('includes.header')
@yield('content')

</body>

<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/prefixfree.min.js') }}"></script>
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/TweenMax.min.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{ URL::asset('js/jquery.cookie.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });</script>

</html>
