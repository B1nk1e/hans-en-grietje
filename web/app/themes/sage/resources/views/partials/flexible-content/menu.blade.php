@php
    $type = $content['type'] ?? null;
    $subtitle = $content['subtitle'] ?? null;
    $title = $content['title'] ?? null;
    $text = $content['text'] ?? null;
    $menuNL = $content['menu_nl'] ?? null;
    $menuDE = $content['menu_de'] ?? null;
    $menuEN = $content['menu_en'] ?? null;
    $image = $content['image'] ?? null;
    $blocks = $content['blocks'] ?? null;

    $nl = 'Bekijk het menu';
    $de = 'Ansicht-Menü';
    $en = 'Look at our menu';

    if ($type) {
        $nl = 'Bekijk de plattegrond';
        $de = 'Die Karte ansehen';
        $en = 'View the map';
    }
@endphp

<section class="section section--menu" data-animate="fade-to-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xxl-6">
                <div class="menu-intro">
                    @if ($subtitle)
                        <div class="subheader">{!! $subtitle !!}</div>
                    @endif

                    @if ($title)
                        <h1>{!! $title !!}</h1>
                    @endif

                    @if ($text)
                        <div class="menu-text">{!! $text !!}</div>
                    @endif

                    @if ($menuNL || $menuDE || $menuEN)
                        <div class="menu-wrapper">
                            @if ($menuNL)
                                <a href="{{ $menuNL }}" class="menu-btn" target="_blank"
                                    title="{{ $nl }}">
                                    <figure class="menu-btn__icon">
                                        <img src="{{ asset('images/nl.jpg') }}">
                                    </figure>

                                    <div class="menu-btn__content">
                                        <div class="menu-btn__country">Nederlands</div>
                                        <div class="menu-btn__text">{{ $nl }}</div>
                                    </div>
                                </a>
                            @endif

                            @if ($menuDE)
                                <a href="{{ $menuDE }}" class="menu-btn" target="_blank"
                                    title="{{ $de }}">
                                    <figure class="menu-btn__icon">
                                        <img src="{{ asset('images/de.jpg') }}">
                                    </figure>

                                    <div class="menu-btn__content">
                                        <div class="menu-btn__country">Deutsch</div>
                                        <div class="menu-btn__text">{{ $de }}</div>
                                    </div>
                                </a>
                            @endif

                            @if ($menuEN)
                                <a href="{{ $menuEN }}" class="menu-btn" target="_blank"
                                    title="{{ $en }}">
                                    <figure class="menu-btn__icon">
                                        <img src="{{ asset('images/en.jpg') }}">
                                    </figure>

                                    <div class="menu-btn__content">
                                        <div class="menu-btn__country">English</div>
                                        <div class="menu-btn__text">{{ $en }}</div>
                                    </div>
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @if ($image || $blocks)
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    @if ($image)
                        <div class="menu-figure">
                            @include('components.picture', ['imageID' => $image])
                        </div>
                    @endif

                    @if ($blocks)
                        <div class="menu-blocks">
                            @foreach ($blocks as $block)
                                @php
                                    $blockTitle = $block['title'];
                                    $blockText = $block['text'];
                                    $blockBtn = $block['button'];
                                @endphp

                                <div class="menu-block">
                                    @if ($blockTitle)
                                        <div class="menu-block__title">{!! $blockTitle !!}</div>
                                    @endif

                                    @if ($blockText)
                                        <div class="menu-block__text">{!! $blockText !!}</div>
                                    @endif

                                    @if ($blockBtn)
                                        <div class="button-wrapper">
                                            @include('components.button', [
                                                'item' => $blockBtn,
                                                'class' => 'btn--rose',
                                            ])
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>
