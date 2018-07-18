<div class="cell large-12">
    <div class="article-section">
        <h2>{{ get_field('video-t') }}</h2>

        <div class="grid-x grid-padding-x small-up-1 medium-up-3 large-up-3">
            @foreach ($videos as $video)
                <div class="video cell">
                    {!! $video['video'] !!}
                    <h4>{!! $video['video-t'] !!}</h4>
                </div>
            @endforeach
        </div>
    </div>
</div>
