

@extends('layouts.master')
@section('main')
<div class="ht__bradcaump__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__title text-center">
                            <h2 class="bradcaump-title">گالری تصاویر " {{ $images['name'] }} "</h2>
@section('pageTitle')
    {{ $images['name'] }}
@endsection
                        </div>
                    </div>
                </div>
            </div>
         </div>

    

        <div class="our_blog_area ptb--100">
            <div class="container">
               
                    <div class="row blog-masonry">
                         @foreach($images['attachmentsIds'] as $item)
                        <div class="grid-item col-lg-4 col-md-6 col-12">
                            <div class="single_latest_post mb--30">
                                <div class="ht__blog__thumb">
                                    <a href="#">
                                        <img src="{{ route('image', [ $item ]) }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                
            </div>
        </div>

@include('components.more_article')
@stop