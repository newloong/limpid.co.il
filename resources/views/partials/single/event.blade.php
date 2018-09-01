<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell large-12">
            @while(have_posts()) @php the_post() @endphp
                <h1>{!! get_the_title() !!}</h1>
                {!! get_the_content() !!}
            @endwhile @php(wp_reset_postdata())
        </div>

        <div class="cell large-12">
                <div id="related-posts">
                    <h2>עבודות נוספות בנושא</h2>

                    <div class="divider">
                        <span>
                            <img src="@asset('images/svg/downarrow.svg')">
                        </span>
                    </div>

                    <div class="grid-x grid-padding-x small-up-1 medium-up-4 large-up-4">
                        @while($related_posts->have_posts()) @php($related_posts->the_post())
                            @php($params = array( 'width' => 300, 'height' => 150 ))
                            @php($thumbnail = get_the_post_thumbnail_url())

                            <div class="article cell">
                                <img src="{{ bfi_thumb($thumbnail, $params) }}">

                                <h5>
                                    <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
                                </h5>
                            </div>
                        @endwhile @php(wp_reset_postdata())
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
