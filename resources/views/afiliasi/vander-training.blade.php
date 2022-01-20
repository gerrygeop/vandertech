<x-content>
    <x-slot name="swiper">
        <div class="h-full w-full mb-12">
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
        <div class="grid grid-cols-6 gap-y-4 gap-x-8 items-center px-4 lg:px-14 pb-12">
            <div class="col-span-full md:col-span-2 p-4 md:p-0">
                <img 
                    src="{{ url('image/logo-afiliasi/indo-training.png') }}" 
                    alt="Vandertech Indo Training"
                    class="w-auto max-h-44 lg:max-h-60 mx-auto shrink"
                >
            </div>

            <p class="col-span-full md:col-span-4 leading-relaxed text-base text-justify indent-8">
                Vandertech Indo Training merupakan platform informasi training online program pelatihan berbasis kompetensi dengan sertifikat BNSP (Badan Nasional Sertifikasi Profesi).
            </p>

            <div class="col-span-full">
                <p class="text-base text-slate-700">
                    Pelatihan:
                </p>
                <ul class="list-disc list-inside leading-loose tracking-wide">
                    <li>POP</li>
                    <li>POM</li>
                    <li>POU</li>
                    <li>Ahli K3 Umum</li>
                </ul>
            </div>
        </div>
    </div>
</x-content>