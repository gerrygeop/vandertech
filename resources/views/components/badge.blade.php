@props(['status'])

@php
    $classes = 'bg-gray-100 text-gray-700';

    if ($status === 'sudah' || $status === 'aktif') {
        $classes = 'bg-green-100 text-green-700';
    }
    if ($status === 'belum' || $status === 'tidak aktif') {
        $classes = 'bg-red-100 text-red-700';
    }
@endphp

<span class="{{ $classes }} px-2 inline-flex text-xs leading-5 font-semibold rounded-full capitalize">
    {{ $slot }}
</span>