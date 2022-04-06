<x-app-layout>
    <x-slot name="header">
        Update Visi Misi Vanderteck
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 lg:p-8 mx-auto bg-white border rounded-md shadow-sm">

                <form action="{{ route('d.dashboard.update-visi-misi') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 gap-y-8">
                        <div>
                            <x-label for="visi" class="mb-2">Visi</x-label>
                            <textarea 
                                name="visi" 
                                id="visi" 
                                rows="3"
                                class="w-full form-input">{{ old('visi', $vanderteck->visi) }}</textarea>
                
                            @error('visi')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label for="misi" class="mb-2">Misi</x-label>
                            <textarea 
                                name="misi" 
                                id="misi" 
                                rows="5"
                                class="w-full form-input"
                                placeholder="1. ...">{{ old('misi', $vanderteck->misi) }}</textarea>
                
                            @error('misi')
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