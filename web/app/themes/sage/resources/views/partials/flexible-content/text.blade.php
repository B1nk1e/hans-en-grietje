@php
    $button = $content['button'] ?? null;
    $text = $content['text'] ?? null;
@endphp

<section class="section section--text" data-animate="fade-to-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xxl-8">
                @if ($button)
                    <div class="text-btn">
                        @include('components.button', ['item' => $button, 'class' => 'btn--small'])
                    </div>
                @endif

                @if ($text)
                    <div class="text">{!! $text !!}</div>
                @endif
            </div>
        </div>
    </div>
</section>
