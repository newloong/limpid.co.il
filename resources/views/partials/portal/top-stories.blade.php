<div id="top-stories-container">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell medium-6 large-6">
                <div class="top-story">
                    @php($params = array( 'width' => 585, 'height' => 454 ))
                    @php($thumbnail = get_the_post_thumbnail_url($featured_articles[0]))

                    <a href="{{ get_the_permalink($featured_articles[0]) }}">
                        <h4>{!! get_the_title($featured_articles[0]) !!}</h4>
                        <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="">
                    </a>
                </div>
            </div>

            <div class="cell medium-6 large-6">
                <div class="row">
                    <div class="top-story">
                        @php($params = array( 'width' => 585, 'height' => 225 ))
                        @php($thumbnail = get_the_post_thumbnail_url($featured_articles[1]))

                        <a href="{{ get_the_permalink($featured_articles[1]) }}">
                            <h4>{!! get_the_title($featured_articles[1]) !!}</h4>
                            <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="grid-x">
                        <div class="cell medium-6 large-6">
                            <div class="top-story">
                                @php($params = array( 'width' => 292.5, 'height' => 225 ))
                                @php($thumbnail = get_the_post_thumbnail_url($featured_articles[2]))

                                <a href="{{ get_the_permalink($featured_articles[2]) }}">
                                    <h4>{!! get_the_title($featured_articles[2]) !!}</h4>
                                    <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="cell medium-6 large-6">
                            <div class="top-story">
                                @php($params = array( 'width' => 292.5, 'height' => 225 ))
                                @php($thumbnail = get_the_post_thumbnail_url($featured_articles[3]))

                                <a href="{{ get_the_permalink($featured_articles[3]) }}">
                                    <h4>{!! get_the_title($featured_articles[3]) !!}</h4>
                                    <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
