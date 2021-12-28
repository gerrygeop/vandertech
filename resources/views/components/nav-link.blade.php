@props(['active'])

@php

$activeClass = 'bg-blue-300 font-medium text-blue-900';
$inActiveClass = 'bg-transparent text-gray-500 hover:text-gray-700 hover:bg-blue-200 focus:text-gray-700 focus:bg-blue-200';

$classes = ($active ?? false)
            ? $activeClass
            : $inActiveClass;
@endphp

<a {{ $attributes->merge(['class' => 'flex lg:items-center lg:mx-1 px-3 py-2 text-sm '.$classes.' rounded-md focus:outline-none transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</a>
