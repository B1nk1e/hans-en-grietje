@php
    $version = $item['version'] ?? null;
    $image = $item['image'] ?? null;
    $video = $item['video'] ?? null;
    $title = $item['title'] ?? null;
    $text = $item['text'] ?? null;
    $link = $item['link'] ?? null;
@endphp

@if ($image)
    <div class="card card--hero">
        @if ($link && $link['url'])
            <a href="{!! $link['url'] !!}" class="card-anchor"></a>
        @endif

        <figure class="card-figure">
            @include('components.picture', ['imageID' => $image])
        </figure>

        @if ($video)
            <div class="card-video" data-id="{{ $video }}">
                <button class="btn btn--io btn--blur">
                    <i class="icon-star"></i>
                </button>

                @if ($title)
                    <div class="card-title h3">{!! $title !!}</div>
                @endif

                @if ($text)
                    <div class="card-text">{!! $text !!}</div>
                @endif
            </div>
        @else
            <div class="card-content">
                @if ($title)
                    <div class="card-title h3">{!! $title !!}</div>
                @endif

                @if ($text)
                    <div class="card-text">{!! $text !!}</div>
                @endif
            </div>
        @endif
    </div>
@endif
