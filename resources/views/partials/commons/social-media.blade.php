<ul class="social-media clearfix">
    @foreach (get_field('socials', 'options') as $social)
        <li>
            <a href="{{ $social['link'] }}">
                <span style="background:url({{ $social['icon'] }}); mask-image: url({{ $social['icon'] }}); -webkit-mask-image: url({{ $social['icon'] }});"></span>
            </a>
        </li>
    @endforeach
</ul>
