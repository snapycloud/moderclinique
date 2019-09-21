<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- {!! SEO::generate() !!} --}}
    {!! OpenGraph::generate() !!}
    {!! JsonLd::generate() !!}
    <title> @yield('pageTitle') | کلینیک تخصصی پوست و مو و زیبایی - مدرن</title>
          <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:site_name" content="کلینیک تخصصی پوست و مو و زیبایی - مدرن" />
        <meta property="og:image" content="https://modernclinique.com/images/logo/logo.png" />
    <meta property="og:title" content="کلینیک تخصصی پوست و مو و زیبایی - مدرن |@yield('pageTitle')" />
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta itemprop="name" content="@yield('pageTitle') | کلینیک تخصصی پوست و مو و زیبایی - مدرن">
    <meta itemprop="description" content="@yield('description')">
    {{-- <meta itemprop="image" content=""> --}}
    
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134632850-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134632850-1');
</script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper" >
        @include('components.header')
        <div id="app">  
          @yield('main')        
          @include('components.footer')
          @include('components.menu__nav')
          <consultation-modal></consultation-modal>
          <case-modal></case-modal>
          <contact-modal></contact-modal>
        </div>
    </div>


    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
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

    // $('.mobile-menu nav').meanmenu({
    //     meanScreenWidth: "9901",
    //     meanMenuContainer: ".mobile-menu",
    //     onePage: true,
    // });

    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
      return $star_rating.each(function() {
        if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
          return $(this).removeClass('fa-star-o').addClass('fa-star');
        } else {
          return $(this).removeClass('fa-star').addClass('fa-star-o');
        }
      });
    };

    $star_rating.on('click', function() {
      $star_rating.siblings('input.rating-value').val($(this).data('rating'));
      return SetRatingStar();
    });

    SetRatingStar();
    $(document).ready(function() {

    });


</script>
</body>

</html>
