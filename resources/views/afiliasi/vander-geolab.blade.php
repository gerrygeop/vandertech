<x-content>
    <x-slot name="swiper">
        <div class="h-full w-full mb-10 md:mb-12">
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
    
                <div class="swiper-button-next bg-slate-50/40 p-4 lg:p-6"></div>
                <div class="swiper-button-prev bg-slate-50/40 p-4 lg:p-6"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </x-slot>

    <div class="bg-white">
        <div class="flex mb-10 md:mb-12 px-6">
            <img 
                src="{{ url('image/logo-afiliasi/vander-geo.png') }}" 
                alt="Vander Geo Laboratory"
                class="w-auto max-h-44 mx-auto shrink" 
            >
        </div>

        <div class="px-4 lg:px-14">
            <p class="leading-relaxed text-base text-justify">
                PT Vander Geo Laboratory adalah perusahaan yang bergerak dibidang jasa layanan laboratorium geoteknik dan geohidrologi dengan senantiasa memberikan rekomendasi terbaik bagi setiap mitra bisnis.
            </p>
        </div>
    </div>
</x-content>