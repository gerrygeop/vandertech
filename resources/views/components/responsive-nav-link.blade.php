@props(['active'])

@php
$classes = ($active ?? false)
            ? 'border-indigo-500 text-indigo-700 bg-indigo-100 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700'
            : 'border-transparent text-slate-500 hover:text-slate-800 hover:bg-slate-50 hover:border-slate-300 focus:outline-none focus:text-slate-800 focus:bg-slate-50 focus:border-slate-300';
@endphp

<a {{ $attributes->merge(['class' => 'flex items-center pl-3 pr-4 py-2 border-l-4 text-base '.$classes.' transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</a>
