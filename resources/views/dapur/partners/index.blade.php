<x-app-layout>
    <x-slot name="header">
        {{ __('Mitra Perusahaan') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            @livewire('table-partners')

        </div>
    </div>
</x-app-layout>
