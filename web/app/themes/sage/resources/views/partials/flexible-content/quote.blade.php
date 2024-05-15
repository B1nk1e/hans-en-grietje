@php
    $text = $content['text'] ?? null;
    $image = $content['image'] ?? null;
    $name = $content['name'] ?? null;
@endphp

<section class="section section--quote" data-animate="fade-to-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xxl-6">
                @if ($text)
                    <div class="quote h5">{!! $text !!}</div>
                @endif

                @if ($image || $name)
                    <div class="quote-author">
                        @if ($image)
                            <figure class="quote-author__image">
                                @include('components.picture', ['imageID' => $image])
                            </figure>
                        @endif

                        @if ($name)
                            <div class="quote-author__name">{!! $name !!}</div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
