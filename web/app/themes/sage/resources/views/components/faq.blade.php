@if ($faqs)
    <div class="accordion__holder">
        @foreach ($faqs as $faq)
            @if ($faq['question'] && $faq['answer'])
                <div class="accordion__item">
                    <div class="accordion__term">
                        <div class="accordion__title">{!! $faq['question'] !!}</div>
                        <div class="accordion__button">
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="accordion__body collapse">
                        <div class="accordion__description">
                            {!! $faq['answer'] !!}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endif
