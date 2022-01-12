<x-guest-layout>
    <section class="mt-16 text-gray-600">
        <div class="max-w-6xl py-16 mx-auto flex flex-wrap">

            <div class="grid grid-cols-6 gap-6 items-center mb-20">
                <div class="col-span-full md:col-span-3">
                    <img 
                        src="{{ url('image/afiliasi/5. 9T Coffee.png') }}" 
                        alt="9T Coffee"
                        class="max-w-lg mx-auto"
                    >
                </div>

                <p class="col-span-full md:col-span-3 mx-auto leading-relaxed text-lg indent-8">9T Coffee merupakan badan usaha yang bergerak dibidang makanan dan minuman cepat saji dengan sajian produk bermutu tinggi dan memiliki cita rasa tersendiri yang berkualitas.</p>
            </div>

            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ url('image/9T/1.jpeg') }}">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ url('image/9T/2.jpeg') }}">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ url('image/9T/3.jpeg') }}">
                    </div>
                </div>

                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ url('image/9T/4.jpeg') }}">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ url('image/9T/5.jpeg') }}">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ url('image/9T/6.jpeg') }}">
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('_footer')
</x-guest-layout>