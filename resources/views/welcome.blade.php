<x-guest-layout>

    <section class="pt-16 lg:pt-20">
        @include('_swiper-image')

        @include('_about-section')

        @include('_visi-misi-section')

        {{-- @include('_mitra-section') --}}
        <x-mitra />

        @include('_contact')
    </section>

</x-guest-layout>