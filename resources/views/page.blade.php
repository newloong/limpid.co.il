@extends('layouts.app')

@section('content')
    @while(have_posts()) : @php(the_post())
        {{ the_title() }}
    @endwhile
@endsection
