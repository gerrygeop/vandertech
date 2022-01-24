<x-app-layout>
    <x-slot name="header">
        {{ __('Mitra Perusahaan') }}
    </x-slot>

    <div class="py-8">

        @livewire('table-partners')

    </div>
</x-app-layout>
