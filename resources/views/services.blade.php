<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | cicil.in</title>

    <!-- core CSS -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('asset/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset ('asset/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset ('asset/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset ('asset/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('asset/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head>
<!--/head-->


<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class=></i>Integrasi Aplikasi Korporasi</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">Tentang cicil.in</a></li>
                        <li class="active"><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/pengajuan') }}">Pengajuan</a></li>
                        <li class="dropdown">
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->


    <div class="page-title" style="background-image: url({{ asset('asset/images/page-title.png') }})">
        <h1>Services</h1>
    </div>

    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('asset/images/services/mobile-ui.svg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Easy to Apply</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('asset/images/services/web-app.svg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Just a little Form</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('asset/images/services/mobile-ui.svg') }}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Easy to Scheduling</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->


    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Testimonials</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="testimonial-slider owl-carousel">
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="{{ asset('asset/images/client1.jpg') }}" alt="">
                    </div>
                    <div class="content">

                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="{{ asset('asset/images/client2.jpg') }}" alt="">
                    </div>
                    <div class="content">

                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="{{ asset('asset/images/client3.jpg') }}" alt="">
                    </div>
                    <div class="content">

                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="{{ asset('asset/images/client2.jpg') }}" alt="">
                    </div>
                    <div class="content">

                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="{{ asset('asset/images/client1.jpg') }}" alt="">
                    </div>
                    <div class="content">

                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="{{ asset('asset/images/client3.jpg') }}" alt="">
                    </div>
                    <div class="content">

                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead">Memastikan bahwa setiap transaksi sesuai dengan konsep muamalah yang benar <br> Saling terbuka dan percaya </p>
            </div>

            <div class="partners">

            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#partner-->


    <section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" class="footer-logo">

                    </a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Company</h3>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">We are hiring</a></li>
                                    <li><a href="#">Meet the team</a></li>
                                    <li><a href="#">Copyright</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Support</h3>
                                <ul>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Forum</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Refund policy</a></li>
                                    <li><a href="#">Ticket system</a></li>
                                    <li><a href="#">Billing system</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Developers</h3>
                                <ul>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">SEO Marketing</a></li>
                                    <li><a href="#">Theme</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Email Marketing</a></li>
                                    <li><a href="#">Plugin Development</a></li>
                                    <li><a href="#">Article Writing</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Our Partners</h3>
                                <ul>
                                    <li><a href="#">Adipisicing Elit</a></li>
                                    <li><a href="#">Eiusmod</a></li>
                                    <li><a href="#">Tempor</a></li>
                                    <li><a href="#">Veniam</a></li>
                                    <li><a href="#">Exercitation</a></li>
                                    <li><a href="#">Ullamco</a></li>
                                    <li><a href="#">Laboris</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>
