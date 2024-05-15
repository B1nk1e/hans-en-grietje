@php
    $banner = $content['banner_image'] ?? null;
    $video = $content['video_group'] ?? null;
@endphp

@if ($banner)
    <section class="section section--banner" data-animate="fade-to-top">
        <div class="container-fluid">
            <figure class="banner">
                @include('components.picture', ['imageID' => $banner])
            </figure>
        </div>

        @if ($video['video'])
            <div class="container-fluid container--banner">
                <div class="banner-card">
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
@endif
