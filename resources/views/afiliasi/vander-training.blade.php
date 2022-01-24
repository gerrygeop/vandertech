<x-content>
    <x-slot name="swiper">
        <div class="h-full w-full mb-10 md:mb-12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/indotraining/inti-energi (15).jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/indotraining/inti-energi (10).jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/indotraining/inti-energi (9).jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/indotraining/inti-energi (7).jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/indotraining/inti-energi (8).jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/indotraining/inti-energi (5).jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/indotraining/inti-energi (12).jpeg') }}" 
                            alt="">
                    </div>
                    <div class="swiper-slide min-h-full aspect-video">
                        <img 
                            src="{{ url('image/indotraining/inti-energi (11).jpeg') }}" 
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
                src="{{ url('image/logo-afiliasi/indo-training.png') }}" 
                alt="Vandertech Indo Training"
                class="w-auto max-h-40 mx-auto shrink"
            >
        </div>

        <div class="px-4 lg:px-14">
            <p class="leading-relaxed text-base text-justify">
                Vandertech Indo Training merupakan platform informasi training online program pelatihan berbasis kompetensi dengan sertifikat BNSP (Badan Nasional Sertifikasi Profesi).
            </p>

            <div class="mt-8">
                <p class="text-base text-slate-700">
                    Pelatihan:
                </p>
                <ul class="list-disc leading-loose tracking-wide pl-5">
                    <li>POP</li>
                    <li>POM</li>
                    <li>POU</li>
                    <li>Pelatihan Sistem Manajemen Keselamatan Pertembangan (SMKP) </li>
                    <li>Ahli K3 Umum</li>
                </ul>
            </div>

        </div>
    </div>
</x-content>