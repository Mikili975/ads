<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>
        @yield ('title')
    </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/ads.css" rel="stylesheet">
</head>

<body>

@if(session('message'))

    <div class="alert-success" role="alert">

        {{session('message')}}

    </div>

@endif

@include('layouts.partials.navbar')

<div class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">


            @yield ('content')


        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">

        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->


</body>
</html>