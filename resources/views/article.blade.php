

@extends('layouts.master')
@section('main')


        @include('components.article__ht__bradcaump__area')
        <div class="our_blog_area ptb--100">
            <div class="container">
                <div class="row  rtl">
                    @foreach($data as $item)
                    <div class="grid-item col-lg-4 col-md-4 col-12">
                        <div class="single_latest_post mb--30">
                            <div class="ht__blog__thumb">
                                <a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}">
                                    <img src="{{ route('image', [ $item['coverId'] ]) }}" alt="{{ $item['name']}}">
                                </a>
                            </div>

                            <div class="htc__blog__content">
                                <div class="blog__post_title">
                                    <h2 class="text-right"><a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}">{{ $item['name'] }}</a></h2>
                                    <p class="text-right">{!! str_limit($item['description'], 100) !!}</p>

                                   <a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}" class="btn-more text-right">ادامه مطلب</a>
                                </div>
                                
                                {{-- <div class="blog_post__meta">
                                    <div class="post_author_img">
                                        <a href="#"><img src="images/blog/latest_post/author_img_3.png" alt=""></a>
                                    </div>
                                    <div class="post_content">
                                        <div class="author_tile">
                                            <h4><a href="#">Doctors Ltd.</a></h4>
                                            <div class="publish_info">
                                                <ul>
                                                    <li>2 Days Ago</li>
                                                    <li>44 read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div> 
                    @endforeach
                </div>


                {{-- <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="pagination">
                            <div class="pagination_list mt--30">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i> first</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active">3</li>
                                    <li>...</li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                    <li><a href="#">last <i class="zmdi zmdi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
@stop