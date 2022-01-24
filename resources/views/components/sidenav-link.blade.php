@props(['active'])

@php

$activeClass = 'text-blue-50 bg-blue-700 shadow shadow-blue-600/50';
$inactiveClass = 'text-slate-500 hover:bg-slate-100 hover:text-slate-700';

$classes = ($active ?? false)
            ? $activeClass
            : $inactiveClass;
@endphp

<a {{ $attributes->merge(['class' => 'flex items-center px-4 py-2 mb-4 '. $classes .' rounded-md']) }}>
    {{ $slot }}
</a>
