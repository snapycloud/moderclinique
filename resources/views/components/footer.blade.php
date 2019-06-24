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
                                        <li><a href="{{ route('terms') }}">قوانین و مقررات</a></li>
                                        <li><a href="{{ route('about') }}">درباره ما</a></li>
                                        <li><a href="{{ route('contact') }}">تماس با ما</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-3">
                            <div class="single_footer widget footer_2">
                                <div class="single_footer_title text-right">
                                    <h2>خدمات ما</h2>
                                </div>
                                <div class="single_footer_menu text-right">
                                    <ul>
                                        @foreach($menu_services as $item)
                                            <li>
                                            <a href="{{ route('service.slug', [$item['slug']])   }}">
                                            {{ $item['name'] }}
                                            </a>
                                            </li>
                                        @endforeach
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
                                        <li><a href="{{ route('terms') }}">قوانین و مقررات</a></li>
                                        {{-- <li><a href="#">راهنمای مراقبت</a></li> --}}
                                        {{-- <li><a href="#">پشیتبانی</a></li> --}}
                                        <li><a href="{{ route('faq') }}">سایت مپ</a></li>
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
                                    <p>خطوط ویژه <br> <a href="tel:02187700000">۰۲۱-۸۷۷۰۰۰۰۰</a><br><a href="tel:09121181818">۰۹۱۲۱۱۸۱۸۱۸</a> </p>
                                    {{-- <p>پاسخگوی ۲۴ ساعته <br><a href="tel:02188572541">۰۲۱-۸۸۵۷۲۵۴۱</a><br><a href="tel:02188572541">۰۲۱-۸۸۵۷۲۵۴۱</a> </p> --}}
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
                                    <p>
تمامی حقوق این سایت متعلق به مرکز تخصصی مدرن کلینیک می باشد.</p>
                                    {{-- <p>قدرت گرفته از <a href="https://snapycloud.com" target="_blank"> پردازش اسنپی</a> تنها سرویس ابری مدیریت کسب و کار</p> --}}
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