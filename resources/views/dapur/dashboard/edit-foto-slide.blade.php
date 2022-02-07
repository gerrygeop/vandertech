<x-app-layout>
    <x-slot name="header">
        Update Foto Slide Vanderteck
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 lg:p-8 mx-auto bg-white border rounded-md shadow-sm">

                <form action="{{ route('d.dashboard.update-foto-slide') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 gap-y-8">
                        <div>
                            <x-label for="photo" class="mb-2">Upload Foto</x-label>
                            <x-input id="photo" type="file" class="w-full p-2 input-file" name="photo[]" multiple />

                            @error('photo')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex mt-12">
                        <x-button>Simpan</x-button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>