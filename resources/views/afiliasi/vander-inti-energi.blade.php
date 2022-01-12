<x-guest-layout>
    <section class="mt-16 text-gray-600">
        <div class="max-w-6xl py-16 mx-auto flex flex-wrap">

            <div class="grid grid-cols-6 gap-6 lg:gap-8 items-center mb-20">
                <div class="col-span-full md:col-span-3">
                    <img 
                        src="{{ url('image/afiliasi/2. Vander Inti Energi.png') }}" 
                        alt="Vander Inti Energi"
                        class="max-w-lg"
                    >
                </div>

                <p class="col-span-full md:col-span-3 leading-relaxed text-lg indent-8">PT Vander Inti Energi merupakan konsultan jasa pertambangan dan lingkungan yang berdiri sejak tahun 2020 dengan skala layanan nasional.</p>
            </div>

            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ url('image/intienergi/1.jpeg') }}">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ url('image/intienergi/2.jpeg') }}">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ url('image/intienergi/3.jpeg') }}">
                    </div>
                </div>

                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ url('image/intienergi/4.jpeg') }}">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ url('image/intienergi/5.jpeg') }}">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ url('image/intienergi/6.jpeg') }}">
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('_footer')
</x-guest-layout>