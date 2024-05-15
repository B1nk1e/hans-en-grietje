@php
    $blocks = $content['blocks'] ?? null;
@endphp

@if ($blocks)
    <section class="section section--block-slider" data-animate="fade-to-top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-md-10 col-lg-9 col-xxl-8">
                    <div class="block-slider__nav">
                        <span class="block-slider__current">1</span>
                        <span class="block-slider__line">
                            <span></span>
                        </span>
                        <span class="block-slider__count">{!! count($blocks) !!}</span>
                    </div>

                    <div class="block-slider">
                        @foreach ($blocks as $block)
                            @include('components.card.block', ['block' => $block])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
