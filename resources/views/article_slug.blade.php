

@extends('layouts.master')
@section('main')

<style>
    .star-rating {
  line-height:32px;
  font-size:1.25em;
}

.star-rating .fa-star{color: yellow;}
.fa-star{color: yellow;}
</style>

<script>
  var link = "{{url()->current()}}";
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{url()->current()}}"
  },
  "headline": "{{ $article['name'] }}",
  "description": "{!!str_limit($article['description'],160,'...')!!}",
  "image": {
    "@type": "ImageObject",
    "url": "https://modernclinique.com/article/recommendations_for_hair_replacement",
    "width": 1000,
    "height": 400
  },
  "author": {
    "@type": "Person",
    "name": "modernclinique"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "modernclinique",
    "logo": {
      "@type": "ImageObject",
      "url": "https://modernclinique.com/images/logo/logo.png",
      "width": 200,
      "height": 46
    }
  },
  "datePublished": "2019-09-20",
  "dateModified": "2019-09-20"
}
</script>
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
                <div class="col-lg-4 col-md-8 col-12">
                        <div class="sidebar_right">  
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
                                              <span class="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}">
                                                  <?php $date = \Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($item['createdAt']));
                                                      echo \Morilog\Jalali\CalendarUtils::convertNumbers($date); ?>
                                          </div>
                                        </div>
                                      @endif
                                    @endforeach                  
                                @endif


                            </div> 
                            
                         </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="post_details_inner">
                            <div class="single_post_thumbnail">
                                <img src="{{ route('image', [ $article['coverId'] ]) }}" alt="{{ $article['name'] }}">
                            </div>
                            <div class="single_post_content">
                                <div class="single_post_top_contnt">
                                    <div class="single_post_title text-right">
                                        <h2>{{ $article['name'] }}</h2>
                                    </div>
                                    <div class="single_post_meta">
                                        <div class="single_post_left_meta">
                                            <ul>
                                                <li>
                                                    <?php $date = \Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($article['createdAt']));
                                                      echo \Morilog\Jalali\CalendarUtils::convertNumbers($date); ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_post_right_meta">
                                            <div class="container rtl text-right">

                                            <ul>
                                                <li> {{ $article['rate'] }}  امتیاز سردبیر</li>
                                                <li> {{ $article['clidentrate'] }}  امتیاز کاربران</li>
                                                <li>  <div class="row">
    <div class="col-lg-12">
      <div class="star-rating">
        <span class="fa fa-star-o" data-rating="1"></span>
        <span class="fa fa-star-o" data-rating="2"></span>
        <span class="fa fa-star-o" data-rating="3"></span>
        <span class="fa fa-star-o" data-rating="4"></span>
        <span class="fa fa-star-o" data-rating="5"></span>
        <input type="hidden" name="whatever1" class="rating-value" value="{{ $article['rate'] }}">
      </div>
    </div>
  </div>
</div></li>
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
                    {{-- @include('components.appointment') --}}
            </div>
            <div class="widget tag text-right">
                                @if($article['tags'] != null)
                                <div class="post_tag">
                                        @foreach($article['tags'] as $tag)
                                          <a href="{{ route('tags', $tag) }}">{{ $tag }}</a>,
                                        @endforeach  
                                </div>
                                @endif
                                <div class="tag_title">
                                    <p> برچسب ها : </p>
                                </div>
                            </div>
                </div>
        </div>
    {{-- <div style="display: none;" itemscope itemtype=”http://schema.org/Product”>
    <img itemprop="image" src="{{ route('image', [ $article['coverId'] ]) }}" alt="{{ $article['name'] }}"/>
    <span itemprop=”name”>{{ $article['name'] }}</span>
    <div itemprop=”aggregateRating itemscope itemtype=”http://schema.org/AggregateRating”>
    <span itemprop=”ratingValue”>{{ $article['rate'] }}</span>
     از <span itemprop=”bestRating”>10</span>
    </div>
    </div> --}}
@stop