@php
    $big = 999999999; // need an unlikely integer

    $links = paginate_links([
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'prev_next' => false,
        'type' => 'array',
        'total' => $query->max_num_pages,
    ]);
@endphp

@if ($links)
    <div class="pagination" data-animate="fade-in">
        <div class="pagination-container">
            @if (get_previous_posts_link())
                <a href="{{ get_pagenum_link($paged - 1) }}" class="pagination-link">
                    <i class="icon-chevron-left"></i>
                </a>
            @endif

            <ul class="pagination-links">
                <li>
                    {!! join('</li><li>', $links) !!}
                </li>
            </ul>

            @if (get_next_posts_link(null, $query->max_num_pages))
                <a href="{{ get_pagenum_link($paged + 1) }}" class="pagination-link">
                    <i class="icon-chevron-right"></i>
                </a>
            @endif
        </div>
    </div>
@endif
