@php
    $title = $block['title'] ?? null;
    $text = $block['text'] ?? null;
    $link = $block['link'] ?? null;
    $image = $block['image'] ?? null;
@endphp

<div class="card card--block">
    @if ($link)
        <a href="{{ $link['url'] }}" class="card-anchor"></a>
    @endif

    @if ($image)
        <figure class="card-figure">
            @include('components.picture', ['imageID' => $image])
        </figure>
    @endif

    <div class="card-content">
        @if ($title)
            <div class="card-title h2">{!! $title !!}</div>
        @endif

        @if ($text)
            <div class="card-text">{!! $text !!}</div>
        @endif

        @if ($link)
            <button class="btn">{!! $link['title'] !!}</button>
        @endif
    </div>
</div>
