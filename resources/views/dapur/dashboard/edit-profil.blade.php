<x-app-layout>
    <x-slot name="header">
        {{ __('Update Profil Vanderteck') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 lg:p-8 mx-auto bg-white border rounded-md shadow-sm">

                <form action="{{ route('d.dashboard.update-profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 gap-y-8">
                        <div>
                            <x-label for="about" class="mb-2">Profil</x-label>
                            <input id="about" type="hidden" name="about" value="{{ old('about', $vanderteck->about) }}">
                            <trix-editor input="about"></trix-editor>

                            @error('about')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label for="image_path" class="mb-2">Gambar Bagan</x-label>
                            <x-input id="image_path" type="file" name="image_path" class="w-full p-2 input-file" />

                            @error('image_path')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="flex items-center mt-12">
                        <a href="{{ route('d.dashboard.main') }}" class="mr-2 btn-secondary">Batal</a>
                        <x-button>Simpan</x-button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>