

@extends('layouts.master')
@section('main')

<div class="ht__bradcaump__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__title text-center">
                          
                            <h2 class="bradcaump-title">عنوان مقاله: " {{ $article['name'] }} "</h2>
@section('pageTitle')
    {{ $article['name'] }}
@endsection


                        </div>
                    </div>
                </div>
            </div>
         </div>





                     @section('description')  {!!str_limit($article['description'],160,'...')!!} @endsection





        <div class="our_blog_area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="post_details_inner">
                            <div class="single_post_thumbnail">
                                <img src="{{ route('image', [ $article['coverId'] ]) }}" alt="{{ $article['name'] }}">
                            </div>
                            <div class="single_post_content">
                                <div class="single_post_top_contnt">
                                    <div class="single_post_title">
                                        <h2>{{ $article['name'] }}</h2>
                                    </div>
                                    <div class="single_post_meta">
                                        <div class="single_post_left_meta">
                                            <ul>
                                                <li>{{ $article['createdAt'] }}</li>
                                            </ul>
                                        </div>
                                        <div class="single_post_right_meta">
                                            <ul>
                                                <li> {{ $article['rate'] }}  امتیاز سردبیر</li>
                                                <li> {{ $article['clidentrate'] }}  امتیاز کاربران</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="post_excerpt text-right">
                                    <p>
                                            {!! $article['body'] !!}
                                    </p>
                                  
                                </div>
                                

                            </div>
                            
                            <!--Comment box -->
{{--                             <div class="comment_box_form">
                                <div class="comment_box_title">
                                    <h3>پیام بگذارید</h3>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                </div>
                                <div class="leave_comment_form">
                                    <form action="#">
                                        <div class="text-areabox">
                                            <textarea placeholder="Type Your Comment *"></textarea>
                                        </div>
                                        <div class="input_box half_left">
                                            <input type="text" placeholder="Your Name *" >
                                            
                                        </div>
                                        <div class="input_box half_right">
                                            <input type="email" placeholder="Your Email *" >
                                        </div>
                                        <div class="input_box">
                                            <input type="text" placeholder="Your Website" >
                                        </div>
                                        <div class="submit_button_inner">
                                            <button type="submit">Submit Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            <!--Comment box end-->
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12">
                        <div class="sidebar_right">  
                             

                          
                                
                            <div class="widget cartegories text-right">
                                <div class="sidebar_title">
                                    <h3>تگ ها</h3>
                                </div>
                                @if(count($article['tags']))
                                <div class="post_categories">
                                    <ul>
                                        @foreach($article['tags'] as $tag)
                                          <li><a href=""><p>{{ $tag }}</p></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                
                            </div>

                              <div class="widget recent_post text-right">
                                <div class="sidebar_title">
                                    <h3>آخرین مطالب</h3>
                                </div>
                                @if($data)
                                    <?php $count = 0; ?>
                                    @foreach($data as $item)
                                    @if($count <= 6)
                                    <?php $count++; ?>
                                        <div class="single_recent_post">
                                          <div class="recent_post_img">
                                              <a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}"> <img src="{{ route('image', [ $item['coverId'] ]) }}" alt="{{ $item['name']}}"></a>
                                          </div>
                                          <div class="post_content">
                                              <h3><a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}">{{ $item['name'] }}</a></h3>
                                              <span class="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}">{{ $item['createdAt'] }}</span>
                                          </div>
                                        </div>
                                      @endif
                                    @endforeach                  
                                @endif


                            </div> 
                            
                         </div>
                    </div>
                </div>
                
            </div>
        </div>



@stop