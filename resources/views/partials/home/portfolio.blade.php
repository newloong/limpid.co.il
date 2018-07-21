<div id="portfolio-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h2>העבודה שלנו</h2>

                <div class="portfolio-filter">
                    @foreach ($projects as $project)
                        <a href="#" data-filter=".{{ str_replace(' ', '-', $project['title']) }}">
                            {{ $project['title'] }}
                        </a>
                    @endforeach
                </div>

                <div class="portfolio-container grid-x grid-padding-x small-up-1 medium-up-4 large-up-4">
                    @foreach ($projects as $project)
                        @php($works = $project['project'])
                        @php($className = str_replace(' ', '-', $project['title']))

                        @foreach ($works as $work)
                            @php($workID = $work->ID)
                            @php($params = array( 'width' => 300, 'height' => 150 ))
                            @php($thumbnail = get_the_post_thumbnail_url($workID))

                            <div class="{{ $className }} cell">
                                <a href="{{ get_the_permalink($workID) }}">
                                    @if ($thumbnail)
                                        <img src="{{ bfi_thumb($thumbnail, $params) }}">
                                    @else
                                        <img src="http://via.placeholder.com/300x150?text=thumbnail">
                                    @endif

                                    <div class="portfolio-content-container">
                                        <div class="portfolio-content">
                                            <h4>{!! get_the_title($workID) !!}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
