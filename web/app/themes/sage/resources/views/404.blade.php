@extends('layouts.app')

@section('content')
    @if (!have_posts())
        @php
            $image = get_field('404_image', 'options');
            $title = get_field('404_title', 'options');
            $text = get_field('404_text', 'options');
        @endphp

        <div class="section section--error">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="error-content">
                            @if ($image)
                                <figure class="error-image">
                                    @include('components.picture', ['imageID' => $image])
                                </figure>
                            @endif

                            @if ($title)
                                <h1>{!! $title !!}</h1>
                            @endif

                            @if ($text)
                                <div class="error-text">{!! $text !!}</div>
                            @endif
                        </div>

                        <div class="button-wrapper">
                            <a href="/" class="btn"
                                title="{{ __('Back to homepage', 'sage') }}">{{ __('Back to homepage', 'sage') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
