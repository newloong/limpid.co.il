@foreach ($portals as $portal)
    @php($title = $portal['title'])
    @php($articles = $portal['display'])

    <div class="article-section">
        <div class="title-container">
            <h3>{{ $title }}</h3>
        </div>

        <div class="portal-article owl-carousel owl-theme">
            @foreach ($articles as $article)
                @php($articleID = $article->ID)
                @php($params = array( 'width' => 400, 'height' => 250 ))
                @php($thumbnail = get_the_post_thumbnail_url($articleID))

                <div class="item">
                    <a href="{{ get_the_permalink($articleID) }}">
                        @if ($thumbnail)
                            <img src="{{ bfi_thumb($thumbnail, $params) }}" alt="">
                        @else
                            <img src="http://via.placeholder.com/400x250?text=thumbnail" alt="">
                        @endif

                        <h4>{!! get_the_title($articleID) !!}</h4>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endforeach
