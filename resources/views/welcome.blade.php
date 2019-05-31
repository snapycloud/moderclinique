

@extends('layouts.master')
@section('main')
        @include('components.slider_container')
        @include('components.welcome_special_banner')
        {{-- @include('components.welcome_about') --}}
        @include('components.welcome_services')
        @include('components.appointment')
        @include('components.welcome_health_news')
        @include('components.subscribe_area')
@stop