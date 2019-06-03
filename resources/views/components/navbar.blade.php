            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container navbar-container">
                    <div class="row align-items-center">
                        <div class="col-md-1 col-lg-1 col-sm-6 col-xs-7">
                            <div class="logo">
                                <a href="{{ route('welcome') }}">
                                    <img width="80px" src="{{ asset('images/logo/logo.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-11 col-lg-11 d-none d-lg-block">
                            <nav class="main__menu__nav ">
                                <ul class="main__menu">
                                    <li class="drop"><a href="{{ route('welcome') }}">صفحه اصلی</a></li>
                                    <li class="drop"><a href="#">خدمات</a>
                                        <ul class="dropdown">
                                            @foreach($menu_services as $item)
                                                <li>
                                                    <a href="{{ route('service.slug', [$item['slug']])   }}">{{ $item['name'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="#">گالری تصاویر</a>
                                        <ul class="dropdown">
                                            @foreach($menu_gallery as $item)
                                                <li>
                                                    <a href="{{ route('gallery.slug', [$item['slug']]) }}">{{ $item['name'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="{{ route('knowledgeBaseArticle') }}">مقالات</a></li>
                                    <li class="drop"><a href="{{ route('faq') }}">سوالات متداول</a></li>
                                    <li class="drop"><a href="{{ route('about') }}">درباره ما</a></li>
                                    <li class="drop"><a href="{{ route('contact') }}">تماس با ما</a></li>
                                </ul>
                            </nav>
                        </div>
                       
                        <div class="col-12">
                            <div class="mobile-menu d-lg-none">
                                <nav>
                                    <ul>
                                    <li class="drop"><a href="{{ route('welcome') }}">صفحه اصلی</a></li>
                                    <li class="drop"><a href="#">خدمات</a>
                                        <ul class="dropdown">
                                              @foreach($menu_services as $item)
                                                <li>
                                                    <a href="{{ route('service.slug', [$item['slug']])   }}">{{ $item['name'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="{{ route('about') }}">مقالات</a></li>
                                    <li class="drop"><a href="{{ route('faq') }}">سوالات متداول</a></li>
                                    <li class="drop"><a href="{{ route('about') }}">درباره ما</a></li>
                                    <li class="drop"><a href="{{ route('contact') }}">تماس با ما</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>