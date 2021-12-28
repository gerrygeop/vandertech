<x-guest-layout>

    <section class="bg-gray-50 dark:bg-gray-800 pt-20">
        <x-navbar />
    
        @include('_swiper-image')

        <x-divide-section />

        @include('_about-section')

        {{-- <x-divide-section /> --}}

        @include('_visi-misi-section')

        {{-- <x-divide-section /> --}}

        @include('_mitra-section')
    </section>

</x-guest-layout>