{{--
    Template Name: What We Are
--}}

@extends('layouts.app')

@section('content')
    @include('partials.commons.post-title')

    <div id="about-page-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell large-12">
                    @while(have_posts()) @php(the_post())
                        <h1>{!! get_the_title() !!}</h1>
                        {!! get_the_content() !!}
                    @endwhile @php(wp_reset_postdata())
                </div>
            </div>
        </div>
    </div>

    @include('partials.commons.services')
@endsection
