@foreach ($portals as $portal)
    @php($title = $portal['title'])
    @php($articles = $portal['display'])

    <div class="cell large-12">
        <div class="article-section">
            <h2>{{ $title }}</h2>

            <div class="portfolio-container grid-x grid-padding-x small-up-1 medium-up-3 large-up-3">
                @foreach ($articles as $article)
                    @php($articleID = $article->ID)
                    @php($params = array( 'width' => 400, 'height' => 250 ))
                    @php($thumbnail = get_the_post_thumbnail_url($articleID))

                    <div class="article cell">
                        <a href="{{ get_the_permalink($articleID) }}">
                            @if ($thumbnail)
                                <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="">
                            @else
                                <img src="http://via.placeholder.com/400x250?text=thumbnail" alt="">
                            @endif

                            <h4>{!! get_the_title($articleID) !!}</h4>
                            <p>{!! trunc($article->post_content, 10) !!}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach
