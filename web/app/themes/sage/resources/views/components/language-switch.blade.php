@php
    $langArray = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');
    $currentLang = wpml_get_current_language();

    if (empty($class)) {
        $class = '';
    }
@endphp

@if (count($langArray) > 1)
    <div class="language-switch {{ $class }}">
        @foreach($langArray as $key => $data)
            @if ($data['active'])
                <div class="language-item active">
                   
                    <span class="language-flag">
                        <img src="{{ asset('images/'. $key .'.jpg') }}">
                    </span>
                    <span>{{ strtoupper($key) }}</span>
                </div>
            @endif
        @endforeach

        <div class="language-select">
            @foreach($langArray as $key => $data)
                @if (!$data['active'])
                    <a class="language-item" href="{{ $data['url'] }}">
                        
                        <span class="language-flag">
                            <img src="{{ asset('images/'. $key .'.jpg') }}">
                        </span>
                        <span>{{ strtoupper($key) }}</span>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
@endif
