@extends('layouts.master')
@section('main')

@section('pageTitle', 'سوالات متداول')
        @include('components.faq__ht__bradcaump__area')

        <div class="services_details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-lg-12 col-12">
                        <div class="services_details_content_inner mt--100">

<div id="accordion">

<?php $row_count = 1; ?>


                        	@foreach($data as $item)
<div class="serices_details_content" id="{{ $item['id'] }}">
 <div class="card">
    <div class="card-header" id="headingOne-{{$row_count}}">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne-{{$row_count}}" aria-expanded="false" aria-controls="collapseOne-{{$row_count}}">
                        	
                                <h2>{{ $item['name'] }}</h2>
                           

    </button>
</div>
</div>
 </div>
                            	@foreach($item['faqs']['list'] as $faq)

  <div id="collapseOne-{{$row_count}}" class="collapse" aria-labelledby="headingOne-{{$row_count}}" data-parent="#accordion">
      <div class="card-body">
	                            <div class="serices_details_content">
	                                <h4>{{ $faq['name'] }}</h4>
	                                <p>{!! $faq['body'] !!}</p>
	                            </div>
	                    </div>
  </div>
                            	@endforeach

  
<?php $row_count++; ?>
                            @endforeach
                        </div>
</div>
                        <hr>

                    </div>
                </div>
            </div>
            

            
        </div>
@stop