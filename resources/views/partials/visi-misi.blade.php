<div style="background-image: url({{ asset('image/img-1.jpg') }})" class="background-img backdrop-filter backdrop-blur" id="visi-misi">
    <div class="bg-blue-700 bg-opacity-90 py-8 sm:py-14">
        <div class="max-w-6xl mx-auto px-0 md:px-6">

            <div class="flex justify-center w-full mb-6 lg:mb-8">
                <div>
                    <h1 class="text-xl text-slate-100 md:text-3xl font-semibold font-heading tracking-wide mb-1">Visi & Misi</h1>
                    <div class="h-0.5 md:h-1 w-full bg-sky-200"></div>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center">

                <div class="flex flex-col w-full mb-6">
                    <div class="w-1/2 px-4 md:px-8 py-1 bg-gradient-to-r from-sky-500 mb-2">
                        <h2 class="text-base md:text-lg text-white font-medium font-heading tracking-wider">Visi</h2>
                    </div>
                    <p class="leading-relaxed text-sm md:text-base text-slate-50 px-4 md:px-8 tracking-wide">
                        {{ $vanderteck->visi }}
                    </p>
                </div>

                <div class="flex flex-col w-full mb-6">
                    <div class="w-1/2 px-4 md:px-8 py-1 bg-gradient-to-r from-sky-500 mb-2">
                        <h2 class="text-base md:text-lg text-white font-medium font-heading tracking-wider">Misi</h2>
                    </div>
                    <div class="pl-8" id="visi-misi-front">
                        {!! Str::markdown($vanderteck->misi) !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        let olMisi = document.querySelector('#visi-misi-front ol');
        olMisi.setAttribute('class', 'list-disc leading-loose text-sm md:text-base text-slate-50 tracking-wide');
    </script>
@endpush