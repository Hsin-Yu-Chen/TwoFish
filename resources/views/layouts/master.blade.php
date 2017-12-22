<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
@include('layouts.partials.navigation')

@yield('content')

<!-- Footer -->
@include('layouts.partials.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('jquery/jquery.min.js')}}vendor/"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
