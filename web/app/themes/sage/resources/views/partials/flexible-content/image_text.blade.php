@php
    $subtitle = $content['subtitle'] ?? null;
    $title = $content['title'] ?? null;
    $button = $content['button'] ?? null;
    $text = $content['text'] ?? null;
    $image = $content['image'] ?? null;
@endphp

@if ($image)
    <section class="section section--image-text" data-animate="fade-to-top">
        <div class="image-text__web d-none d-md-block">
            <div class="image-text__web--web">
                @include('assets.web')
            </div>

            <div class="image-text__web--spider">
                @include('assets.spider')
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4 offset-lg-2">
                    @if ($image)
                        <figure class="image-text__figure">
                            @include('components.picture', ['imageID' => $image])
                        </figure>
                    @endif
                </div>

                <div class="col-12 col-md-7 offset-md-1 col-lg-4">
                    <div class="image-text__content">
                        @if ($subtitle)
                            <div class="subheader">{!! $subtitle !!}</div>
                        @endif

                        @if ($title)
                            <h2>{!! $title !!}</h2>
                        @endif

                        @if ($text)
                            <div class="image-text__text">{!! $text !!}</div>
                        @endif

                        @if ($button)
                            <div class="image-text__btn">
                                @include('components.button', ['item' => $button])
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
