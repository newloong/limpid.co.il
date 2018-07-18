<div id="services-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h2>השירותים שלנו</h2>
            </div>

            <div id="services" class="grid-x grid-padding-x small-up-1 medium-up-4 large-up-4">
                @while($services->have_posts()) @php($services->the_post())
                    <div class="cell">
                        <img src="{{ get_the_post_thumbnail_url() }}">
                        <h4>{{ get_the_title() }}</h4>
                        <p>{{ get_the_excerpt() }}</p>
                        <a href="{{ get_permalink() }}" class="button">קרא עוד</a>
                    </div>
                @endwhile @php(wp_reset_postdata())
            </div>
        </div>
    </div>
</div>
