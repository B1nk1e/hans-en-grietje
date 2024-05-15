@php
    $blocks = $content['info_blocks'] ?? null;
@endphp

@if ($blocks)
    <section class="section section--info-blocks">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="info-blocks">
                        @foreach ($blocks as $key => $block)
                            @php
                                $title = $block['title'] ?? null;
                                $text = $block['text'] ?? null;
                                $image = $block['image'] ?? null;
                            @endphp

                            <div class="info-block {{ $key % 2 == 0 ? 'odd' : 'even' }}" data-animate="fade-to-top">
                                @if ($title || $text)
                                    <div class="info-block__content">
                                        @if ($key % 2 == 0)
                                            <div class="info-block__candy" data-animate="parallax"
                                                data-animate-speed="2.5">
                                                @include('assets.candy')
                                            </div>
                                        @else
                                            <div class="info-block__cane" data-animate="parallax"
                                                data-animate-speed="2.5">
                                                @include('assets.cane')
                                            </div>
                                        @endif

                                        <div class="info-block__inner">
                                            @if ($title)
                                                <div class="info-block__title h5">{!! $title !!}</div>
                                            @endif

                                            @if ($text)
                                                <div class="info-block__text">{!! $text !!}</div>
                                            @endif
                                        </div>
                                    </div>

                                    @if ($image)
                                        <figure class="info-block__figure">
                                            <div class="info-block__candy" data-animate="parallax"
                                                data-animate-speed="-2.5">
                                                @include('assets.candy')
                                            </div>

                                            @include('components.picture', ['imageID' => $image])
                                        </figure>
                                    @endif
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
