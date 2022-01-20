<x-app-layout>
    <x-slot name="header">
        {{ __('Detail Perusahaan Afiliasi') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white">

                <div class="h-full w-full mb-12">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide min-h-full aspect-video">
                                <img 
                                    src="{{ url('image/intienergi/10.jpeg') }}" 
                                    alt="">
                            </div>
                            <div class="swiper-slide min-h-full aspect-video">
                                <img 
                                    src="{{ url('image/intienergi/2.jpeg') }}" 
                                    alt="">
                            </div>
                            <div class="swiper-slide min-h-full aspect-video">
                                <img 
                                    src="{{ url('image/intienergi/5.jpeg') }}" 
                                    alt="">
                            </div>
                            <div class="swiper-slide min-h-full aspect-video">
                                <img 
                                    src="{{ url('image/intienergi/inti-1.jpeg') }}" 
                                    alt="">
                            </div>
                            <div class="swiper-slide min-h-full aspect-video">
                                <img 
                                    src="{{ url('image/intienergi/inti-2.jpeg') }}" 
                                    alt="">
                            </div>
                            <div class="swiper-slide min-h-full aspect-video">
                                <img 
                                    src="{{ url('image/intienergi/inti-3.jpeg') }}" 
                                    alt="">
                            </div>
                            <div class="swiper-slide min-h-full aspect-video">
                                <img 
                                    src="{{ url('image/intienergi/inti-4.jpeg') }}" 
                                    alt="">
                            </div>
                        </div>
        
                        <div class="swiper-button-next bg-slate-50/40 p-4 lg:p-6"></div>
                        <div class="swiper-button-prev bg-slate-50/40 p-4 lg:p-6"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
        
                <div class="px-4 lg:px-14 pb-12">
                    <div class="border">
                        <div class="float-none lg:float-left lg:pr-8">
                            <img 
                                src="{{ $affiliation->getLogoAffiliation() }}" 
                                alt="{{ $affiliation->name }}"
                                class="w-auto max-h-40 lg:max-h-52 mx-auto shrink"
                            >
                        </div>
            
                        <p class="leading-relaxed text-base text-justify indent-10">
                            {!! $affiliation->description !!}
                        </p>
                    </div>
        
                    <div class="clear-both mt-8">
                        <p class="text-base text-slate-700">
                            Layanan Jasa Pembuatan Dokumen:
                        </p>
                        <ul class="list-disc list-inside leading-loose tracking-wide">
                            <li>Eksplorasi</li>
                            <li>Studi Kelayakan (FS)</li>
                            <li>SRencana Reklamasi (RR)</li>
                            <li>Rencana Pascatambang (RPT)</li>
                            <li>Rencana Kerja Anggaran Biaya (RKAB)</li>
                            <li>Analisis Mengenai Dampak Lingkungan (AMDAL)</li>
                            <li>Upaya Pengelolaan Lingkungan (UKL) dan Upaya Pemantauan Lingkungan (UPL)</li>
                        </ul>
                    </div>
                </div>
        
            </div>
            
        </div>
    </div>
</x-app-layout>
