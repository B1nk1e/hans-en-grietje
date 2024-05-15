@if ($children)
    @php
        $menuCta = get_field('menu_cta', 'options');
    @endphp

    <div class="navbar-menu__inner collapse">
        <div class="navbar-menu__nav">
            @foreach ($children as $child)
                @php
                    $classes = '';

                    $child = (object) $child;

                    if (!empty($child->classes[0])) {
                        $classes .= ' ' . implode(' ', $child->classes);
                    }

                    if ($child->object_id == get_queried_object_id()) {
                        $classes .= ' current';
                    }
                @endphp

                <div class="navbar-submenu">
                    <a <?php if (!empty($child->url)) : ?>href="{{ $child->url }}"<?php endif; ?> target="{{ $child->target }}"
                        aria-label="{{ $child->title }}" role="menuitem"
                        class="nav-item {{ $classes }}">{{ $child->title }}</a>

                    @if ($child->children)
                        <div class="navbar-menu__children">
                            @foreach ($child->children as $children)
                                @php
                                    $children = (object) $children;
                                @endphp

                                <a <?php if (!empty($children->url)) : ?>href="{{ $children->url }}"<?php endif; ?>
                                    target="{{ $children->target }}" aria-label="{{ $children->title }}" role="menuitem"
                                    class="nav-child {{ $classes }}">{{ $children->title }}</a>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        @if ($menuCta)
            <div class="navbar-cta">
                @foreach ($menuCta as $cta)
                    @php
                        $title = $cta['title'];
                        $button = $cta['button'];
                        $image = $cta['image'];
                    @endphp

                    @if ($image)
                        <div class="cta-item">
                            @if ($button['url'])
                                <a href="{{ $button['url'] }}" class="cta-item__anchor"
                                    target="{{ $button['target'] ? $button['target'] : '_self' }}"></a>
                            @endif

                            <figure class="cta-item__image">
                                @include('components.picture', ['imageID' => $image])
                            </figure>

                            @if ($title)
                                <div class="cta-item__content">
                                    <div class="cta-item__title h6">{!! $title !!}</div>
                                    @if ($button['title'])
                                        <div class="cta-item__link">{!! $button['title'] !!}</div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    </div>
@endif
