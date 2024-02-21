@props(['active' => false])

@php
    $submenu = $active ? 'submenu active' : 'submenu';
@endphp

<ul {{ $attributes->merge(['class' => $submenu]) }}>
    {{ $slot }}
</ul>
