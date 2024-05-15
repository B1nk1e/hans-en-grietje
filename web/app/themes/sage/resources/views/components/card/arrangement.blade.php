@php
    if (!isset($class)) {
        $class = '';
    }

    $image = get_post_thumbnail_id($item);
@endphp

@if ($image)
    <div class="card card--arrangement {{ $class }}">
        <a href="{{ get_permalink($item) }}" class="card-anchor"></a>

        <figure class="card-figure">
            @include('components.picture', ['imageID' => $image])
        </figure>

        <div class="card-content">
            <div class="card-title h3">{!! get_the_title($item) !!}</div>
            <div class="card-text">{{ __('More information', 'sage') }}</div>
        </div>
    </div>
@endif
