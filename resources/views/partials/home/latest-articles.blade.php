<div id="latest-articles-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h2>פורטל עסקים בסין<br>מיטב החדשות האחרונות בנושאי כלכלה ואינטרנט בסין, מומחי סין כותבים</h2>
                <div class="divider white">
                    <span>
                        <img class="svg" src="@asset('images/svg/downarrow.svg')">
                    </span>
                </div>
            </div>

            <div id="articles" class="grid-x grid-padding-x small-up-1 medium-up-3 large-up-3">
                @foreach ($latest_articles as $latestArticle)
                    @php($post = $latestArticle['recent_post'])
                    @php($postID = $post->ID)

                    @php($params = array( 'width' => 380, 'height' => 200 ))
                    @php($thumbnail = get_the_post_thumbnail_url($postID))

                    <div class="cell">
                        <div class="article">
                            <a href="{{ get_the_permalink($postID) }}">
                                <img src="{{ bfi_thumb($thumbnail, $params) }}">

                                <div class="article-content">
                                    <h4>{!! get_the_title($postID) !!}</h4>
                                    <p>{!! trunc($post->post_content, 10) !!}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
