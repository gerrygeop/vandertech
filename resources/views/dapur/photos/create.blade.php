<x-app-layout>
    <x-slot name="header">
        Foto
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <section class="p-4 md:p-8 mx-auto bg-white rounded-md shadow-md">
                
                <form action="{{ route('d.affiliation.photo.store', $affiliation) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-y-4">
                        <div class="col-span-full">
                            <x-label for="photo" class="mb-2">Upload Foto</x-label>
                            <x-input id="photo" type="file" class="w-full p-2 border border-slate-300 bg-slate-100 bg-clip-padding" name="photo[]" multiple />

                            @error('photo')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-end md:justify-start mt-4">
                        <x-button>Upload</x-button>
                    </div>
                </form>
                
                <section class="mt-20 mx-auto bg-white">
                    <h2 class="text-lg text-slate-600 capitalize">Galeri Foto</h2>

                    <div class="p-2 border rounded">
                        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            @forelse ($affiliation->photos as $photo)
                                <div class="w-full max-w-xs text-center border rounded-md overflow-hidden">
                                    <img 
                                        class="object-cover object-center w-full h-48 mx-auto" 
                                        src="{{ $photo->getAffiliationPhoto() }}" 
                                        alt="{{ $affiliation->name }}"
                                    />

                                    <form action="{{ route('d.affiliation.photo.destroy', [$affiliation, $photo]) }}" method="POST">
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
