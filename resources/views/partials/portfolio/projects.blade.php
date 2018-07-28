@foreach (get_field('projects') as $id)
    @php($params = array( 'width' => 300, 'height' => 150 ))
    @php($thumbnail = get_the_post_thumbnail_url($id))

    <div class="projects cell">
        <a href="{{ get_the_permalink($id) }}">
            @if ($thumbnail)
                <img src="{{ bfi_thumb($thumbnail, $params) }}">
            @else
                <img src="http://via.placeholder.com/300x150?text=thumbnail">
            @endif

            <div class="portfolio-content-container">
                <div class="portfolio-content">
                    <h4>{!! get_the_title($id) !!}</h4>
                </div>
            </div>
        </a>
    </div>
@endforeach
