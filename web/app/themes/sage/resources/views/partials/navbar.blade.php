@php
    $logo = get_field('logo', 'options');
    $top = get_field('navbar_top', 'options');
    $navbarBtn = get_field('navbar_button', 'options');
@endphp

<nav class="navbar">
    <div class="container-fluid">
        @if ($top)
            <div class="navbar-top">
                {!! $top !!}
            </div>
        @endif

        <div class="navbar-holder">
            @if ($logo)
                <a class="navbar-brand" href="{{ home_url('/') }}">
                    <figure>
                        @include('components.picture', ['imageID' => $logo['id']])
                    </figure>
                </a>
            @endif

            @includeWhen(has_nav_menu('primary_navigation'), 'partials.navbar.navigation')

            <div class="navbar-right">
                @includeWhen(has_nav_menu('secondary_navigation'), 'partials.navbar.secondary-navigation')

                @if ($navbarBtn)
                    <div class="navbar-btn">
                        @include('components.button', ['item' => $navbarBtn, 'class' => 'btn--rose'])
                    </div>
                @endif

                <div class="navbar-toggler d-xl-none">
                    <div class="navbar-toggler__inner">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.navbar.mobile-nav')
</nav>
