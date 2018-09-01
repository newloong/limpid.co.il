{{--
    Template Name: Events
--}}

@extends('layouts.app')

@section('content')
    @include('partials.commons.post-title')

    <div id="event-page-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell large-12">
                    @php echo do_shortcode('[events_list]') @endphp
                </div>
            </div>
        </div>
    </div>

@endsection
