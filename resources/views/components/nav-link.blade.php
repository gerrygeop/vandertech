@props(['active'])

@php

$activeClass = 'border-blue-300 text-blue-800 font-medium';
$inactiveClass = 'border-transparent hover:border-gray-200 focus:border-gray-200 text-gray-500 hover:text-gray-700 focus:text-gray-700';

$classes = ($active ?? false)
            ? $activeClass
            : $inactiveClass;
@endphp

<a {{ $attributes->merge(['class' => 'flex lg:items-center lg:mx-1 px-3 py-2 text-sm border-b-2 '.$classes.' focus:outline-none transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</a>
