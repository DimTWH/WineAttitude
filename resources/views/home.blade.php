<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wine Attitude</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/appP.css') }}">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <!-- Icones -->
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />

</head>
<body>
<div class="wrapper">
    <header>
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo-d">
                <img src="{{ asset('images/logo-transparent.png') }}" alt="">
            </div>
            <ul class="menu">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="#">Nos Vins</a></li>
                <li><a href="#">Qui sommes nous?</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="burger">
                <div class="line1">ffffaaaaa</div>
                <div class="line2">faaa</div>
                <div class="line3">faaaa</div>
            </div>
        </nav>
    </header>
    <main>
        <img class="h-banner" src="{{ asset('images/h-home-banner.jpg') }}" alt="banner-1">
        <div class="intro">
            <h2>Wine Attitude</h2>
            <br><br>
            <p></p>
        </div>
    </main>
</div>

<!-- Javascript -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="{{ asset('js/appP.js') }}"></script>

</body>
</html>
