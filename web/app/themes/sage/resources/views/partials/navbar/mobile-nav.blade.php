@php
    $facebook = get_field('facebook', 'options');
    $instagram = get_field('instragram', 'options');
    $youtube = get_field('youtube', 'options');
    $linkedin = get_field('linkedin', 'options');

    $navbarBtn = get_field('nav_button', 'options');
@endphp

<div class="mobile-nav">
    <div class="mobile-nav__top">
        <div class="container-fluid">
            @includeWhen(has_nav_menu('primary_navigation'), 'partials.navbar.navigation')

            <div class="service-nav">
                <ul>
                    @foreach (App\custom_menu_object('secondary_navigation') as $item)
                        <li role="none" class="service-item">
                            @include('partials.navbar.item')
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


    <div class="mobile-nav__bottom">
        @if ($navbarBtn)
            <div class="mobile-nav__button">
                <div class="container">
                    <a href="{{ $navbarBtn['url'] }}" class="btn"
                        target="{{ $navbarBtn['target'] ? $navbarBtn['target'] : '_self' }}"
                        title="{{ $navbarBtn['title'] }}">{{ $navbarBtn['title'] }}</a>
                </div>
            </div>
        @endif

        <div class="container">
            <div class="mobile-nav__bottom-inner">
                {{-- @include('components.language-switch') --}}

                <div class="mobile-nav__social">
                    @if ($facebook)
                        <a href="{{ $facebook }}" class="btn btn--io btn--social" title="Facebook">
                            <i class="icon-facebook-f"></i>
                        </a>
                    @endif

                    @if ($instagram)
                        <a href="{{ $instagram }}" class="btn btn--io btn--social" title="Instragram">
                            <i class="icon-instagram"></i>
                        </a>
                    @endif

                    @if ($youtube)
                        <a href="{{ $youtube }}" class="btn btn--io btn--social" title="YouTube">
                            <i class="icon-youtube"></i>
                        </a>
                    @endif

                    @if ($linkedin)
                        <a href="{{ $linkedin }}" class="btn btn--io btn--social" title="Linkedin">
                            <i class="icon-linkedin"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
