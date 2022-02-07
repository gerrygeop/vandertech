<x-app-layout>
    @if (session('success'))
        <x-slot name="message">
            {{ session('success') }}
        </x-slot>
    @endif

    <x-slot name="header">
        Foto
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <section class="p-4 md:p-8 mx-auto bg-white rounded-md shadow-md">
                
                <form action="{{ route('d.affiliation.photo.store', $affiliation) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-full">
                        <x-label for="photo" class="mb-2">Upload Foto</x-label>
                        <x-input id="photo" type="file" class="w-full p-2 input-file" name="photo[]" multiple />

                        @error('photo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end md:justify-start mt-6">
                        <x-button>Upload</x-button>
                    </div>
                </form>

                <div class="my-10 border-t border-slate-300"></div>
                
                <section class="mx-auto bg-white">
                    <h2 class="text-base text-slate-600 capitalize">Foto Slide</h2>

                    <div class="py-4">
                        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            @forelse ($affiliation->photos as $photo)
                                <div class="w-full max-w-xs text-center border rounded-md overflow-hidden">
                                    <img 
                                        class="object-cover object-center w-full h-48 mx-auto" 
                                        src="{{ $photo->getPhotoSlideShow() }}" 
                                        alt="{{ $affiliation->name }}"
                                    />

                                    <form 
                                        action="{{ route('d.affiliation.photo.destroy', [$affiliation, $photo]) }}" 
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
                </section>

            </section>
        </div>
    </div>
</x-app-layout>
