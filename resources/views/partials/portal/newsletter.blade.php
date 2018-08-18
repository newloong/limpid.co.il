<div id="newsletter-container" class="sidebar">
    <div class="grid-x padding-x">
        <div class="cell medium-12 large-12">
            <h3>{!! the_field('conttit') !!}</h3>
            @php echo do_shortcode('[contact-form-7 id="465" title="פורטל"]') @endphp
        </div>
    </div>
</div>

<div id="social-media-container">
    <h3>ערוצי המדיה שלנו</h3>
    @include('partials.commons.social-media')
</div>
