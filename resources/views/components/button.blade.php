{{--
    Reusable Button Component
    Props:
    - href: link destination
    - variant: primary | secondary | outline | dark
--}}
@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $base = 'inline-flex items-center justify-center px-5 py-2.5 rounded-full font-semibold text-sm transition duration-200';

    $variants = [
        'primary'   => 'bg-gradient-to-r from-green-700 to-emerald-600 text-white shadow-md hover:shadow-lg hover:shadow-green-500/30 hover:from-green-600 hover:to-emerald-500',
        'secondary' => 'bg-white text-green-800 border border-green-200 hover:bg-green-50',
        'outline'   => 'bg-transparent text-white border border-white/30 hover:bg-white/10',
        'dark'      => 'bg-black text-white hover:bg-gray-800',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>