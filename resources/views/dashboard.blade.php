<x-app-layout>
    @if (session('success'))
        <x-slot name="message">
            {{ session('success') }}
        </x-slot>
    @endif

    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
            <div class="w-full mx-auto">
                {{-- Tabs --}}
                <ul id="tabs" class="flex w-full mb-4 bg-slate-100">
                    <li class="font-medium pb-2 text-blue-600 -mb-px border-b-2 border-blue-400 rounded-t opacity-50">
                        <a id="default-tab" href="#first" class="btn-tab px-4 py-2 text-sm md:text-base">Profil Vanderteck</a>
                    </li>
                    <li class="font-medium pb-2 border-b-2 rounded-t opacity-50">
                        <a href="#second" class="btn-tab px-4 py-2 text-sm md:text-base">Visi & Misi</a>
                    </li>
                    <li class="font-medium pb-2 border-b-2 rounded-t opacity-50">
                        <a href="#third" class="btn-tab px-4 py-2 text-sm md:text-base">Foto Slide</a>
                    </li>
                </ul>

                {{-- Tab Contents --}}
                <div id="tab-contents" class="bg-white border-b border-slate-200 rounded-md shadow-sm overflow-hidden">

                    <div id="first" class="px-6 pt-1 pb-8">
                        <div class="flex justify-end border-b py-2 mb-4">
                            <a href="{{ route('d.dashboard.edit-profile') }}" class="px-4 py-1 bg-indigo-600 text-white hover:bg-indigo-700 rounded-md">Edit</a>
                        </div>

                        @if ($vanderteck->about)
                            <div class="grid grid-cols-6 gap-x-8 gap-y-8">
                                <div class="col-span-6">
                                    <div class="text-sm md:text-base text-slate-700 text-justify tracking-wider leading-relaxed">
                                        {!! $vanderteck->about !!}
                                    </div>
                                </div>
                
                                <div class="col-span-6 max-w-4xl max-h-80 mx-auto overflow-hidden">
                                    <img src="{{ $vanderteck->getImage() }}" alt="Vanderteck Resourses" class="h-full w-auto bg-blue-400">
                                </div>
                            </div>

                        @else
                            <p class="text-sm text-slate-600 italic">
                                Belum ada data.
                            </p>
                            
                        @endif
                    </div>

                    <div id="second" class="hidden px-6 pt-1 pb-8">
                        <div class="flex justify-end border-b py-2 mb-4">
                            <a href="{{ route('d.dashboard.edit-visi-misi') }}" class="px-4 py-1 bg-indigo-600 text-white hover:bg-indigo-700 rounded-md">Edit</a>
                        </div>

                        @if ($vanderteck->visi)
                            <div class="mb-6">
                                <div class="mb-2">
                                    <h2 class="text-base text-slate-800 font-semibold tracking-wider">Visi</h2>
                                </div>
                                <p class="leading-relaxed text-sm md:text-base text-slate-700 px-4 md:px-8 tracking-wide">
                                    {{ $vanderteck->visi }}
                                </p>
                            </div>
            
                            <div class="mb-6">
                                <div class="mb-2">
                                    <h2 class="text-base text-slate-700 font-semibold tracking-wider">Misi</h2>
                                </div>
                                <div class="pl-8" id="visi-misi-dapur">
                                    {!! Str::markdown($vanderteck->misi) !!}
                                </div>
                            </div>

                        @else
                            <div class="mb-6">
                                <p class="text-sm text-slate-600 italic">
                                    Belum ada data.
                                </p>
                            </div>
                            
                        @endif
                    </div>

                    <div id="third" class="hidden px-4 md:px-6 pt-1 pb-8">
                        <div class="py-2 mb-4">
                            <form action="{{ route('d.dashboard.upload-foto-slide') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="flex items-center justify-between gap-8">
                                    <div class="w-full md:w-1/2">
                                        <x-input id="photo" type="file" class="w-full p-2 input-file" name="photo[]" multiple />
                                        @error('photo')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                
                                    <div>
                                        <x-button>Upload</x-button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="border-t border-slate-300 mb-4"></div>

                        <div class="mb-6">
                            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                                @forelse ($slides as $slide)
                                    <div class="w-full max-w-xs text-center border rounded-md overflow-hidden">
                                        <img 
                                            class="object-cover object-center w-full h-48 mx-auto" 
                                            src="{{ $slide->getPhotoSlide() }}" 
                                            alt="Foto"
                                        />
    
                                        <form 
                                            action="{{ route('d.dashboard.destroy-foto-slide', $slide) }}" 
                                            method="POST" 
                                            onsubmit="return confirm('Yakin hapus foto ini?')"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button class="w-full py-2 text-sm text-red-500 bg-white hover:text-white hover:bg-red-500 transition duration-150">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>

                                @empty
                                    <div class="w-full max-w-xs text-center">
                                        <p class="text-sm text-center text-slate-600 italic">Belum ada foto</p>
                                    </div>

                                @endforelse
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    @push('scripts')
        <script>
            // set class tabs content
            let tabsContainer = document.querySelector("#tabs");
            let tabTogglers = tabsContainer.querySelectorAll(".btn-tab");

            tabTogglers.forEach(function(toggler) {
                toggler.addEventListener("click", function(e) {
                    e.preventDefault();
                    let tabName = this.getAttribute("href");
                    let tabContents = document.querySelector("#tab-contents");

                    for (let i = 0; i < tabContents.children.length; i++) {
                        tabTogglers[i].parentElement.classList.remove("text-blue-600", "border-blue-400", "-mb-px", "opacity-100");
                        tabContents.children[i].classList.remove("hidden");
                        if ("#" + tabContents.children[i].id === tabName) {
                            continue;
                        }
                        tabContents.children[i].classList.add("hidden");
                    }
                    e.target.parentElement.classList.add("text-blue-600", "border-blue-400", "-mb-px", "opacity-100");
                });
            });
            document.getElementById("default-tab").click();

            // set class misi
            let olMisi = document.querySelector('#visi-misi-dapur ol');
            olMisi.setAttribute('class', 'list-disc leading-loose text-slate-700 tracking-wide');
        </script>
    @endpush

</x-app-layout>
