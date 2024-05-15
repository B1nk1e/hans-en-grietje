@php
    $title = $content['title'] ?? null;
    $jobs = $content['jobs'] ?? null;
    $maxPosts = 3;

    if (!$jobs) {
        $query = new WP_Query([
            'post_type' => 'jobs',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => 99999,
        ]);
        $jobs = wp_list_pluck($query->posts, 'ID');
    }
@endphp

@if ($jobs)
    <section class="section section--jobs" id="vacatures" data-animate="fade-to-top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    @if ($title)
                        <div class="jobs-intro">
                            <h2>{!! $title !!}</h2>
                        </div>
                    @endif

                    <div class="jobs">
                        @foreach ($jobs as $key => $job)
                            @include('components.card.arrangement', [
                                'item' => $job,
                                'class' => $key >= $maxPosts ? 'hide' : 'show',
                            ])
                        @endforeach
                    </div>


                    @if (count($jobs) >= $maxPosts)
                        <div class="button-wrapper">
                            <button class="btn btn--jobs">{{ __('Load more', 'sage') }}</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
