@php
    $colors = [
        'primary' => [
            [
                'name' => 'title',
                'hex' => '#0a0a0a',
            ],
            [
                'name' => 'text',
                'hex' => '#1e1e1e',
            ],
            [
                'name' => 'creme',
                'hex' => '#f4efe9',
            ],
            [
                'name' => 'creme-dark',
                'hex' => '#e1dcd5',
            ],
            [
                'name' => 'rose',
                'hex' => '#ed1b24',
            ],
        ],
        'secondary' => [
            [
                'name' => 'star',
                'hex' => '#ff8b00',
            ],
        ],
        'grayscale' => [
            [
                'name' => 'cola',
                'hex' => '#000',
            ],
            [
                'name' => 'milk',
                'hex' => '#fff',
            ],
            [
                'name' => 'stone',
                'hex' => '#a5a5a5',
            ],
        ],
    ];
@endphp

<section class="section section--colors">
    <div class="container">
        <div class="section__body">
            <div class="section__header">
                <h2 class="section__title">Colors</h2>
            </div>
            <div class="section__content">
                <div class="row">
                    @foreach ($colors as $key => $color_categoy)
                        <div class="col-12 col-sm-auto">
                            <h3 class="subtitle" style="margin-top: 40px;">{{ $key }}</h3>
                            <div class="row">
                                @foreach ($color_categoy as $color)
                                    <div class="col-sm-auto">
                                        <div class="color">
                                            <div class="color__item bg-{{ $color['name'] }}"></div>
                                            <div class="color__footer">
                                                <span class="color__title">{{ $color['name'] }}</span>
                                                <span class="color__hex">{{ $color['hex'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
