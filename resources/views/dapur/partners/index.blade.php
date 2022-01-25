<x-app-layout>
    @if (session('success'))
        <x-slot name="message">
            {{ session('success') }}
        </x-slot>
    @endif

    <x-slot name="header">
        Mitra Perusahaan
    </x-slot>

    <div class="py-8">
        @livewire('table-partners')
    </div>
</x-app-layout>
