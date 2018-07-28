<div id="featured-article-container" class="owl-carousel owl-theme">
    @foreach ($featured_articles as $articleID)
        @php($params = array( 'width' => 374, 'height' => 250 ))
        @php($thumbnail = get_the_post_thumbnail_url($articleID))

        <div class="item">
            <a href="{{ get_the_permalink($articleID) }}">
                <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="">
                <h4>{!! get_the_title($articleID) !!}</h4>
            </a>
        </div>
    @endforeach
</div>
