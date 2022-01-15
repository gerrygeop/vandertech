<div class="min-h-screen bg-white py-14 mx-auto" id="about">
    <div class="max-w-6xl mx-auto px-6 mb-12">

        <div class="flex justify-center w-full mb-6 lg:mb-8">
            <div>
                <h1 class="text-2xl md:text-3xl font-medium font-heading tracking-wide mb-2 text-gray-800">Profil Perusahaan</h1>
                <div class="h-0.5 w-full bg-green-500 rounded"></div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto w-full mb-12">
            <p class="text-gray-700 text-center tracking-wide dark:text-gray-300 indent-8">
                PT. Vander Teck Resourses berkomitmen untuk terus berinovasi dan melakukan pengembangan dengan menggunakan konsep value chain dan berupaya menetapkan standarisasi dalam tata kelola perusahaan, menjaga kepercayaan klien dalam pekerjaan.
            </p>

            <a href="{{ route('profile-vandertech') }}" class="flex items-center justify-center group mt-2 text-blue-500 capitalize transition duration-200 dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                <span>Selengkapnya</span>
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-2 transition duration-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
            
        <section>
            {{-- <div class="flex flex-col text-center w-full mb-6 lg:mb-10">
                <h1 class="sm:text-2xl text-xl font-medium mb-4 text-gray-800">Perusahaan Afiliasi</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-gray-600 text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid inventore aperiam aliquam nobis, at eos perferendis soluta dolorum.</p>
            </div> --}}

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="col-span-1">
                    <x-card-afiliasi link="{{ route('vander-inti-energi') }}" :image="url('image/logo-afiliasi/vander-inti.png')">
                        Vander Inti Energi
                    </x-card-afiliasi>
                </div>
                <div class="col-span-1">
                    <x-card-afiliasi link="{{ route('vander-training') }}" :image="url('image/logo-afiliasi/indo-training.png')">
                        Vandertech Indo Training
                    </x-card-afiliasi>
                </div>
                <div class="col-span-1">
                    <x-card-afiliasi link="{{ route('vander-geolab') }}" :image="url('image/logo-afiliasi/vander-geo.png')">
                        Vander Geo Laboratory
                    </x-card-afiliasi>
                </div>
                <div class="col-span-1">
                    <x-card-afiliasi link="{{ route('9t-coffee') }}" :image="url('image/logo-afiliasi/9t-coffee.png')">
                        9T Coffee
                    </x-card-afiliasi>
                </div>
            </div>
        </section>

    </div>
</div>
