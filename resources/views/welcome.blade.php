@extends('layouts.master')
@section('pageTitle', 'صفحه اصلی')
@section('main')
        @include('components.slider_container')
        @include('components.welcome_special_banner')
        {{-- @include('components.welcome_about') --}}
        @include('components.welcome_services')
        @include('components.customer')
        @include('components.appointment')
        @include('components.welcome_article')
@stop
