@extends('layouts.app')

@section('content')
    @if (is_category('1') || cat_is_ancestor_of(1, get_query_var('cat')))
        @include('partials.commons.post-title')
        @include('partials.portfolio.portfolio-main')
        @include('partials.commons.footer-contact-form')
    @endif
@endsection
