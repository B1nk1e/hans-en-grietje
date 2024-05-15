@php
    $title = $content['title'] ?? null;
    $text = $content['text'] ?? null;
    $button = $content['button'] ?? null;
    $arrangements = $content['arrangements'] ?? null;

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
    <section class="section section--arrangements" data-animate="fade-to-top">
        <div class="container-fluid">
            @if ($title || $text)
                <div class="arrangements-intro">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xxl-6 col-fhd-4">
                            @if ($title)
                                <h2>{!! $title !!}</h2>
                            @endif

                            @if ($text)
                                <div class="arrangements-intro__text">{!! $text !!}</div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="arrangements">
                        @foreach ($arrangements as $arrangement)
                            @include('components.card.arrangement', ['item' => $arrangement])
                        @endforeach
                    </div>

                    @if ($button)
                        <div class="button-wrapper">
                            @include('components.button', ['item' => $button, 'class' => 'btn--rose'])
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
