<div id="footer-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12 large-4">
                <p>
                    לימפיד | שירותי תרגום ואינטרנט בסין: Billion<br>Centre, Hong Kong <br>
                    התקשרו: 072-2124401 <br>
                    מייל: service@limpid-translations.com
                </p>
                @include('partials.commons.social-media')
            </div>

            <div class="cell medium-12 large-8">
               @php wp_nav_menu(array('menu' => 'footer-nav')) @endphp
            </div>
        </div>
    </div>
</div>

<div id="copyright-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <span>Copyright © 2018 Limpid Translations</span>
            </div>
        </div>
    </div>
</div>
