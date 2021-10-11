@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'nav-item d-none d-sm-inline-block'
                : 'nav-link';
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>