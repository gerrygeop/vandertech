<div class="bg-slate-100/75 py-8 sm:py-14 mx-auto" id="about">
    <div class="max-w-6xl mx-auto px-2 md:px-6 mb-8 lg:mb-12">

        <div class="flex justify-center w-full mb-6 lg:mb-8">
            <div>
                <h1 class="text-xl text-slate-700 md:text-3xl font-semibold font-heading tracking-wide mb-1">Profil Perusahaan</h1>
                <div class="h-0.5 md:h-1 w-full mx-auto bg-green-500"></div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto w-full mb-12">
            <p class="text-slate-700 text-center text-sm md:text-lg tracking-wide">
                PT. Vander Teck Resourses berkomitmen untuk terus berinovasi dan melakukan pengembangan dengan menggunakan konsep value chain dan berupaya menetapkan standarisasi dalam tata kelola perusahaan, menjaga kepercayaan klien dalam pekerjaan.
            </p>

            <div class="mt-2 text-center">
                <a href="{{ route('profile-vanderteck') }}" class="inline-flex items-center mx-auto group text-blue-500 capitalize hover:underline hover:text-blue-600 transition duration-200">
                    Selengkapnya
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-2 transition duration-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="mx-auto mb-8">
            <img src="{{ url('image/Logo-Vandertech.png') }}" alt="Vanderteck" class="mx-auto h-24 md:h-32 w-auto">
        </div>
            
        <section>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                @foreach ($affiliations->sortBy('order') as $affiliation)
                    <div class="col-span-1 px-7 md:px-0">
                        <x-card-afiliasi link="{{ route('afiliasi.detail', $affiliation) }}" image="{{ $affiliation->getLogoAffiliation() }}">
                            {{ $affiliation->name }}
                        </x-card-afiliasi>
                    </div>
                @endforeach

            </div>
        </section>

    </div>
</div>
