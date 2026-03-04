@props([
    'url' => '#',
    'type' => 'primary',
    'class' => ''
])

@php
    $style = match($type) {
        'dark' => 'btn-dark',
        'outline' => 'btn-outline-primary',
        default => 'btn-primary',
    };
@endphp

<a href="{{ $url }}" {{ $attributes->merge(['class' => "btn $style $class"]) }}>
    {{ $slot }}
</a>