<x-content>
    <div class="bg-white lg:shadow">

        <div class="h-full w-full mb-8">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/img-1.jpg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                        src="{{ url('image/img-2.jpg') }}"
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/img-3.jpg') }}"
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/img-4.jpg') }}"
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/img-5.jpg') }}"
                            alt="">
                    </div>
                </div>

                <div class="swiper-button-next bg-gray-50/40 p-4 lg:p-6"></div>
                <div class="swiper-button-prev bg-gray-50/40 p-4 lg:p-6"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="grid grid-cols-6 gap-y-4 gap-x-8 items-center px-4 lg:px-14 pb-12">
            <div class="col-span-full md:col-span-2">
                <img 
                    src="{{ url('image/logo-afiliasi/9t-coffee.png') }}" 
                    alt="9T Coffee"
                    class="w-auto h-44 lg:h-60 mx-auto shrink"
                >
            </div>

            <p class="col-span-full md:col-span-4 leading-relaxed text-base text-justify indent-8">
                9T Coffee merupakan badan usaha yang bergerak dibidang makanan dan minuman cepat saji dengan sajian produk bermutu tinggi dan memiliki cita rasa tersendiri yang berkualitas.
            </p>
        </div>
    </div>

    {{-- <div class="flex flex-wrap md:-m-2 -m-1">
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
    </div> --}}
</x-content>