<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Curex - Medical Clinic Service Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="http://demo.devitems.com/curex-v2/curex/apple-touch-icon.png">
    
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        @include('components.header')
        @include('components.slider_container')
        @include('components.welcome_about')
        @include('components.welcome_services')
        @include('components.appointment')
        @include('components.welcome_special_banner')
        @include('components.specialized_doctor')
        @include('components.subscribe_area')
        
        <footer class="footer_area">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-lg-3 col-md-6">
                            <div class="single_footer widget footer_1">
                                <div class="single_footer_title">
                                    <h2>Links</h2>
                                </div>
                                <div class="single_footer_menu">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Appoinment</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Inquary</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="single_footer widget footer_2">
                                <div class="single_footer_title">
                                    <h2>Solutions</h2>
                                </div>
                                <div class="single_footer_menu">
                                    <ul>
                                        <li><a href="#">Aging And addiction</a></li>
                                        <li><a href="#">Back pain relief</a></li>
                                        <li><a href="#">Have Trouble Sleep</a></li>
                                        <li><a href="#">Therapy at Home</a></li>
                                        <li><a href="#">Bent Fingers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-3 col-md-6">
                            <div class="single_footer widget footer_3 ">
                                <div class="single_footer_title">
                                    <h2>Support</h2>
                                </div>
                                <div class="single_footer_menu">
                                    <ul>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Care Help Line</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Site map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-2 col-md-6">
                            <div class="single_footer widget footer_4">
                                <div class="single_footer_title">
                                    <h2>Contact</h2>
                                </div>
                                <div class="single_footer_desc">
                                    <p>125, Las Vegus, Main City, Street lane, USA</p>
                                    <p>+12345 365 789 <br> +01235 789 654 </p>
                                    <p>info@example.com<br> www.example.com </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright__content">
                                <div class="copyright__inner">
                                    <p>Copyright © <a href="#">curex</a> All Rights Reserves </p>
                                </div>
                                <div class="social__icon">
                                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    <a href="#"><i class="zmdi zmdi-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Area -->
        
        
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>