@props(['active' => false])

@php
    $sidebar = $active ? 'sidebar-item active has-sub' : 'sidebar-item has-sub';
@endphp

<li {{ $attributes->merge(['class' => $sidebar]) }}>
    {{ $slot }}
</li>
