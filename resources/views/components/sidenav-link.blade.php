@props(['active'])

@php

$activeClass = 'text-indigo-200 bg-indigo-700 shadow';
$inactiveClass = 'text-slate-500 hover:bg-slate-100 hover:text-slate-700';

$classes = ($active ?? false)
            ? $activeClass
            : $inactiveClass;
@endphp

<a {{ $attributes->merge(['class' => 'flex items-center px-4 py-2 mb-5 '. $classes .' rounded-md']) }}>
    {{ $slot }}
</a>
