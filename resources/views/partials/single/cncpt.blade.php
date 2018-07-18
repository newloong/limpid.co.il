<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell large-12">
            @while(have_posts()) @php the_post() @endphp
                <h1>{!! get_the_title() !!}</h1>
                {!! get_the_content() !!}
            @endwhile
        </div>
    </div>
</div>

@include('partials.commons.services')
@include('partials.commons.testimonials')
@include('partials.commons.contact')
