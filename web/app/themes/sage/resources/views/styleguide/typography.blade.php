@php
    $fonts_array = [
        [
            'family' => 'IvyPrestoDisplay',
            'family_type' => 'primary',
            'weight' => ['Bold'],
        ],
        [
            'family' => 'NeueMontreal',
            'family_type' => 'secondary',
            'weight' => ['Regular'],
        ],
    ];

    $typography_array = [
        [
            'name' => 'Heading 1',
            'styles' => [
                'Font / weight:' => '600',
                'Font size:' => '72/32',
                'Line height:' => '100%',
                'Letter spacing:' => '-4%',
            ],
            'html' => '<h1>We enabl rapid growth with digital experiences</h1>',
        ],
        [
            'name' => 'Heading 2',
            'styles' => [
                'Font / weight:' => '600',
                'Font size:' => '64/28',
                'Line height:' => '100%',
                'Letter spacing:' => '-4%',
            ],
            'html' => '<h2>We enabl rapid growth with digital experiences</h2>',
        ],
        [
            'name' => 'Heading 3',
            'styles' => [
                'Font / weight:' => '600',
                'Font size:' => '48/26',
                'Line height:' => '100%',
                'Letter spacing:' => '-4%',
            ],
            'html' => '<h3>We enabl rapid growth with digital experiences</h3>',
        ],
        [
            'name' => 'Heading 4',
            'styles' => [
                'Font / weight:' => '600',
                'Font size:' => '42/24',
                'Line height:' => '100%',
                'Letter spacing:' => '-3%',
            ],
            'html' => '<h4>We enabl rapid growth with digital experiences</h4>',
        ],
        [
            'name' => 'Heading 5',
            'styles' => [
                'Font / weight:' => '600',
                'Font size:' => '32/20',
                'Line height:' => '100%',
                'Letter spacing:' => '-2%',
            ],
            'html' => '<h5>We enabl rapid growth with digital experiences</h5>',
        ],
        [
            'name' => 'Heading 6',
            'styles' => [
                'Font / weight:' => '600',
                'Font size:' => '28/18',
                'Line height:' => '100%',
                'Letter spacing:' => '-2%',
            ],
            'html' => '<h6>We enabl rapid growth with digital experiences</h6>',
        ],

        [
            'name' => 'Subheader',
            'styles' => [
                'Font / weight:' => '500',
                'Font size:' => '14/14',
                'Line height:' => '24px',
                'Letter spacing:' => '0%',
            ],
            'html' => '<div class="subheader">Subheader</div>',
        ],

        [
            'name' => 'Body tekst',
            'styles' => [
                'Font / weight:' => '500',
                'Font size:' => '18/14',
                'Line height:' => '140%',
                'Letter spacing:' => '0%',
            ],
            'html' =>
                '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque.</p>',
        ],
        [
            'name' => 'Paragraph links',
            'styles' => [
                'Text decoration' => 'underline',
            ],
            'html' =>
                '<p>Lorem ipsum <a href="#">dolor sit amet</a>, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque.</p>',
        ],
        [
            'name' => 'Unordered list',
            'styles' => [],
            'html' =>
                '<ul><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aenean commodo ligula eget dolor.</li><li>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li><li>Donec quam felis, ultricies nec, pellentesque.</li></ul>',
        ],
        [
            'name' => 'Ordered list',
            'styles' => [],
            'html' =>
                '<ol><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aenean commodo ligula eget dolor.</li><li>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li><li>Donec quam felis, ultricies nec, pellentesque.</li></ol>',
        ],
    ];
@endphp

<section class="section section--typography">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Typography</h2>
        </div>

        <div class="section__content">
            <h3 class="subtitle">Font family</h3>
            <div class="row holder">
                @foreach ($fonts_array as $fonts)
                    <div class="col-6">
                        @foreach ($fonts['weight'] as $weight)
                            <div
                                class="font font--{{ strtolower(str_replace(' ', '-', $weight)) }} font--{{ $fonts['family_type'] }}">
                                <div class="font-preview">
                                    <p>Aa</p>
                                </div>
                                <div class="font-text">
                                    <span class="font-family">{{ $fonts['family'] }}</span>
                                    <span class="font-weight">{{ $weight }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

        @foreach ($typography_array as $typography)
            <div class="section__content">
                <h3 class="subtitle">{{ $typography['name'] }}</h3>
                <div class="typography-code holder">
                    <div class="row">
                        <div class="col-lg-6 col-xxl-4">
                            @foreach ($typography['styles'] as $key => $value)
                                <div class="row">
                                    <div class="col-4">
                                        <span class="style-key">{{ $key }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="style-value">{{ $value }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-xxl-8 typography-preview">
                            {!! $typography['html'] !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
