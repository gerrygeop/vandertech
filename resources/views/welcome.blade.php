<x-guest-layout>

    <section class="bg-white dark:bg-gray-800">
        <x-navbar />
    
        @include('_swiper-image')

        <x-divide-section />

        @include('_about-section')

        <x-divide-section />

        @include('_visi-misi-section')

        <x-divide-section />

        @include('_mitra-section')
    </section>

</x-guest-layout>