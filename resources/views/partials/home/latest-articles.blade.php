<div id="latest-articles-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h2>פורטל עסקים בסין מיטב החדשות האחרונות בנושאי כלכלה ואינטרנט בסין, מומחי סין כותבים</h2>
            </div>

            <div id="articles" class="grid-x grid-padding-x small-up-1 medium-up-3 large-up-3">
                @while($latest_articles->have_posts()) @php($latest_articles->the_post())
                    <div class="cell">
                        <h4>{!! get_the_title() !!}</h4>
                        <p>{!! excerpt() !!}</p>
                        <a href="{{ get_permalink() }}" class="button">קרא עוד</a>
                    </div>
                @endwhile @php(wp_reset_postdata())
            </div>
        </div>
    </div>
</div>
