@php
    $blocks = $content['blocks'] ?? null;
@endphp

@if ($blocks)
    <section class="section section--questions" data-animate="fade-to-top">
        <div class="container-fluid">
            <div class="question-blocks">
                @foreach ($blocks as $key => $block)
                    @php
                        $title = $block['title'];
                        $text = $block['text'];
                        $button = $block['button'];
                        $type = $block['type'];
                    @endphp

                    <div class="question-block">
                        <div class="question-block__content">
                            @if ($title)
                                <div class="question-block__title h5">{!! $title !!}</div>
                            @endif

                            @if ($text)
                                <div class="question-block__text">{!! $text !!}</div>
                            @endif
                        </div>

                        @if ($button)
                            <div class="button-wrapper">
                                @if ($type === 'link')
                                    @include('components.button', ['item' => $button])
                                @else
                                    <button class="btn btn--tab {{ $key === 0 ? 'active' : '' }}"
                                        data-id="{!! get_queried_object_id() !!}{!! $key !!}">{!! $button['title'] !!}</button>
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xxl-6">
                    <div class="question-content">
                        @foreach ($blocks as $key => $block)
                            @php
                                $type = $block['type'];
                            @endphp

                            @if ($type != 'link')
                                <div class="question-tab {{ $key === 0 ? 'active' : '' }}"
                                    data-tab="{!! get_queried_object_id() !!}{!! $key !!}">

                                    @if ($type === 'times')
                                        @php
                                            $times = $block['times'];
                                        @endphp

                                        <h4 class="question-tab__title">{{ __('Opening hours', 'sage') }}</h4>

                                        @include('components.times', ['times' => $times])
                                    @endif

                                    @if ($type === 'faq')
                                        @php
                                            $faqs = $block['faq'];
                                        @endphp

                                        <h4 class="question-tab__title">{{ __('Frequently asked questions', 'sage') }}
                                        </h4>

                                        @include('components.faq', ['faqs' => $faqs])
                                    @endif

                                    @if ($type === 'text')
                                        @php
                                            $content = $block['content'];
                                        @endphp

                                        {!! $content !!}
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
