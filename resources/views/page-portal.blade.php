{{--
    Template Name: Portal
--}}

@extends('layouts.app')

@section('content')
    @include('partials.commons.post-title')

    <div id="portal-page-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell large-12">
                    <div id="introduction">
                        <h1>פורטל עסקים בסין</h1>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.portal.top-stories')

        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="desktop cell medium-12 large-4">
                    @include('partials.portal.sidebar')
                </div>

                <div class="cell medium-12 large-8">
                    @include('partials.portal.articles')
                </div>

                <div class="mobile cell medium-12 large-4">
                    @include('partials.portal.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
