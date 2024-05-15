@php
    $title = $content['title'] ?? null;

    $address = get_field('address', 'options') ?? null;
    $postalcode = get_field('postalcode', 'options') ?? null;
    $town = get_field('town', 'options') ?? null;

    $phone = get_field('phone', 'options') ?? null;
    $email = get_field('email', 'options') ?? null;

    $instagram = get_field('instagram', 'options') ?? null;
    $facebook = get_field('facebook', 'options') ?? null;
    $youtube = get_field('youtube', 'options') ?? null;
@endphp

<section class="section section--address" data-animate="fade-to-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xxl-8">
                @if ($title)
                    <h1>{!! $title !!}</h1>
                @endif

                <div class="row">
                    <div class="col-md-4">
                        <div class="subheader">{{ __('Location', 'sage') }}</div>

                        <div class="address-block">
                            @if ($address)
                                <div>{!! $address !!}</div>
                            @endif

                            @if ($postalcode || $town)
                                <div>{!! $postalcode !!} {!! $town !!}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="subheader">{{ __('Call or email us!', 'sage') }}</div>

                        <div class="address-block">
                            @if ($phone)
                                <a href="tel:{!! $phone !!}"
                                    title="{!! $phone !!}">{!! $phone !!}</a>
                            @endif

                            @if ($email)
                                <a href="mailto:{!! $email !!}"
                                    title="{!! $email !!}">{!! $email !!}</a>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="subheader">{{ __('Call or email us!', 'sage') }}</div>

                        <div class="address-block">
                            @if ($instagram)
                                <a href="{!! $instagram !!}" target="_blank"
                                    title="{!! $instagram !!}">{{ __('Instagram', 'sage') }}</a>
                            @endif

                            @if ($facebook)
                                <a href="{!! $facebook !!}" target="_blank"
                                    title="{!! $facebook !!}">{{ __('Facebook', 'sage') }}</a>
                            @endif

                            @if ($youtube)
                                <a href="{!! $youtube !!}" target="_blank"
                                    title="{!! $youtube !!}">{{ __('Youtube', 'sage') }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
