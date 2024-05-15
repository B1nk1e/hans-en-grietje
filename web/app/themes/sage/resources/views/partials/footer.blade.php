@php
    $address = get_field('address', 'options') ?? null;
    $postalcode = get_field('postalcode', 'options') ?? null;
    $town = get_field('town', 'options') ?? null;
    $phone = get_field('phone', 'options') ?? null;
    $email = get_field('email', 'options') ?? null;

    $reviewScore = get_field('review_score', 'options') ?? null;
    $reviewCount = get_field('review_count', 'options') ?? null;
@endphp

<footer class="footer">
    <div class="footer-top">
        <div class="container-fluid">
            <div class="footer-container">
                @if (App\custom_menu_object('quick_navigation'))
                    <div class="footer-block">
                        <div class="footer-title">{{ __('Quick menu', 'sage') }}</div>

                        <div class="footer-nav footer-nav--big">
                            @foreach (App\custom_menu_object('quick_navigation') as $item)
                                @include('partials.navbar.item')
                            @endforeach
                        </div>
                    </div>
                @endif

                @if (App\custom_menu_object('copyright_navigation'))
                    <div class="footer-block">
                        @include('partials.navbar.footer-item')
                    </div>
                @endif

                <div class="footer-block">
                    <div class="footer-title">{{ __('Contact', 'sage') }}</div>

                    <div class="footer-contact">
                        <div>
                            @if ($address)
                                <div>{!! $address !!}</div>
                            @endif
                            @if ($postalcode || $town)
                                <div>{!! $postalcode !!} {!! $town !!}</div>
                            @endif
                        </div>
                        <div>
                            @if ($phone)
                                <div>
                                    <a href="tel:{!! $phone !!}">T: {!! $phone !!}</a>
                                </div>
                            @endif

                            @if ($email)
                                <div>
                                    <a href="mailto:{!! $email !!}">E: {!! $email !!}</a>
                                </div>
                            @endif
                        </div>

                        @if ($address && $postalcode && $town)
                            <div>
                                <a href="https://www.google.com/maps/dir//{{ $address }},+{{ $postalcode }}+{{ $town }}/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x47c62e1ca2db9523:0xa6cd84775f025371?sa=X&ved=1t:707&ictx=111"
                                    class="btn btn--il" target="_blank">
                                    <i class="icon-star"></i>
                                    {!! __('Directions', 'sage') !!}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="footer-container">
                <div class="footer-copyright">
                    @if ($reviewScore)
                        @php
                            $fullStars = floor($reviewScore);
                            $halfStar = ceil($reviewScore - $fullStars);
                            $emptyStars = 5 - $fullStars - $halfStar;
                        @endphp

                        <div class="footer-stars">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $fullStars)
                                    <i class="icon-star"></i>
                                @elseif ($i == $fullStars + 1 && $halfStar == 1)
                                    <i class="icon-star-half"></i>
                                @else
                                    <i class="icon-star empty"></i>
                                @endif
                            @endfor
                        </div>
                    @endif

                    @if ($reviewCount)
                        <div>{!! $reviewCount !!} reviews</div>
                    @endif
                </div>

                @if (App\custom_menu_object('copyright_navigation'))
                    <div class="footer-copyright">
                        @foreach (App\custom_menu_object('copyright_navigation') as $item)
                            @include('partials.navbar.item')
                        @endforeach
                    </div>
                @endif

                <div class="footer-copyright">
                    <a href="https://enabldigital.com" class="footer-made" target="_blank">
                        <span>Website by:</span>
                        <svg width="33" height="17" viewBox="0 0 33 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.02803 0.00341797C3.59427 0.00341797 0 3.59769 0 8.03144C0 12.4652 3.59427 16.0595 8.02802 16.0595H24.8756C29.3093 16.0595 32.9036 12.4652 32.9036 8.03144C32.9036 3.59769 29.3093 0.00341797 24.8756 0.00341797H8.02803ZM24.9886 13.5719C27.9861 13.5719 30.416 11.142 30.416 8.14455C30.416 5.14708 27.9861 2.71715 24.9886 2.71715C21.9911 2.71715 19.5612 5.14708 19.5612 8.14455C19.5612 11.142 21.9911 13.5719 24.9886 13.5719Z"
                                fill="#1E1E1E" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
