<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DJoz | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('public/front-end/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/front-end/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/front-end/css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/front-end/css/nowfont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/front-end/css/rockville.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/front-end/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/front-end/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/front-end/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/front-end/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ url('public/front-end/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('discography') }}">Discography</a></li>
                                <li><a href="{{ url('tour') }}">Tours</a></li>
                                <li><a href="#">Profile</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('login') }}">Login</a></li>
                                        <li><a href="{{ url('register') }}">Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
