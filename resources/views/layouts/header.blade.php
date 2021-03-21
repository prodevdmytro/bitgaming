<!DOCTYPE html>

    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('title')

    <meta name="description" content="Gaming website using BTC and ETH">
    <meta name="keywords" content="game, gaming, Laravel, blockchain, BTC, ETH, online">
    <meta name="author" content="_Andrey">

    <link rel="icon" type="image/png" href="{{ url('assets/images/favicon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- FontAwesome -->
    <script defer src="{{ url('assets/vendor/fontawesome-free/js/all.js') }}"></script>
    <script defer src="{{ url('assets/vendor/fontawesome-free/js/v4-shims.js') }}"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ url('assets/vendor/ionicons/css/ionicons.min.css') }}">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ url('assets/vendor/flickity/dist/flickity.min.css') }}">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendor/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendor/summernote/dist/summernote-bs4.css') }}">

    <!-- GoodGames -->
    <link rel="stylesheet" href="{{ url('assets/css/goodgames.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{ url('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    
</head>

<body>
    
    <header class="nk-header nk-header-opaque">

        <!-- START: Top Contacts -->
        <div class="nk-contacts-top">
            <div class="container">
                <div class="nk-contacts-left">
                    <ul class="nk-social-links">
                        <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                        <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                        <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                        <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                        <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                        <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>                
                    </ul>
                </div>
                <div class="nk-contacts-right">
                    <ul class="nk-contacts-icons">
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalSearch">
                                <span class="fa fa-search"></span>
                            </a>
                        </li>
                        <li>
                            <span class="nk-cart-toggle">
                                <span class="fa fa-shopping-cart"></span>
                                <!-- <span class="nk-badge"></span> -->
                            </span>
                            <!-- <div class="nk-cart-dropdown">
                                <div class="nk-widget-post">
                                    <a href="store-product.html" class="nk-post-image">
                                        <img src="{{ url('assets/images/product-5-xs.jpg"') }} alt="In all revolutions of">
                                    </a>
                                    <h3 class="nk-post-title">
                                        <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                        <a href="store-product.html">In all revolutions of</a>
                                    </h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">€ 23.00</div>
                                </div>
                                <div class="nk-widget-post">
                                    <a href="store-product.html" class="nk-post-image">
                                        <img src="{{ url('assets/images/product-7-xs.jpg"') }} alt="With what mingled joy">
                                    </a>
                                    <h3 class="nk-post-title">
                                        <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                        <a href="store-product.html">With what mingled joy</a>
                                    </h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">€ 14.00</div>
                                </div>
                                <div class="nk-gap-2"></div>
                                <div class="text-center">
                                    <a href="store-checkout.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Proceed to Checkout</a>
                                </div>
                            </div> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Top Contacts -->

        <!--
            START: Navbar

            Additional Classes:
                .nk-navbar-sticky
                .nk-navbar-transparent
                .nk-navbar-autohide
        -->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="{{ url('/') }}" class="nk-nav-logo">
                        <p> logo </p>
                    </a>
                    <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                        <li>
                            <a href="{{ url('shop') }}">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('tournament') }}">
                                Tournaments
                            </a>
                        </li>
                        <li class=" nk-drop-item">
                            <a href="">
                                Matchfinder
                            </a>
                            <ul class="dropdown">       
                                <li>
                                    <a href="{{ url('cash') }}">
                                        Cash
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('xp') }}">
                                        XP
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" nk-drop-item">
                            <a href="{{ url('faq') }}">
                                More
                            </a>
                            <ul class="dropdown">  
                                <li>
                                    <a href="{{ url('faq') }}">
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('leaderboard') }}">
                                        Leaderboards
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('template') }}">
                                        Find Template
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('news') }}">
                                        News
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @guest
                        <li class="nk-drop-item">
                            <a href="{{ route('login') }}">
                                Sign In
                            </a>
                            <ul class="dropdown">       
                                <li>
                                    <a href="{{ route('login') }}">
                                        Sign In
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="nk-drop-item">
                            <a href="">
                                <span class="fa fa-user"></span>
                            </a>
                            <ul class="dropdown">       
                                <li>
                                    <a href="">
                                        My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->

    </header>

    <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
    -->
    <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
        <div class="nano">
            <div class="nano-content">
                <a href="index.html" class="nk-nav-logo">
                    <img src="{{ url('assets/images/logo.png') }}" alt="" width="120">
                </a>
                <div class="nk-navbar-mobile-content">
                    <ul class="nk-nav">
                        <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Navbar Mobile -->

    <div class="nk-main">
        
        <div class="nk-gap-2"></div>