<div class="title-container">
    <h4>Video לימפיד</h4>
</div>


@foreach ($videos as $video)
    <div class="item">
        {!! $video['video'] !!}
        <h3>{!! $video['video-t'] !!}</h3>
    </div>
@endforeach
