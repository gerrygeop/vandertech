<x-app-layout>
    <x-slot name="header">
        Detail Perusahaan Afiliasi
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="flex items-center justify-between mb-4">
                <a href="{{ route('d.affiliation.index') }}" class="flex items-center text-slate-700 px-3 py-2 bg-slate-200 hover:bg-slate-300 rounded">
                    <x-icon d="M7 16l-4-4m0 0l4-4m-4 4h18" size="w-5 h-5" />
                    <span class="ml-1">Kembali</span>
                </a>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                            <button 
                                type="button"
                                class="inline-flex items-center p-2 text-sm text-gray-500 bg-slate-200 hover:text-gray-700 hover:bg-slate-300 rounded-md focus:outline-none transition"
                            >
                                <x-icon d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </x-icon>
                            </button>
                        </span>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('d.affiliation.photo.create', $affiliation) }}">
                            <span class="btn-hover-primary p-0">Foto</span>
                        </x-dropdown-link>

                        @if ($affiliation->training)
                        <x-dropdown-link href="{{ route('d.affiliation.training.index', $affiliation) }}">
                            <span class="btn-hover-primary p-0">Pelatihan</span>
                        </x-dropdown-link>
                        @endif

                        <form action="{{ route('d.affiliation.destroy', $affiliation) }}" method="POST" onsubmit="return confirm('Yakin untuk menghapus afiliasi?')">
                            @csrf
                            @method('DELETE')
                            <div class="w-full flex items-center justify-between whitespace-nowrap px-4 py-4 text-sm leading-5 text-slate-700 hover:bg-slate-100 focus:outline-none focus:bg-slate-100 transition duration-150 ease-in-out">
                                <button class="btn-hover-danger w-full text-left p-0">Hapus</button>
                            </div>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="bg-white border pb-10">

                <div class="max-w-5xl mx-auto mb-10 md:mb-12">
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

                <div class="flex mb-10 md:mb-12 px-6">
                    <img 
                        src="{{ $affiliation->getLogoAffiliation() }}" 
                        alt="{{ $affiliation->name }}"
                        class="w-auto max-h-44 mx-auto shrink" 
                    >
                </div>
        
                <div class="px-4 lg:px-14">
                    <p class="leading-relaxed text-base text-slate-900 text-justify">
                        {!! $affiliation->description !!}
                    </p>
        
                    @if ($affiliation->visi && $affiliation->misi)
                        <div class="mt-8">
                            <div class="mb-4">
                                <div class="mb-1">
                                    <h2 class="text-base text-slate-900 font-semibold tracking-wider underline">Visi</h2>
                                </div>
                                <p class="text-sm md:text-base text-slate-900">
                                    {{ $affiliation->visi }}
                                </p>
                            </div>

                            <div class="mb-6">
                                <div class="mb-1">
                                    <h2 class="text-base text-slate-900 font-semibold tracking-wider underline">Misi</h2>
                                </div>
                                <div class="pl-5" id="visi-misi-afiliasi-dapur">
                                    {!! Str::markdown($affiliation->misi) !!}
                                </div>
                            </div>
                        </div>
                    @endif
        
                    @if ($affiliation->training_name && $affiliation->training)
                        <div class="mt-8">
                            <div class="mb-1">
                                <h2 class="text-base text-slate-900 font-semibold">
                                    {{ $affiliation->training_name }}
                                </h2>
                            </div>
                            <div class="pl-5" id="training-afiliasi-dapur">
                                {!! Str::markdown($affiliation->training) !!}
                            </div>
                        </div>
                    @endif

                    @if ($affiliation->address || $affiliation->email || $affiliation->telp)
                        <div class="w-full mt-8 overflow-hidden">
                            <div class="mb-2">
                                <h2 class="text-base text-slate-700 font-semibold">
                                    Kontak
                                </h2>
                            </div>
                            
                            @if ($affiliation->address)
                                <div class="mt-4">
                                    <h2 class="font-semibold tracking-widest text-xs">ALAMAT</h2>
                                    <p class="mt-1">
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
        </div>
    </div>

    @push('scripts')
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            });

            // List misi
            let olMisi = document.querySelector('#visi-misi-afiliasi-dapur ol');
            if (olMisi) {
                olMisi.setAttribute('class', 'list-decimal leading-normal text-slate-900');
            }
            
            // List training
            let olTraining = document.querySelector('#training-afiliasi-dapur ol');
            if (olTraining) {
                olTraining.setAttribute('class', 'list-decimal leading-relaxed text-slate-900');
            }

        </script>
    @endpush
</x-app-layout>
