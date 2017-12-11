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
    
    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- reset css -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Font-awesome -->

    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!--slide-->
    <link rel="stylesheet" href="/css/glide.core.min.css">
    <link rel="stylesheet" href="/css/glide.theme.css">

    {{--j-query-ui--}}

    <link rel="stylesheet" href="/js/jquery-ui.min.css"></link>
    <link rel="stylesheet" href="/js/jquery-ui.theme.min.css"></link>

    <!-- Main style -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/search.css">

    {{--Js--}}
    <script src="/js/jquery.js"></script>

    <!-- Jquery UI -->
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/handlebars.js"></script>

    <!-- Megamenu -->
    <link rel="stylesheet" href="/css/megamenu.css">
    <script src="/js/modernizr-2.8.3.min.js"></script>
    <script src="/js/megamenu.js"></script>

    <!--user page-->
    <link rel="stylesheet" href="/css/user.css">
    <link rel="stylesheet" href="/css/signup.css">

</head>

<body>
<!--Header-->
@include('includes.header')
@yield('content')

</body>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/prefixfree.min.js"></script>
<script src="/js/glide.min.js"></script>
<script src="/js/TweenMax.min.js"></script>
<script src="/js/main.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });</script>

</html>