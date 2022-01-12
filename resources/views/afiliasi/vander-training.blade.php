<x-guest-layout>
    <section class="mt-16 text-gray-600">
        <div class="max-w-6xl py-16 mx-auto flex flex-wrap">

            <div class="grid grid-cols-6 gap-6 lg:gap-8 items-center mb-20">
                <div class="col-span-full md:col-span-3">
                    <img 
                        src="{{ url('image/afiliasi/0. training.png') }}" 
                        alt="Vandertech In House Training"
                        class="max-w-lg"
                    >
                </div>

                <p class="col-span-full md:col-span-3 leading-relaxed text-lg indent-8">Vandertech In House Training merupakan platform informasi training online program pelatihan berbasis kompetensi dengan sertifikat BNSP (Badan Nasional Sertifikasi Profesi).</p>
            </div>

            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/500x300">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/501x301">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/600x360">
                    </div>
                </div>

                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/601x361">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/502x302">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/503x303">
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('_footer')
</x-guest-layout>