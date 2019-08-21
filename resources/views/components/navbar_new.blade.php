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













                                    <li class="drop">
                                        <a href="#" >خدمات</a>
                    <ul class="dropdown">
                        @foreach($main_service as $item)
                                                <li>
                                                    <a href="{{ route('service.slug', [$item['slug']])   }}">{{ $item['name'] }}</a>
                                                          </li>
                                            @endforeach

                        {{-- @foreach($list_tree['list'] as $tree)
                         
                            


                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $tree['name']}}</a>
                            <ul class="dropdown-menu">
                                @foreach($tree['links']['list'] as $item)
                                <li>
                                    <a href="{{ route('service.slug', [$item['slug']])   }}">{{ $item['name'] }}</a>
                                </li>
                                @endforeach


                                    @foreach($tree['childList'] as $childList)
                                        @if($childList['id'] == '5d32bc8a30564c349')
                                            <li class="dropdown-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $childList['name'] }}</a>
                                                @foreach($childList['listTree']['list'] as $child)
                                                    @if(count($child['links']))
                                                        <li class="dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $child['name'] }}</a>
                                                            <ul class="dropdown-menu">
                                                                @foreach($child['links']['list'] as $item)
                                                                    <li class="dropdown-submenu">
                                                                        <a href="{{ route('service.slug', [$item['slug']])   }}">{{ $item['name'] }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </li>
                                        @else
                                    

                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $childList['name'] }}</a>
                                        @if(count($childList['links']['list']))
                                        <ul class="dropdown-menu">
                                            @foreach($childList['links']['list'] as $item)
                                                <li>
                                                    <a href="{{ route('service.slug', [$item['slug']])   }}">{{ $item['name'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>

@endif
                                    
                                    
                                @endforeach
                            </ul>
                        </li>
                        @endforeach --}}

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
                                    <li class="drop">
                                        <a href="#">خدمات</a>
                                        <ul style="display: none;">
                                              @foreach($menu_services as $item)
                                                <li>
                                                    <a href="{{ route('service.slug', [$item['slug']])   }}">{{ $item['name'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <a class="mean-expand" href="#" style="font-size: 18px">+</a>
                                    </li>
                                    <li class="drop"><a href="#">گالری تصاویر</a>
                                        <ul style="display: none;">
                                            @foreach($menu_gallery as $item)
                                                <li>
                                                    <a href="{{ route('gallery.slug', [$item['slug']]) }}">{{ $item['name'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <a class="mean-expand" href="#" style="font-size: 18px">+</a>
                                    </li>
                                    <li class="drop"><a href="{{ route('knowledgeBaseArticle') }}">مقالات</a></li>
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