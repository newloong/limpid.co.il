<div id="newsletter-container">
    <img src="@asset('images/man.png')" alt="">

    <div class="grid-x padding-x">
        <div class="cell mediu-8 large-8">
            <h3>{!! the_field('conttit') !!}</h3>
            @php echo do_shortcode('[contact-form-7 id="465" title="פורטל"]') @endphp
        </div>

        <div class="cell medium-4 large-4"></div>
    </div>
</div>

<div id="social-media-container">
    <h3>ערוצי המדיה שלנו</h3>
    @include('partials.commons.social-media')
</div>