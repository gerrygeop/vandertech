<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Perusahaan Afiliasi') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <section class="p-8 mx-auto bg-white rounded-md shadow-md dark:bg-slate-800">
                
                <form action="{{ route('d.affiliation.update', $affiliation) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="w-32">
                        <x-toggle-switch name="hidden" value="1" checked="{{ $affiliation->status }}">
                            Sembunyikan
                        </x-toggle-switch>
                    </div>

                    <hr class="my-6 border-slate-200" />

                    <div class="grid grid-cols-1 gap-y-8">
                        <div>
                            <x-label for="name" class="mb-2">Nama Perusahaan</x-label>
                            <x-input id="name" type="text" name="name" class="w-full" value="{{ old('name', $affiliation->name) }}" />

                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label for="description" class="mb-2">Deskripsi</x-label>
                            <input id="description" type="hidden" name="description" value="{{ old('description', $affiliation->description) }}">
                            <trix-editor input="description"></trix-editor>

                            @error('description')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label for="logo_path" class="mb-2">Logo</x-label>
                            <div class="h-16 mb-4">
                                <img src="{{ $affiliation->getLogoAffiliation() }}" alt="{{ $affiliation->name }}" class="h-full w-auto bg-cover rounded">
                            </div>
                            <x-input id="logo_path" type="file" name="logo_path" class="w-full" />

                            @error('logo_path')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col p-4 mt-4 border rounded-md">
                            <div class="mb-3">
                                <p class="font-light text-sm text-slate-500 italic">*Kontak (kosongkan jika tidak diperlukan)</p>
                            </div>

                            <div class="mt-6">
                                <x-label for="address" class="mb-2">Alamat</x-label>
                                <x-input id="address" type="text" name="address" class="w-full" value="{{ old('address', $affiliation->address) }}" />
    
                                @error('address')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6">
                                <x-label for="telp" class="mb-2">Telp</x-label>
                                <x-input id="telp" type="tel" name="telp" class="w-full" placeholder="+628123456789" value="{{ old('telp', $affiliation->telp) }}" />
    
                                @error('telp')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6">
                                <x-label for="email" class="mb-2">Email</x-label>
                                <x-input id="email" type="email" name="email" class="w-full" value="{{ old('email', $affiliation->email) }}" />
    
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6">
                                <x-label for="maps" class="mb-2">Maps</x-label>
                                <textarea 
                                    name="maps" 
                                    id="maps" 
                                    rows="5"
                                    class="w-full form-input"
                                    placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958...">{{ old('maps', $affiliation->maps) }}</textarea>
    
                                @error('maps')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="flex mt-12">
                        <x-button>Simpan</x-button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</x-app-layout>
