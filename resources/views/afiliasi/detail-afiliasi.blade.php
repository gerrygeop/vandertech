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
            <p class="leading-relaxed text-base text-justify">
                {!! $affiliation->description !!}
            </p>

            @if ($affiliation->visi && $affiliation->misi)
                <div class="mt-8">
                    <p class="text-base text-slate-700">
                        {{ $affiliation->visi }}
                    </p>
                    <div class="pl-5">
                        {!! Str::markdown($affiliation->misi) !!}
                    </div>
                </div>
            @endif

            @if ($affiliation->training_name && $affiliation->training)
                <div class="mt-8">
                    <p class="text-base text-slate-700">
                        {{ $affiliation->training_name }}
                    </p>
                    <div class="pl-5">
                        {!! Str::markdown($affiliation->training) !!}
                    </div>
                </div>
            @endif

        </div>
    </div>

    @push('scripts')
        <script>
            let olMisi = document.querySelectorAll('ol');
            olMisi.forEach(e => {
                e.setAttribute('class', 'list-decimal leading-loose tracking-wide');
            });
        </script>
    @endpush
</x-content>