{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
    @include('partials.home.video')
    @include('partials.commons.services')
    @include('partials.home.who-we-are')
    @include('partials.home.portfolio')
    @include('partials.home.latest-articles')
    @include('partials.home.customers')
    @include('partials.commons.testimonials')
    @include('partials.commons.contact')
@endsection
