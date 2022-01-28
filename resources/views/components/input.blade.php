@props(['disabled' => false, 'checked' => false])

<input {{ $disabled ? 'disabled' : '' }} {{ $checked ? 'checked' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-slate-300 focus:border-indigo-300 focus:outline-none placeholder:text-slate-400']) !!}>
