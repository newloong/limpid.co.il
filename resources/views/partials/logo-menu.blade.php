<div id="logo-menu-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                @php wp_nav_menu(array('menu' => 'Main Menu')) @endphp
            </div>

            <div class="cell medium-4 large-4">
                <a href="{{ $site_url }}">
                    <img src="@asset('images/logo.png')">
                </a>
            </div>
        </div>
    </div>
</div>
