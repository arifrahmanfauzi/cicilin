<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | cicil.in </title>

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
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('asset/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('asset/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('asset/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('asset/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head>
<!--/head-->

<body class="homepage"background-image: url("{{ asset('asset/images/allbackground.png') }}");>



    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i></i> Integrasi Aplikasi Korporasi</p>
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
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">Tentang cicil.in</a></li>
                        <li><a href="services.html">Bantuan</a></li>
                        <li><a href="masuk.html">Masuk</a></li>
                        <li><a href="daftar.html">Daftar</a></li>

                        <li class="dropdown">
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url({{ asset('asset/images/slider/bg1.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Cicilan Halal Tanpa Riba Tanpa Denda</h1>
                                    <div class="animation animated-item-2">
                                        "Dan Allah telah menghalalkan jual beli dan mengharamkan riba."
                                    </div>
                                    <div class="animation animated-item-2">
                                        (Al- Baqarah : 275)
                                    </div>

                                    <div class="animation animated-item-2">

                                    </div>

                                    <form>
                                        <br>

                                        <div class="animation animated-item-1">
                                        Paste Link Dari Toko Online

                                        </div>
                                        <br>
                                        <div class="form-group">

                                            <input type="text" name="name" class="form-control" required="required">
                                        </div>


                                    <a class="btn-slide animation animated-item-3" href="hasil.html">Search</a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <section id="middle" class="skill-area" style="background-image: url({{ asset('/asset/images/black.jpg') }})">
        <div class="container">
            <div class="center fadeInDown">

                <h2>Fitur</h2>


                <p class="lead">Ada beberapa fitur yang kami tawarkan dalam cicil.in</p>
            </div>
        <div class="item active" style="background-image: url({{ asset('asset/images/slider/allbackground.png') }})">
            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>

                            <h2>Fast</h2>
                            <p>Dapat melakukan transaksi dengan cepat kapanpun dan dimanapun</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <h2>Easy</h2>
                            <p>Mudah digunakan dan mudah dimengerti oleh setiap pengguna diseluruh usia</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <h2>Cheap</h2>
                            <p>Harga yang ditawarkan dapat terjangkau dan sesuai dengan kesepakatan</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-arrows"></i>
                            </div>
                            <h2>Editable</h2>
                            <p>Kami tidak hanya tersedia dalam bentuk WEB, namun sudah dikembangakan dan dapat digunakan pada Mobile</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

    <section id="middle" class="skill-area" style="background-image: url({{ asset('asset/images/black.jpg') }})">
        <div class="container">
            <div class="center fadeInDown">
             <div class="item active" style="background-image: url({{ asset('asset/images/slider/allbackground.png') }})">
                <h2>Cara Kerja cicil.in</h2>
                <p class="lead">Berikut Adalah Gambaran Dari Cara Kerja cicil.in</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-20 col-md-20 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{ asset('asset/images/carakerja.png') }}" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="{{ asset('asset/images/carakerja.png') }}" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!--/.row-->
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Kembali Ke Atas</a>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->



    <section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Cicil dari berbagai Toko Online</h2>
                <h2>Tanpa Kartu Kredit</h2>
                <p class="lead">Kami menyediai semua E-Commerce yang ada di Indonesia, agar memberi kemudahan pada Anda</p>
            </div>

            <div class="partners">
                <ul>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{ asset('asset/images/partners/tokopedia.png') }}"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{ asset('asset/images/partners/bukalapak.png') }}"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{ asset('asset/images/partners/shoppe2.png') }}"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{ asset('asset/images/partners/JDID.png') }}"></a>
                    </li>
                    <li>

                        <a href="#"><img class="img-responsive fadeInDown" href="blibli.com"data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{ asset('asset/images/partners/blibli1.png') }}"></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#partner-->


    <section id="bottom" class="skill-area" style="background-image: url(images/black.jpg)">

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
                    &copy; 2019 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
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
