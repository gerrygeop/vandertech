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
                <div class="mt-12">
                    @include('afiliasi.visi-misi')
                </div>
            @endif

            @if ($affiliation->layanan_jasa)
                <div class="mt-12">
                    {!! $affiliation->layanan_jasa !!}
                </div>

                @if ($pelatihan)
                    <div class="mt-12">
                        <h2 class="text-base md:text-lg text-slate-900 font-medium tracking-wider">
                            Pelatihan yang telah dilaksanakan
                        </h2>
                        <table class="border mt-1">
                            <thead class="bg-slate-100">
                                <th class="px-4 py-2 text-left">Tahun</th>
                                <th class="px-4 py-2 text-left">Mitra Perusahaan</th>
                                <th class="px-4 py-2 text-left">Layanan Jasa</th>
                            </thead>
                            <tbody class="divide-y">
                                @foreach ($pelatihan as $item)
                                    <tr>
                                        <td class="px-4 py-2">{{ $item->tahun }}</td>
                                        <td class="px-4 py-2">{{ $item->partner->name }}</td>
                                        <td class="px-4 py-2">{{ $item->layanan_jasa }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif

            @if ($affiliation->address || $affiliation->email || $affiliation->telp)
                <div class="mt-12">
                    @include('afiliasi.kontak')                    
                </div>
            @endif

            @if ($affiliation->maps)
                <div class="mt-12">
                    <div class="w-full relative bg-slate-300 border overflow-hidden h-96" id="maps">
                        {!! $affiliation->maps !!}
                    </div>
                </div>
            @endif

        </div>
    </div>

    @push('scripts')
        <script>
            let maps = document.querySelector('#maps iframe');
            if (maps) {
                maps.width = '100%';
                maps.height = '100%';
                maps.setAttribute('class', 'absolute inset-0');
            }

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