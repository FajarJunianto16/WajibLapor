<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi pengaduan </title>
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"> -->

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('sbAdmin/vendor/fontawesome-free/css/all.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="asset/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <!-- <link href="Bocor/assets/img/favicon.png" rel="icon">
    <link href="Bocor/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- <link href="Bocor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/aos/aos.css" rel="stylesheet"> -->


    <!-- <link href="Bocor/assets/css/style.css" rel="stylesheet"> -->
</head>
<body>

@include('components.navbar')
@include('components.conten')
@include('components.footer')

@yield('content')
</body>


<script src="Bocor/assets/js/main.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="Bocor/assets/vendor/jquery/jquery.min.js"></script>
  <script src="Bocor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Bocor/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="Bocor/assets/vendor/php-email-form/validate.js"></script>
  <script src="Bocor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Bocor/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="Bocor/assets/vendor/venobox/venobox.min.js"></script>
  <script src="Bocor/assets/vendor/aos/aos.js"></script>

