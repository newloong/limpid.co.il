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
                        @foreach ($categories as $category)
                            <a href="" data-filter=".{{ $category['slug'] }}">{{ $category['name'] }}</a>
                        @endforeach
                    </div>
                    <div class="portfolio-container grid-x grid-padding-x small-up-1 medium-up-4 large-up-4">
                        @while($projects->have_posts()) @php($projects->the_post())
                            @php($params = array( 'width' => 300, 'height' => 150 ))
                            @php($thumbnail = get_the_post_thumbnail_url())

                            <div class="{{ categories(get_the_ID()) }} cell">
                                <a href="{{ get_permalink() }}">
                                    @if ($thumbnail)
                                        <img src="{{ bfi_thumb($thumbnail, $params) }}">
                                    @else
                                        <img src="http://via.placeholder.com/300x150?text=thumbnail">
                                    @endif

                                    <div class="portfolio-content-container">
                                        <div class="portfolio-content">
                                            <h4>{!! get_the_title() !!}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endwhile @php(wp_reset_postdata())
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
