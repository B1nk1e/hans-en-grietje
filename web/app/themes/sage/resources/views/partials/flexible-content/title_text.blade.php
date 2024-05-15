@php
    $title = $content['title'] ?? null;
    $text = $content['text'] ?? null;
    $buttonRed = $content['button_red'] ?? null;
    $buttonWhite = $content['button_white'] ?? null;
@endphp

<section class="section section--title-text" data-animate="fade-to-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xxl-8">
                <div class="title-text__wrapper">
                    @if ($title)
                        <div class="title-text__title">
                            <h2>{!! $title !!}</h2>
                        </div>
                    @endif
                    <div class="title-text__content">
                        @if ($text)
                            <div class="title-text__text">{!! $text !!}</div>
                        @endif

                        @if ($buttonRed || $buttonWhite)
                            <div class="button-wrapper">
                                @if ($buttonRed)
                                    @include('components.button', [
                                        'item' => $buttonRed,
                                        'class' => 'btn--rose',
                                    ])
                                @endif

                                @if ($buttonWhite)
                                    @include('components.button', ['item' => $buttonWhite])
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
