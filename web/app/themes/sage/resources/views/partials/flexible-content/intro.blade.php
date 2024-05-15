@php
    $subtitle = $content['subtitle'] ?? null;
    $title = $content['title'] ?? null;
    $text = $content['text'] ?? null;
@endphp

<section class="section section--intro" data-animate="fade-to-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xxl-6">
                <div class="intro-content">
                    @if ($subtitle)
                        <div class="subheader">{!! $subtitle !!}</div>
                    @endif

                    @if ($title)
                        <h2>{!! $title !!}</h2>
                    @endif

                    @if ($text)
                        <div class="intro-text">{!! $text !!}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
