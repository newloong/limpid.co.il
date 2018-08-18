<div id="footer-contact-form-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-10 large-10 large-centered">
                <div id="footer-contact-form-content-container">
                    <div id="footer-contact-form-header">
                        <h4>{!! get_field('main_t', 'options') !!}</h4>
                        <p>{!! get_field('middle_p', 'options') !!}</p>
                    </div>

                    <div id="footer-contact-form-content">
                        {!! do_shortcode('[contact-form-7 id="4" title="טופס דף הבית"]') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
