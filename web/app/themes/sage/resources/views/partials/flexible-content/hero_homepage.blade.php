@php
    $background = $content['background'] ?? null;
    $title = $content['title'] ?? null;
    $button = $content['button'] ?? null;
    $blocks = $content['blocks'] ?? null;

    $facebook = get_field('facebook', 'options') ?? null;
    $instagram = get_field('instgram', 'options') ?? null;
    $youtube = get_field('youtube', 'options') ?? null;
@endphp

<section class="section section--hero section--hero--homepage {{ $blocks ? 'has-blocks' : '' }}">
    <div class="hero-inner">
        <figure class="hero-bg">
            @include('components.picture', ['imageID' => $background])
        </figure>

        <div class="hero-content" data-animate="fade-to-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-5 col-xxl-4">
                        <div class="hero-intro">
                            @if ($title)
                                <h1>{!! $title !!}</h1>
                            @endif

                            @if ($button)
                                <div class="button-wrapper">
                                    @include('components.button', [
                                        'item' => $button,
                                        'class' => ' btn--blur',
                                    ])
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-7 col-xxl-8">
                        <div class="hero-social">
                            @if ($facebook)
                                <a href="{!! $facebook !!}" class="btn btn--io btn--blur" target="_blank">
                                    <i class="icon-star"></i>
                                </a>
                            @endif

                            @if ($instagram)
                                <a href="{!! $instagram !!}" class="btn btn--io btn--blur" target="_blank">
                                    <i class="icon-star"></i>
                                </a>
                            @endif

                            @if ($youtube)
                                <a href="{!! $youtube !!}" class="btn btn--io btn--blur" target="_blank">
                                    <i class="icon-star"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($blocks)
        <div class="container-fluid container-fluid--hero">
            <div class="hero-cards">
                @foreach ($blocks as $block)
                    @include('components.card.hero', ['item' => $block])
                @endforeach
            </div>
        </div>
    @endif
</section>

@foreach ($blocks as $block)
    @if ($block['video'])
        <div class="popup-video" data-popup="{{ $block['video'] }}">
            <div class="video">
                <div class="btn btn--io btn--close-popup">
                    <i class="icon-star"></i>
                </div>
                <video loading="lazy" controls playsinline>
                    <source data-src="{{ wp_get_attachment_url($block['video']) }}">
                </video>
            </div>
        </div>
    @endif
@endforeach
