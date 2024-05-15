@php
    $current_date = date('Y-m-d');
    $current_time = date('H:i:s');

    $args = [
        'post_type' => 'agenda',
        'post_status' => 'publish',
        'meta_query' => [
            'relation' => 'AND',
            [
                'key' => 'date',
                'value' => $current_date,
                'compare' => '>=',
                'type' => 'DATE',
            ],
            [
                'relation' => 'OR',
                [
                    'key' => 'date',
                    'value' => $current_date,
                    'compare' => '=',
                    'type' => 'DATE',
                ],
                [
                    'key' => 'start',
                    'value' => $current_time,
                    'compare' => '>=',
                    'type' => 'TIME',
                ],
            ],
        ],
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order' => 'ASC',
    ];

    $agenda_relationship = $content['agenda'];

    if (!empty($agenda_relationship)) {
        $args['post__in'] = $agenda_relationship;
    }

    $query = new WP_Query($args);
    $agenda = wp_list_pluck($query->posts, 'ID');
@endphp

@if ($agenda)
    <section class="section section--agenda" data-animate="fade-to-top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xxl-8">
                    <div class="agenda-container">
                        @foreach ($agenda as $item)
                            @include('components.card.agenda', ['item' => $item])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
