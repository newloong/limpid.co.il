@extends('layouts.app')

@section('content')
    <div id="single-page-container">
        @include('partials.commons.post-title')

        <div id="single-page-content-container">
            @include('partials.single.'.get_post_type())
        </div>
    </div>
@endsection
