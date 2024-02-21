@props(['active' => false])

@php
    $classes = $active ? 'sidebar-item active' : 'sidebar-item';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</li>
