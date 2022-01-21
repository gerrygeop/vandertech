<div class="bg-slate-100/75 py-8 sm:py-14" id="mitra">
    <div class="max-w-6xl mx-auto px-0 md:px-6">

        <div class="flex justify-center w-full mb-6 lg:mb-8">
            <div>
                <h1 class="text-xl text-slate-700 md:text-3xl font-semibold font-heading tracking-wide mb-1">Mitra Perusahaan</h1>
                <div class="h-0.5 md:h-1 w-full bg-blue-500"></div>
            </div>
        </div>

        @foreach ($categories as $category)
            <div class="bg-white overflow-hidden mb-6 shadow md:shadow-md">
                <div class="mb-6 px-4 py-1 bg-gradient-to-r from-blue-600 to-blue-200 md:to-transparent">
                    <h3 class="text-sm md:text-base tracking-wider font-medium text-blue-50 capitalize">{{ $category->name }}</h3>
                </div>
                
                <div class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-6 p-2">
                    @foreach ($category->partners->sortByDesc('name') as $partner)
                        <div class="col-span-1">
                            <x-card-mitra mitraLogo="{{ $partner->getLogoPartner() }}" mitraName="{{ $partner->name }}" />
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
</div>