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
                        <a href="./index.html"><img src="{{ url('front-end/img/logo.png') }}" alt=""></a>
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
                                <li><a href="./videos.html">Videos</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('login') }}">Login</a></li>
                                        <li><a href="{{ url('register') }}">Register</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <div>
        @yield('content')
    </div>

    <!-- Footer Section Begin -->
    <footer class="footer spad set-bg" data-setbg="{{ url('front-end/img/footer-bg.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>DJ.Music@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>DJoz</h2>
                        <div class="footer__social__links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Stay With me</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p>Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ url('front-end/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('front-end/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('front-end/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('front-end/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('front-end/js/jquery.barfiller.js') }}"></script>
    <script src="{{ url('front-end/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ url('front-end/js/jquery.slicknav.js') }}"></script>
    <script src="{{ url('front-end/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('front-end/js/main.js') }}"></script>

    <!-- Music Plugin -->
    <script src="{{ url('front-end/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ url('front-end/js/jplayerInit.js') }}"></script>
</body>

</html>
