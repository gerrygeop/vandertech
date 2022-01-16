<x-app-layout>
    <x-slot name="header">
        {{ __('Detail News & Event') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            @include('_news-detail')
            
        </div>
    </div>
</x-app-layout>
