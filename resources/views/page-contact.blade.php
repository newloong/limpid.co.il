{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
    @include('partials.commons.post-title')

    <div id="contact-us-page-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell large-12">
                    <h1>צור קשר</h1>

                    <div id="contact-details">
                        <span>לימפיד | שירותי תרגום ואינטרנט בסין:</span> Billion Centre,  Hong Kong <br>
                        <span>התקשרו:</span> 072-2124401 <br>
                        <span>מייל:</span> service@limpid-translations.com
                    </div>

                    <div id="contact-us-content-container" class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-2">
                        <div class="cell">
                            @php echo do_shortcode('[contact-form-7 id="415" title="contact_us"]') @endphp
                        </div>

                        <div class="cell">
                            <div class="acf-map">
                                <div class="marker" data-lat="{{ $map['lat'] }}" data-lng="{{ $map['lng'] }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
