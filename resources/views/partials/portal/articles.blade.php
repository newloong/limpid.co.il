@foreach ($portals as $portal)
    @php($title = $portal['title'])
    @php($articles = $portal['display'])

    <div class="cell large-12">
        <div class="article-section">
            <h2>{{ $title }}</h2>

            <div class="portfolio-container grid-x grid-padding-x small-up-1 medium-up-4 large-up-4">
                @foreach ($articles as $article)
                    @php($articleID = $article->ID)
                    @php($params = array( 'width' => 300, 'height' => 150 ))
                    @php($thumbnail = get_the_post_thumbnail_url($articleID))

                    <div class="article cell">
                        <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="">
                        <h4>{!! get_the_title($articleID) !!}</h4>
                        <p>{!! trunc($article->post_content, 10) !!}</p>
                        <a href="{{ get_the_permalink($articleID) }}" class="button">קרא עוד</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach
