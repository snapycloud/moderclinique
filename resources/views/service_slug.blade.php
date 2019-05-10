

@extends('layouts.master')
@section('main')
<div class="ht__bradcaump__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__title text-center">
                            <h2 class="bradcaump-title">{{ $service['name'] }}</h2>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="services_details">

       		{!! $service['body'] !!}

       <div class="special_banner style2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-1 col-md-12 col-12">
                            <div class="sepcial_banner_content">
                                <h4>Special Offer !!</h4>
                                <h2>Get 40% off on Every Dental <br> Checkups.</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop