@php
    $subtitle = $content['subtitle'] ?? null;
    $title = $content['title'] ?? null;
    $text = $content['text'] ?? null;
    $button = $content['button'] ?? null;
    $image = $content['image'] ?? null;
    $arrangements = $content['arrangements'] ?? null;
    $buttonBottom = $content['button_bottom'] ?? null;

    if (!$arrangements) {
        $query = new WP_Query([
            'post_type' => 'arrangements',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => 99999,
        ]);
        $arrangements = wp_list_pluck($query->posts, 'ID');
    }
@endphp

@if ($arrangements)
    <section class="section section--hero-arrangements">
        <div class="hero-top">
            @if ($image)
                <div class="hero-figure">
                    @include('components.picture', ['imageID' => $image])
                </div>
            @endif

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xxl-6">
                        <div class="hero-intro">
                            @if ($subtitle)
                                <div class="hero-subtitle">{!! $subtitle !!}</div>
                            @endif

                            @if ($title)
                                <h1 class="hero-subtitle">{!! $title !!}</h1>
                            @endif

                            @if ($text)
                                <div class="hero-text">{!! $text !!}</div>
                            @endif

                            @if ($button)
                                <div class="button-wrapper">
                                    @include('components.button', [
                                        'item' => $button,
                                        'class' => 'btn--rose',
                                    ])
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="arrangements-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="arrangements">
                            @foreach ($arrangements as $arrangement)
                                @include('components.card.arrangement', ['item' => $arrangement])
                            @endforeach
                        </div>

                        @if ($buttonBottom)
                            <div class="button-wrapper">
                                @include('components.button', [
                                    'item' => $buttonBottom,
                                    'class' => 'btn--rose',
                                ])
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
