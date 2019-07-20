

@extends('layouts.master')
@section('main')
<div class="ht__bradcaump__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__title text-center">
                            <h2 class="bradcaump-title">{{ $service['name'] }}</h2>
@section('pageTitle')
    {{ $service['name'] }}
@endsection

                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="services_details">

       		{!! $service['body'] !!}

  @section('description')  {!!str_limit(strip_tags($service['body']),160,'...')!!} @endsection


       <div class="special_banner style2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                            <div class="sepcial_banner_content">
                                <p>شما عزیزان برای آگاهی از اینکه کدام تکنیک برای  شما مناسب است و به تبع آن چه مقدار هزینه ایی باید برای انجام این کار در نظر بگیرید می توانید در هر ساعت از شبانه روز با مشاورین ما در ارتباط باشید و یا با دریافت وقت قبلی و مراجعه حضوری، از مشاوره رایگان و تخصصی در این زمینه بهره مند شوید.   

</p>
<a href="{{ route('faq') }}">پرسش های متداول </a>
<a href="{{ route('contact') }}">تماس با ما </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop