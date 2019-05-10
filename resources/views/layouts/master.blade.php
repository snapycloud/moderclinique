<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>کلینیک تخصصی پوست و مو و زیبایی - مدرن | modern clinique</title>
    <meta property="og:title" content="کلینیک تخصصی پوست و مو و زیبایی - مدرن | modern clinique" />
    <meta name="description" content="کلینیک تخصصی پوست و مو و زیبایی - مدرن | modern clinique">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"> --}}
    {{-- <link rel="apple-touch-icon" href=""> --}}
    <meta name="csrf-token" value="{{ csrf_token() }}">
    
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
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
    <div class="wrapper" id="app">
        @include('components.header')
        @yield('main')

        
        <footer class="footer_area">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-lg-2 col-md-2">
                            <div class="single_footer widget footer_1">
                                <div class="single_footer_title text-right" >
                                    <h2>پیوندها</h2>
                                </div>
                                <div class="single_footer_menu text-right">
                                    <ul>
                                        <li><a href="#">صفحه اصلی</a></li>
                                        <li><a href="#">درباره ما</a></li>
                                        <li><a href="#">نوبتگیری</a></li>
                                        <li><a href="#">خدمات ما</a></li>
                                        <li><a href="#">سوالات متداول</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-3">
                            <div class="single_footer widget footer_2">
                                <div class="single_footer_title text-right">
                                    <h2>دراه کارها</h2>
                                </div>
                                <div class="single_footer_menu text-right">
                                    <ul>
                                        <li><a href="#">کاشت مو</a></li>
                                        <li><a href="#">کاشت ریش و سبیل</a></li>
                                        <li><a href="#">کاشت ابرو</a></li>
                                        <li><a href="#">مزوتوراپی</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-3 col-md-2">
                            <div class="single_footer widget footer_3 ">
                                <div class="single_footer_title text-right">
                                    <h2>پشتیبانی</h2>
                                </div>
                                <div class="single_footer_menu text-right">
                                    <ul>
                                        <li><a href="#">با ما در تماس باشید</a></li>
                                        <li><a href="#">راهنمای مراقبت</a></li>
                                        <li><a href="#">پشیتبانی</a></li>
                                        <li><a href="#">درباره ما</a></li>
                                        <li><a href="#">سایت مپ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-4">
                            <div class="single_footer widget footer_4">
                                <div class="single_footer_title text-right">
                                    <h2>تماس با ما</h2>
                                </div>
                                <div class="single_footer_desc text-right">
                                    <p>آدرس: تهران - سعادت آباد بلواردریا بین خیابان گلها و خیابان رامشه پلاک ۷۰ طبقه ۳</p>
                                    <p>خطوط ویژه <br> ۰۲۱-۸۷۷۰۰۰۰۰<br>۰۲۱-۸۸۰۸۰۹۱۵ </p>
                                    <p>پاسخگوی ۲۴ ساعته ۰۲۱-۸۸۵۷۲۵۴۱<br>۰۲۱-۸۸۵۷۲۵۴۱ </p>
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
                                    <p>قدرت گرفته از سریوس <a href="https://snapycloud.com" target="_blank"> پردازش اسنپی</a> تنها سرویس ابری مدیریت کسب و کار</p>
                                </div>
                                <div class="social__icon">
                                    <a href="https://www.instagram.com/modernclinique/?hl=en" target="_blank"><i class="zmdi zmdi-instagram"></i></a>
                                    <a href="http://api.whatsapp.com/send?phone09128981521=&text=با سلام، اینجانب در خواست مشاوره دارم"><i class="zmdi zmdi-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Area -->
        
@include('components.menu__nav')

<consultation-modal></consultation-modal>
<case-modal></case-modal>
<contact-modal></contact-modal>
</div>


    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script> --}}
    {{-- <script src="{{ asset('js/map.js') }}"></script> --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
<script>
    (function(){
  'use strict';

  class Menu {
    constructor(settings) {
      this.menuNode = settings.menuNode;
    }
    
    toggleMenuState(className) {      
      if (typeof className !== 'string' || className.length === 0){
        return console.log('you did not give the class name for the toggleState function');
      } 
      return  this.menuNode.classList.toggle(className);
    }
  }

  const jsMenuNode = document.querySelector('.menu');
  const demoMenu = new Menu ({
    menuNode: jsMenuNode
  });
  
  function callMenuToggle() {
    demoMenu.toggleMenuState('menu_activated');
  }
  
  jsMenuNode.querySelector('.menu__toggle').addEventListener('click', callMenuToggle);
})();

    $('.mobile-menu nav').meanmenu({
        meanScreenWidth: "9901",
        meanMenuContainer: ".mobile-menu",
        onePage: true,
    });

    /*------------

  Template Name:  Curex - Medical Clinic Service Bootstrap 4 Template
  Description: Curex is a unique website template designed in HTML with a simple & beautiful look. There is an excellent solution for creating clean, wonderful and trending material design Medical, Clinic any other purposes websites.
  Version: 1.0.0 
-----------------*/


(function($) {
    'use strict';

    
    //jQuery MeanMenu
  
    $('.mobile-menu nav').meanmenu({
        meanScreenWidth: "9901",
        meanMenuContainer: ".mobile-menu",
        onePage: true,
    });
    
    //wow js active
    new WOW().init();

   //Sticky Header
    $(window).on('scroll',function() {    
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $('#sticky-header-with-topbar').removeClass("scroll-header");
        }else{
            $('#sticky-header-with-topbar').addClass("scroll-header");
        }
    });
    
  // Slider Activation
  $(".slider-active").owlCarousel({
      loop:true,
      margin:0,
      nav:true,
      autoplay: false,
      navText: [ '<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>' ],
      autoplayTimeout: 10000,
      items:1,
      dots: false,
      lazyLoad: true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        800:{
          items:1
        },
        1920:{
          items:1
        }
      }
    });
    //Brand carousel Slider
    $('.our__brand_list').owlCarousel({
      loop: true,
      nav:false,
      autoplay: true,
      items:4,
      responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            575:{
                items:2,
            },
            767:{
                items:2,
            },
            992:{
                items:3,
            },
            1199:{
                items:4,
            }
        }
    });

    //Services carousel Slider

    $('.services__list').owlCarousel({
      loop: true,
      nav:false,
      autoplay: false,
      items:3,
      responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            767:{
                items:2,
            },
            992:{
                items:3,
            }
        }
    });
    
    //magnificPopup active
    $('.play_video a,.play_button_inner > a').magnificPopup({
        disableOn: 0,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: true,
        fixedContentPos: false
    });
    
    
    //Datepicker
    $( '#datepicker,#doctor_calender' ).datepicker();
    

    //NiceSelect
    $('.doctor_select_inner select,.input_mobile_number select').niceSelect();
    
    //Blog Masonry activation
    $('.blog-masonry').imagesLoaded( function() {
        var $grid = $('.blog-masonry').isotope({
          itemSelector: '.grid-item',
          percentPosition: true,
          masonry: {
            columnWidth: '.grid-item',
          }
        });
    });
    
    //ScrollUp
    $.scrollUp({
        scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

})(jQuery);




</script>
</body>

</html>