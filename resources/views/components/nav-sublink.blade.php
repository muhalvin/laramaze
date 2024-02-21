@props(['active' => false])

@php
    $subitem = $active ? 'submenu-item active' : 'submenu-item';
    $sublink = $active ? 'submenu-link active' : 'submenu-link';
@endphp

<li {{ $attributes->merge(['class' => $subitem]) }}>
    <a {{ $attributes->merge(['class' => $sublink]) }}>
        {{ $slot }}
    </a>
</li>
