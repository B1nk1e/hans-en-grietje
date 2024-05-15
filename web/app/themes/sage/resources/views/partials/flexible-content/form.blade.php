@php
    $title = $content['title'] ?? null;
    $text = $content['text'] ?? null;
    $form = $content['form'] ?? null;
@endphp

@if ($form)
    <section class="section section--form">
        <div class="container-fluid">
            <div class="row justify-content-center" data-animate="fade-to-top">
                <div class="col-lg-10 col-xxl-8">
                    <div class="row">
                        <div class="col-lg-6">
                            @if ($title)
                                <h2 class="h3">{!! $title !!}</h2>
                            @endif

                            @if ($text)
                                <div class="form-text">
                                    {!! $text !!}
                                </div>
                            @endif
                        </div>

                        <div class="col-lg-6">
                            {!! do_shortcode('[gravityform id="' . $form . '" title="false" description="false" ajax="true"]') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
