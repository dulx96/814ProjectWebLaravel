<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>5-con-chym</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,700|Source+Sans+Pro:200,300,400,600,700"
          rel="stylesheet">
    <!-- reset css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font-awesome -->

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--slide-->
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/glide.theme.css">

    <!-- Main style -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<!--Header-->

@include('includes.header')

@if(Request::is('/'))
    <!--introduce title-->
    @include('includes.introduce')
    <!--news slide-->
    @include('includes.slide')
@endif

@yield('content')

</body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/prefixfree.min.js"></script>
<script src="js/glide.min.js"></script>
<script src="js/main.js"></script>
</html>