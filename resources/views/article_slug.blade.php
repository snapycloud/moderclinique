

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


      {!! $article['body'] !!}


                     @section('description')  {!!str_limit($article['description'],160,'...')!!} @endsection




@stop