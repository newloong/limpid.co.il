{{--
    Template Name: Portal
--}}

@extends('layouts.app')

@section('content')
    @include('partials.commons.post-title')

    <div id="portal-page-container">
        <div class="grid-container">
            <div id="upper-part-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-6 large-6">
                        @include('partials.portal.featured-slider')
                    </div>
                    <div class="cell medium-6 large-6">
                        @include('partials.portal.newsletter')
                    </div>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                @while(have_posts()) @php(the_post())
                    @include('partials.portal.events-calendar')
                    @include('partials.portal.articles')
                    @include('partials.portal.videos')
                @endwhile @php(wp_reset_postdata())
            </div>
        </div>
    </div>
@endsection
