@props(['active'])

@php

$activeClass = 'text-indigo-700 bg-indigo-100';
$inactiveClass = 'text-gray-500 hover:bg-gray-100 hover:text-gray-700';

$classes = ($active ?? false)
            ? $activeClass
            : $inactiveClass;
@endphp

<a {{ $attributes->merge(['class' => 'flex items-center px-4 py-2 mb-5 '. $classes .' rounded-md']) }}>
    {{ $slot }}
</a>
