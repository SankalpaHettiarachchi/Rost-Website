<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> ROST - Rajarata University of Sri Lanka </title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('asset/favicon/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('asset/favicon/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('asset/favicon/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('asset/favicon/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('asset/favicon/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="{{ asset('asset/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/flaticon.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="{{ asset('asset/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

</head>

<body>
{{-- ===============================Preloader================================= --}}
        <div class="preloader">
            <div class="preloader-inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
{{-- ================================Preloader-End============================= --}}

    {{-- ======================Header============================ --}}
    <header class="site-header header-style-1">
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('asset/images/logo.png') }}" alt></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li class="{{ request()->is('/') ? 'current-menu-parent' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                        <li class="{{ request()->is('about') ? 'current-menu-parent' : '' }}"><a href="{{ route('about') }}">About</a></li>
                        <li class="{{ request()->is('news') ? 'current-menu-parent' : '' }}"><a href="{{ url('/news') }}">News</a></li>
                        <li class="{{ request()->is('albums') ? 'current-menu-parent' : '' }}"><a href="{{ route('albums') }}">Albums</a></li>
                        <li class="{{ request()->is('contact') ? 'current-menu-parent' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="social-links-holder">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/profile.php?id=100087392356309 "><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/robotic-society-of-technology"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://mailto:rajaratarost@gmail.com"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{-- ======================Header-End============================ --}}
    {{-- ======================Content============================ --}}

        @yield('content')

    {{-- ======================Content-End============================ --}}
    {{-- ======================Footer============================ --}}
    <div>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-md-3 col-xs-6">
                        <div class="widget about-widget">
                            <h3><img src="{{ asset('asset/images/logo.png') }}" alt="Robotic Society of Technology"></h3>
                            <p>At our organization, we foster a vibrant robotics community where like-minded 
                                individuals can come together, share ideas, collaborate on projects, and network 
                                with industry professionals.
                            </p>                        
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-xs-6">
                        <div class="widget site-map-widget">
                            <h3>Navigation</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="albums.html">Albums</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-xs-6">
                        <div class="widget news-widget">
                            <h3>Recent news</h3>
                            <ul>
                                <li>
                                    <div class="entry-media">
                                        <img src="images/blog/thumb/img-1.jpg" alt>
                                    </div>
                                    <div class="entry-details">
                                        <h5><a href="#">New ch017y concrete mixer is bought</a></h5>
                                        <span class="date">19 FEB</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="entry-media">
                                        <img src="images/blog/thumb/img-1.jpg" alt>
                                    </div>
                                    <div class="entry-details">
                                        <h5><a href="#">New ch017y concrete mixer is bought</a></h5>
                                        <span class="date">16 FEB</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-3 col-xs-6">
                        <div class="widget newsletter-widget">
                            <h3>Social Media Links</h3>
                            <p>Follow us on social media</p>
                        </div>

                        <div class="widget social-media-widget">
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/profile.php?id=100087392356309 "><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/robotic-society-of-technology"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://mailto:rajaratarost@gmail.com"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    {{-- ======================Footer-End============================ --}}

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

    <!-- Plugins for this template -->
    <script src="{{ asset('asset/js/jquery-plugin-collection.js') }}"></script>
    <!-- Google map api -->

    <!-- Custom script for this template -->
    <script src="{{ asset('asset/js/script.js') }}"></script>
</body>
</html>
