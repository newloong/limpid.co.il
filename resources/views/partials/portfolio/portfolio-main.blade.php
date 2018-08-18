<div id="portfolio-page-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            @php
                $queried_object = get_queried_object();
                $term_id = $queried_object->term_id;
                $terms = get_terms(array('parent'=> 1, 'taxonomy' => 'category'));
            @endphp


            <div class="cell large-12">
                <div class="portfolio-filter">
                    @foreach ($terms as $term)
                        @if ($term_id == $term->term_id)
                            <a href="{{ get_category_link($term) }}" class="current">
                        @else
                            <a href="{{ get_category_link($term) }}">
                        @endif
                            {{ $term->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="portfolio-container grid-x grid-padding-x small-up-1 medium-up-3 large-up-4">
                @while(have_posts())  @php(the_post())
                    @php($params = array( 'width' => 300, 'height' => 150 ))
                    @php($thumbnail = get_the_post_thumbnail_url())

                    <div class="cell">
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
