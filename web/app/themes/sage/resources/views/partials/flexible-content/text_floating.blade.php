@php
    $title = $content['title'] ?? null;
    $button = $content['button'] ?? null;
    $text = $content['text'] ?? null;
    $gallery = $content['gallery'] ?? null;
@endphp

<section class="section section--text-floating">
    <div class="text-floating__web d-none d-md-block">
        @include('assets.web')
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            @if ($gallery)
                <div class="col-8 col-md-5 col-lg-3">
                    <div class="text-floating__images">
                        @foreach ($gallery as $key => $item)
                            @if ($key === 0 || $key === 2)
                                <figure class="text-floating__figure figure-{{ $key }}">
                                    @if ($key === 0)
                                        <div class="text-floating__candy" data-animate="parallax"
                                            data-animate-speed="-2.5">
                                            @include('assets.candy')
                                        </div>
                                    @endif

                                    @if ($key === 2)
                                        <div class="text-floating__candy" data-animate="parallax"
                                            data-animate-speed="2">
                                            @include('assets.cane')
                                        </div>
                                    @endif

                                    @include('components.picture', ['imageID' => $item])
                                </figure>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="col-sm-10 col-md-8 col-lg-6 col-xxl-4">
                <div class="text-floating__content">
                    <div class="text-floating__inner">
                        @if ($title)
                            <h2>{!! $title !!}</h2>
                        @endif

                        {!! $text !!}

                        @if ($button)
                            @include('components.button', ['item' => $button])
                        @endif

                        <div class="text-floating__candy text-floating__candy--candy" data-animate="parallax"
                            data-animate-speed="2.5">
                            @include('assets.candy')
                        </div>

                        <div class="text-floating__candy text-floating__candy--cane" data-animate="parallax"
                            data-animate-speed="-2.5">
                            @include('assets.cane')
                        </div>
                    </div>
                </div>
            </div>

            @if (count($gallery) > 2)
                <div class="col-8 col-md-5 col-lg-3">
                    <div class="text-floating__images">
                        @foreach ($gallery as $key => $item)
                            @if ($key === 1 || $key === 3)
                                <figure class="text-floating__figure figure-{{ $key }}">
                                    @if ($key === 1)
                                        <div class="text-floating__candy" data-animate="parallax"
                                            data-animate-speed="2">
                                            @include('assets.cane')
                                        </div>
                                    @endif

                                    @if ($key === 3)
                                        <div class="text-floating__candy"data-animate="parallax"
                                            data-animate-speed="-2.5">
                                            @include('assets.candy')
                                        </div>
                                    @endif

                                    @include('components.picture', ['imageID' => $item])
                                </figure>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
