@props(['active'])

@php

$activeClass = 'border-blue-500 text-blue-800 font-medium';
$inactiveClass = 'border-transparent hover:border-slate-300 focus:border-slate-300 text-slate-500 hover:text-slate-700 focus:text-slate-700';

$classes = ($active ?? false)
            ? $activeClass
            : $inactiveClass;
@endphp

<a {{ $attributes->merge(['class' => 'flex items-center lg:mx-1 px-3 py-2 text-sm border-b-2 '.$classes.' focus:outline-none transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</a>
