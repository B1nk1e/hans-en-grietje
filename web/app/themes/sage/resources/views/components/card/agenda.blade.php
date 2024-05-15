@php
    $image = get_post_thumbnail_id($item) ?? null;
    $date = get_field('date', $item) ?? null;
    $start = get_field('start', $item) ?? null;
    $end = get_field('end', $item) ?? null;
    $price = get_field('price', $item) ?? null;
    $address = get_field('address', $item) ?? null;
    $text = strip_tags(get_post_field('post_content', $item)) ?? null;

    if ($text) {
        $text = strlen($text) > 130 ? substr($text, 0, 130) . '...' : $text;
    }
@endphp

<div class="card card--agenda">
    <a href="{{ get_permalink($item) }}" class="card-anchor"></a>

    <div class="card-content">
        <div class="card-top">
            @if ($date)
                <div class="card-date subheader">{!! $date !!} {{ $start || $end ? '·' : '' }}
                    {!! $start !!}{{ $start || $end ? ' - ' : '' }}{!! $end !!}</div>
            @endif
            <div class="card-title">{!! get_the_title($item) !!}{{ $price ? ' - €' . $price : '' }}</div>
            @if ($address)
                <div class="card-address subheader">{!! $address !!}</div>
            @endif
        </div>

        @if ($text)
            <div class="card-text">{!! $text !!}</div>
        @endif
    </div>

    @if ($image)
        <figure class="card-figure">
            @include('components.picture', ['imageID' => $image])
        </figure>
    @endif
</div>
