<div id="contact-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-6 large-6">
                @php echo do_shortcode('[contact-form-7 id="415" title="contact_us"]') @endphp
            </div>

            <div class="cell medium-6 large-6">
                <div class="acf-map" style="height: 542px;">
                    <div class="marker" data-lat="{{ $map['lat'] }}" data-lng="{{ $map['lng'] }}"></div>
                </div>
            </div>
        </div>
    </div>
</div>
