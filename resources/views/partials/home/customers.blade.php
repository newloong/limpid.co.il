<div id="customers-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h2>הלקוחות שלנו</h2>

                <div id="customers" class="owl-carousel owl-theme">
                    @while($customers->have_posts()) @php($customers->the_post())
                        <div class="item">
                            <img src="{{ get_the_post_thumbnail_url() }}">
                        </div>
                    @endwhile @php(wp_reset_postdata())
                </div>
            </div>
        </div>
    </div>
</div>
