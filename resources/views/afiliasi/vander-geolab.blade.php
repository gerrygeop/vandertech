<x-content>
    <div class="bg-white">

        <div class="h-full w-full mb-12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/geolab/1.jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/geolab/2.jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/geolab/3.jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/geolab/4.jpeg') }}" 
                            alt="">
                    </div>
                </div>

                <div class="swiper-button-next bg-gray-50/40 p-4 lg:p-6"></div>
                <div class="swiper-button-prev bg-gray-50/40 p-4 lg:p-6"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="grid grid-cols-6 gap-y-4 gap-x-8 items-center px-4 lg:px-14 pb-12">
            <div class="col-span-full md:col-span-2 p-4 md:p-0">
                <img 
                    src="{{ url('image/logo-afiliasi/vander-geo.png') }}" 
                    alt="Vander Geo Laboratory"
                    class="w-auto max-h-44 lg:max-h-60 mx-auto shrink" 
                >
            </div>

            <p class="col-span-full md:col-span-4 leading-relaxed text-base text-justify indent-8">
                PT Vander Geo Laboratory adalah perusahaan yang bergerak dibidang jasa layanan laboratorium geoteknik dan geohidrologi dengan senantiasa memberikan rekomendasi terbaik bagi setiap mitra bisnis.
            </p>
        </div>

    </div>
</x-content>