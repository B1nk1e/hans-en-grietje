@if (App\custom_menu_object('primary_navigation'))
    <div class="navbar-menu">
        @foreach (App\custom_menu_object('primary_navigation') as $key => $item)
            @php
                $item = (object) $item;
                $classes = '';

                if (!empty($item->classes[0])) {
                    $classes .= ' ' . implode(' ', $item->classes);
                }

                if ($item->object_id == get_queried_object_id()) {
                    $classes .= ' current';
                }
            @endphp

            <div class="navbar-menu__parent @if ($item->children) has-children @endif">
                <a href="{{ $item->url }}" target="{{ $item->target }}" aria-label="{{ $item->title }}" role="menuitem"
                    class="navbar-button {{ $classes }}">
                    {{ $item->title }}

                    @if ($item->children)
                        <i class="icon-chevron-down"></i>
                    @endif
                </a>

                @if ($item->children)
                    @php
                        $children = $item->children;
                    @endphp

                    @include('partials.navbar.subnavigation', ['children' => $children])
                @endif
            </div>
        @endforeach
    </div>
@endif
