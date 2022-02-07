<x-guest-layout>

    <div class="min-h-screen bg-slate-100/75 pt-20">
        <div class="max-w-6xl mx-auto pb-24 pt-8 lg:pt-12">
    
            <div class="flex justify-center w-full mb-6 lg:mb-10">
                <div>
                    <img src="{{ url('image/Logo-Vandertech.png') }}" alt="" class="h-24 md:h-28 w-auto">
                </div>
            </div>
                
            <div class="grid grid-cols-6 gap-x-8 gap-y-8 px-4">
                <div class="col-span-6">
                    <div class="text-sm md:text-base text-slate-700 text-justify tracking-wider leading-relaxed">
                        {!! $vanderteck->about !!}
                    </div>
                </div>

                <div class="col-span-6 max-w-4xl max-h-80 mx-auto overflow-hidden">
                    <img src="{{ $vanderteck->getImage() }}" alt="Image" class="h-full w-auto bg-blue-400 border shadow">
                </div>
            </div>
    
        </div>

        {{-- Visi Misi Section --}}
        <x-visi-misi />

    </div>

</x-guest-layout>