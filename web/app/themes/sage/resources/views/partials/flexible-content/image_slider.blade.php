@php
    $gallery = $content['gallery'] ?? null;
@endphp

<section class="section section--image-slider" data-animate="fade-to-top">
    <div class="container-fluid">
        <div class="image-slider__container">
            <div class="image-slider__cane" data-animate="parallax" data-animate-speed="2.5">
                @include('assets.cane')
            </div>

            <div class="image-slider__candy" data-animate="parallax" data-animate-speed="-2.5">
                @include('assets.candy')
            </div>
        </div>
        <div class="image-slider__wrapper">
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-6 col-xxl-4">
                    <div class="image-slider">
                        @foreach (range(1, 3) as $a)
                            @foreach ($gallery as $item)
                                <div class="image-item">
                                    <figure class="image-item__figure">
                                        @include('components.picture', ['imageID' => $item])
                                    </figure>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
