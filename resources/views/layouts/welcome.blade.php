<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>CNTS-Cursos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Centro Nacional de Transfusión Sanguinea - Cursos, Diplomados">
    <meta name="author" content="adx software">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" /><!--icono de pestaña navegador-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/venobox.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

<body>

<div id="preloader">
    <span class="margin-bottom"><img src="{{ asset('images/loader.gif') }}" alt="" /></span>
</div>

<!--  HEADER -->

<header class="main-header clearfix" data-sticky_header="true" id="home">

    <div class="top-bar clearfix">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-sm-12">

                    <p>Bienvenido al portal de cursos y diplomados del CNTS.</p>

                </div>

                <div class="col-md-4col-sm-12">
                    <div class="top-bar-social">
                        <a href="https://www.facebook.com/cnts.cursos.5"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/cnts_cursos"><i class="fa fa-twitter"></i></a>
                        <a href="https://plus.google.com/u/1/116029175459796901702"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.instagram.com/cnts_cursos/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCn8CCNfXVCdtG6c71Vfkmtw?view_as=subscriber"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>

            </div>

        </div> <!--  end .container -->

    </div> <!--  end .top-bar  -->

    <section class="header-wrapper navgiation-wrapper">

        <div class="navbar navbar-default">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="#home"><img alt="" src="{{ asset('images/logo.png') }}"></a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" title="Home Layout 01">Inicio</a></li>
                        <li><a href="#about" title="Acerca de Nosotros">Como Inscribirte</a></li>
                        <li><a href="#tutor">Tutores</a></li>
                        <li><a href="#galery">Galeria</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact">Contacto</a></li>
                        @if (Route::has('login'))
                                @auth
                                <li><a href="{{ route('home') }}">Dashboard</a></li>
                                @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    </section>

</header> <!-- end main-header  -->

    @yield('content')

<!-- START FOOTER  -->

<footer>

    <section class="footer-widget-area footer-widget-area-bg">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="about-footer">

                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <img src="{{ asset('images/logo-footer.png') }}" alt="" />
                            </div> <!--  end col-lg-3-->

                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <p>
                                    We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood.
                                    We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.
                                </p>
                            </div> <!--  end .col-lg-9  -->

                        </div> <!--  end .row -->

                    </div> <!--  end .about-footer  -->

                </div> <!--  end .col-md-12  -->

            </div> <!--  end .row  -->

            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">

                    <div class="footer-widget">
                        <div class="sidebar-widget-wrapper">
                            <div class="footer-widget-header clearfix">
                                <h3>Quieres información</h3>
                            </div>
                            <p>Dejanos tu e-mail y te haremos llegar informacion de nuevos cursos y diplomados.</p>
                            <div class="footer-subscription">
                                <p>
                                    <input id="mc4wp_email" class="form-control" required="" placeholder="Enter Your Email" name="EMAIL" type="email">
                                </p>
                                <p>
                                    <input class="btn btn-default" value="Quiero información!" type="submit">
                                </p>
                            </div>
                        </div>
                    </div>

                </div> <!--  end .col-md-4 col-sm-12 -->

                <div class="col-md-4 col-sm-6 col-xs-12">

                    <div class="footer-widget">

                        <div class="sidebar-widget-wrapper">

                            <div class="footer-widget-header clearfix">
                                <h3>Nos puedes contactar en:</h3>
                            </div>  <!--  end .footer-widget-header -->


                            <div class="textwidget">

                                <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">cntscursos@gmail.com</a><br/><a href="#">helpme@donation.com</a></p>

                                <i class="fa fa-location-arrow fa-contact"></i> <p>Othón de Mendizabal 195,<br/>Col. Zacatenco, CDMX. C.P. 07360</p>

                                <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; (55) 63-92-22-50<br/>Ext:&nbsp; 51616, 51619 </p>

                            </div>

                        </div> <!-- end .footer-widget-wrapper  -->

                    </div> <!--  end .footer-widget  -->

                </div> <!--  end .col-md-4 col-sm-12 -->

                <div class="col-md-4 col-sm-12 col-xs-12">

                    <div class="footer-widget clearfix">

                        <div class="sidebar-widget-wrapper">

                            <div class="footer-widget-header clearfix">
                                <h3>Enlaces Relacionados</h3>
                            </div>  <!--  end .footer-widget-header -->


                            <ul class="footer-useful-links">

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Thalassemia
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Cell Elofrosis
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Myelodysasia
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Blood Count
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Hemolytimia
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Ychromas Eosis
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Hyrcoagulable
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Thrombo Xtosis
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Sicklenemiaxs
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Aplastic Anemia
                                    </a>
                                </li>

                            </ul>

                        </div> <!--  end .footer-widget  -->

                    </div> <!--  end .footer-widget  -->

                </div> <!--  end .col-md-4 col-sm-12 -->

            </div> <!-- end row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .footer-widget-area  -->

    <!--FOOTER CONTENT  -->

    <section class="footer-contents">

        <div class="container">

            <div class="row clearfix">

                <div class="col-md-6 col-sm-12">
                    <p class="copyright-text"> Copyright © 2018, Todos los derechos Reservados - por <a href="https://www.gob.mx/cnts">CNTS</a> </p>

                </div>  <!-- end .col-sm-6  -->

                <div class="col-md-6 col-sm-12 text-right">
                    <div class="footer-nav">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="#">Causes</a>
                                </li>
                                <li>
                                    <a href="donate.html">Events</a>
                                </li>
                                <li>
                                    <a href="blog-with-sidebar.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="campaign-grid.html">Blog</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div> <!--  end .footer-nav  -->
                </div> <!--  end .col-lg-6  -->

            </div> <!-- end .row  -->

        </div> <!--  end .container  -->

    </section> <!--  end .footer-content  -->

</footer>

<!-- END FOOTER  -->

<!-- Back To Top Button  -->

<a id="backTop">Back To Top</a>

@include('layouts.partials.scripts')
</body>

</html>