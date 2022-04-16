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
        <x-input id="logo_path" type="file" name="logo_path" class="w-full p-2 input-file" />

        @error('logo_path')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <x-label for="order" class="mb-2">No Urutan</x-label>
        <x-input id="order" type="number" name="order" class="w-full" value="{{ old('order', $affiliation->order) }}" />

        @error('order')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <hr class="my-3 border-slate-200" />
    
    <div class="border rounded-md p-4">
        <div class="inline-flex items-center space-x-1 border-b-2 border-indigo-300 italic">
            <p class="font-medium text-lg text-slate-600">Visi & Misi</p>
            <span class="font-light text-sm text-slate-500">(kosongkan jika tidak diperlukan)</span>
        </div>

        <div class="flex flex-col mt-6">
            <div>
                <x-label for="visi" class="mb-2">Visi</x-label>
                <textarea 
                name="visi" 
                id="visi" 
                rows="3"
                class="w-full form-input">{{ old('visi', $affiliation->visi) }}</textarea>
    
                @error('visi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mt-6">
                <x-label for="misi" class="mb-2">Misi</x-label>
                <textarea 
                    name="misi" 
                    id="misi" 
                    rows="6"
                    class="w-full form-input"
                    placeholder="1. ...">{{ old('misi', $affiliation->misi) }}</textarea>
    
                @error('misi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <hr class="my-3 border-slate-200" />
    
    <div class="border rounded-md p-4">
        <div class="inline-flex items-center space-x-1 border-b-2 border-indigo-300 italic">
            <p class="font-medium text-lg text-slate-600">Pelatihan</p>
            <span class="font-light text-sm text-slate-500">(kosongkan jika tidak diperlukan)</span>
        </div>

        <div class="flex flex-col mt-6">
            <div>
                <x-label for="training_name" class="mb-2">Nama Pelatihan</x-label>
                <x-input id="training_name" type="text" name="training_name" class="w-full" value="{{ old('training_name', $affiliation->training_name) }}" />
    
                @error('training_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mt-6">
                <x-label for="training" class="mb-2">List Pelatihan</x-label>
                <textarea 
                    name="training" 
                    id="training" 
                    rows="6"
                    class="w-full form-input"
                    placeholder="1. ...">{{ old('training', $affiliation->training) }}</textarea>
    
                @error('training')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <hr class="my-3 border-slate-200" />

    <div class="border rounded-md p-4">
        <div class="inline-flex items-center space-x-1 border-b-2 border-indigo-300 italic">
            <p class="font-medium text-lg text-slate-600">Kontak</p>
            <span class="font-light text-sm text-slate-500">(kosongkan jika tidak diperlukan)</span>
        </div>

        <div class="flex flex-col mt-6">
            <div>
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
                <x-input id="email" type="email" name="email" class="w-full" placeholder="example@email.com" value="{{ old('email', $affiliation->email) }}" />
    
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

</div>