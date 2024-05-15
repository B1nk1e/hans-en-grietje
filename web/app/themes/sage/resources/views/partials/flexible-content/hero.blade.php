@php
    $background = $content['image'] ?? null;
    $subtitle = $content['subtitle'] ?? null;
    $title = $content['title'] ?? null;
    $text = $content['text'] ?? null;
    $button = $content['button'] ?? null;
    $video = $content['video'] ?? null;
@endphp

<section class="section section--hero {{ $video['video'] ? 'has-blocks' : '' }}">
    <div class="hero-inner">
        <figure class="hero-bg">
            @include('components.picture', ['imageID' => $background])
        </figure>

        <div class="hero-content" data-animate="fade-to-top">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xxl-6">
                        <div class="hero-intro">
                            @if ($subtitle)
                                <div class="subheader">{!! $subtitle !!}</div>
                            @endif

                            @if ($title)
                                <h1>{!! $title !!}</h1>
                            @endif

                            @if ($text)
                                <div class="hero-intro__text">{!! $text !!}</div>
                            @endif

                            @if ($button)
                                <div class="button-wrapper">
                                    @include('components.button', [
                                        'item' => $button,
                                        'class' => ' btn--rose',
                                    ])
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($video['video'])
        <div class="container-fluid container-fluid--hero">
            <div class="hero-cards">
                @include('components.card.hero', ['item' => $video])
            </div>
        </div>
    @endif
</section>

@if ($video['video'])
    <div class="popup-video" data-popup="{{ $video['video'] }}">
        <div class="video">
            <div class="btn btn--io btn--close-popup">
                <i class="icon-star"></i>
            </div>
            <video loading="lazy" controls playsinline>
                <source data-src="{{ wp_get_attachment_url($video['video']) }}">
            </video>
        </div>
    </div>
@endif
