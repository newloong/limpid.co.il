<div id="testimonials-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h2>לקוחות מספרים</h2>

                <div id="testimonials" dir="rtl">
                    <ul>
                        @while($testimonials->have_posts()) @php($testimonials->the_post())
                            <li>
                                <h4>{!! get_the_title() !!}</h4>
                                <span>{!! get_field('company') !!}</span>
                                <p>{!! get_field('recommendation') !!}</p>
                            </li>
                        @endwhile @php(wp_reset_postdata())
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
