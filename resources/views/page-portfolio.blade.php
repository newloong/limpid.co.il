{{--
    Template Name: Portfolio
--}}

@extends('layouts.app')

@section('content')
    @include('partials.commons.post-title')

    <div id="portfolio-page-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell large-12">
                    <div class="portfolio-filter">
                        <a href="" data-filter=".catalog">קטלוגים</a>
                        <a href="" data-filter=".digital-marketing">שיווק דיגיטלי בסין</a>
                        <a href="" data-filter=".voice-over">דיבוב לסינית</a>
                        <a href="" data-filter=".projects">פרויקטים</a>
                        <a href="" data-filter=".website-design">אתרי אינטרנט</a>
                    </div>

                    <div class="portfolio-container grid-x grid-padding-x small-up-1 medium-up-4 large-up-4">
                        @include('partials.portfolio.catalog')
                        @include('partials.portfolio.digital-marketing')
                        @include('partials.portfolio.voice-over')
                        @include('partials.portfolio.projects')
                        @include('partials.portfolio.website-design')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
