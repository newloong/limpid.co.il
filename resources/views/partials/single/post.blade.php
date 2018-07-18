<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell medium-7 large-7 medium-offset-1 large-offset-1">
            @while(have_posts()) @php the_post() @endphp
                <h1>{!! get_the_title() !!}</h1>
                {!! get_the_content() !!}
            @endwhile @php(wp_reset_postdata())
        </div>

        <div class="cell medium-4 large-4">
            <div id="sidebar-container">
                <div id="related-posts">
                    <h4>עבודות נוספות בנושא:</h4>

                    <ul>
                        @while($related_posts->have_posts()) @php($related_posts->the_post())
                            <li>
                                <h5>
                                    <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
                                </h5>

                                <span>{{ get_the_date('M d, Y') }}</span>
                            </li>
                        @endwhile @php(wp_reset_postdata())
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
