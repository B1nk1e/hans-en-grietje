@php
    $title = $content['title'];
    $text = $content['text'];

    $instagram = get_field('instagram', 'options');
    $facebook = get_field('facebook', 'options');
    $youtube = get_field('youtube', 'options');
@endphp

<section class="section section--social-feed" data-animate="fade-to-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-4">
                <div class="social-feed__intro">
                    @if ($title)
                        <h2>{!! $title !!}</h2>
                    @endif

                    <div class="button-wrapper">
                        @if ($instagram)
                            <a href="{!! $instagram !!}" class="btn btn--io btn--rose" target="_blank"
                                title="Instagram">
                                <i class="icon-star"></i>
                            </a>
                        @endif

                        @if ($facebook)
                            <a href="{!! $facebook !!}" class="btn btn--io btn--rose" target="_blank"
                                title="Facebook">
                                <i class="icon-star"></i>
                            </a>
                        @endif

                        @if ($youtube)
                            <a href="{!! $youtube !!}" class="btn btn--io btn--rose" target="_blank"
                                title="Youtube">
                                <i class="icon-star"></i>
                            </a>
                        @endif
                    </div>

                    @if ($text)
                        <div class="social-feed__text">{!! $text !!}</div>
                    @endif
                </div>
            </div>

            <div class="col-xl-6 col-xxl-8">
                <div class="instagram-feed"></div>
            </div>
        </div>
    </div>
</section>
