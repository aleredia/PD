@props([
    'url' => '#',
    'type' => 'primary',
    'class' => ''
])

@php
    $style = match($type) {
        'dark' => 'btn-dark',
        'outline' => 'btn-outline-primary',
        'custom' => 'btn-custom',
        default => 'btn-primary',
    };
@endphp

<a href="{{ $url }}" {{ $attributes->merge(['class' => "btn $style $class"]) }}>
    {{ $slot }}
</a>