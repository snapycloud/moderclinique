

@extends('layouts.master')
@section('main')


        @include('components.faq__ht__bradcaump__area')
        {{-- @include('components.about') --}}
        {{-- @include('components.subscribe_area') --}}

        <div class="services_details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-lg-12 col-12">
                        <div class="services_details_content_inner mt--100">
                        	@foreach($data as $item)
                        	<div class="serices_details_content" id="{{ $item['id'] }}">
                                <h2>{{ $item['name'] }}</h2>
                            </div>
                            	@foreach($item['faqs']['list'] as $faq)
	                            <div class="serices_details_content">
	                                <h4>{{ $faq['name'] }}</h4>
	                                <p>{!! $faq['body'] !!}</p>
	                            </div>
	                            <hr>
                            	@endforeach
                            @endforeach
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
            

            
        </div>
@stop