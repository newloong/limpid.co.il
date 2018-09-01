@foreach ($portals as $portal)
    @php($title = $portal['title'])
    @php($articles = $portal['display'])

    <div class="article-section">
        <div class="title-container">
            <h3>{{ $title }}</h3>
        </div>

        @php($counter = 1)
        <div class="portal-article-container grid-x grid-padding-x small-up-1 medium-up-2 large-up-3">
            @foreach ($articles as $article)
                @if ($counter <= 9)
                    <div class="cell">
                        @php($articleID = $article->ID)
                        @php($params = array( 'width' => 400, 'height' => 250 ))
                        @php($thumbnail = get_the_post_thumbnail_url($articleID))

                        <a href="{{ get_the_permalink($articleID) }}">
                            @if ($thumbnail)
                                <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="">
                            @else
                                <img src="http://via.placeholder.com/400x250?text=thumbnail" alt="">
                            @endif

                            <h4>{!! get_the_title($articleID) !!}</h4>
                        </a>
                    </div>

                    @php($counter++)
                @endif
            @endforeach
        </div>
    </div>
@endforeach
