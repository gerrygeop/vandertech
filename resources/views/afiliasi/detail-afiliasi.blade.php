<x-content>
    <x-slot name="swiper">
        <div class="h-full w-full mb-10 md:mb-12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach ($affiliation->photos as $photo)
                        <div class="swiper-slide min-h-full aspect-video">
                            <img 
                                src="{{ $photo->getAffiliationPhoto() }}" 
                                alt="{{ $affiliation->slug }}">
                        </div>
                    @endforeach

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
                src="{{ $affiliation->getLogoAffiliation() }}" 
                alt="{{ $affiliation->name }}"
                class="w-auto max-h-44 mx-auto shrink" 
            >
        </div>

        <div class="px-4 lg:px-14">
            <div class="leading-relaxed text-slate-800 text-base text-justify">
                {!! $affiliation->description !!}
            </div>

            @if ($affiliation->visi && $affiliation->misi)
                <div class="mt-8">
                    <div class="mb-4">
                        <div class="mb-1">
                            <h2 class="text-base md:text-lg text-slate-900 font-medium tracking-wider underline underline-offset-1">Visi</h2>
                        </div>
                        <p class="text-sm md:text-base text-slate-800">
                            {{ $affiliation->visi }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <div class="mb-1">
                            <h2 class="text-base md:text-lg text-slate-900 font-medium tracking-wider underline underline-offset-1">Misi</h2>
                        </div>
                        <div class="pl-5" id="visi-misi-afiliasi">
                            {!! Str::markdown($affiliation->misi) !!}
                        </div>
                    </div>
                </div>
            @endif

            @if ($affiliation->training_name && $affiliation->training)
                <div class="mt-8">
                    <h2 class="text-base md:text-lg text-slate-900 font-medium tracking-wider underline underline-offset-1">
                        {{ $affiliation->training_name }}
                    </h2>
                    <div class="pl-5" id="training-afiliasi">
                        {!! Str::markdown($affiliation->training) !!}
                    </div>
                </div>
            @endif

            @if ($affiliation->address || $affiliation->email || $affiliation->telp)
                <div class="w-full mt-8 overflow-hidden">
                    <div class="mb-2">
                        <h2 class="text-base md:text-lg text-slate-800 font-medium underline underline-offset-1">
                            Kontak
                        </h2>
                    </div>
                    
                    @if ($affiliation->address)
                        <div class="mt-4">
                            <h2 class="font-semibold tracking-widest text-xs">ALAMAT</h2>
                            <p class="mt-1 text-slate-900">
                                {{ $affiliation->address }}
                            </p>
                        </div>
                    @endif

                    @if ($affiliation->email)
                        <div class="mt-4">
                            <h2 class="font-semibold tracking-widest text-xs">EMAIL</h2>
                            <div class="flex items-center text-slate-900">
                                <x-icon size="w-5 h-5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                <p class="ml-2">{{ $affiliation->email }}</p>
                            </div>
                        </div>
                    @endif

                    @if ($affiliation->email)
                        <div class="mt-4">
                            <h2 class="font-semibold tracking-widest text-xs">TELP</h2>
                            <div class="flex items-center text-slate-900">
                                <x-icon size="w-5 h-5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                <p class="ml-2">{{ $affiliation->telp }}</p>
                            </div>
                        </div>
                    @endif
                    
                </div>
            @endif

        </div>
    </div>

    @push('scripts')
        <script>
            let olMisi = document.querySelector('#visi-misi-afiliasi ol');
            if (olMisi) {
                olMisi.setAttribute('class', 'list-decimal leading-normal text-slate-800 tracking-wide');
            }

            let olTraining = document.querySelector('#training-afiliasi ol');
            if (olTraining) {
                olTraining.setAttribute('class', 'list-decimal leading-relaxed text-slate-800 tracking-wide');
            }
        </script>
    @endpush
</x-content>