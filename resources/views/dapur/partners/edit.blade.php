<x-app-layout>
    <x-slot name="header">
        Edit Mitra Perusahaan
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <section class="p-8 mx-auto bg-white rounded-md shadow-md">
                
                <form action="{{ route('d.partner.update', $partner) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 gap-y-8">
                        <div>
                            <x-label for="name" class="mb-2">Nama Perusahaan</x-label>
                            <x-input id="name" type="text" name="name" class="w-full" value="{{ old('name', $partner->name) }}" />

                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label class="mb-2">Kategori</x-label>
                            <div class="grid grid-rows-none grid-cols-1 md:grid-rows-3 md:grid-flow-col md:grid-cols-none gap-2">
                                @foreach ($categories as $category)
                                    <label for="category{{ $category->id }}" class="col-span-1 flex items-center">
                                        <input
                                            type="checkbox"
                                            class="form-input rounded"
                                            id="category{{ $category->id }}"
                                            name="category{{ $category->id }}"
                                            value="{{ $category->id }}"
                                            @foreach ($partner->categories as $partner_category)
                                                    {{ $partner_category->id == $category->id ? 'checked' : '' }}
                                            @endforeach />
            
                                        <span class="ml-2">
                                            {{ $category->name }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <x-label for="logo_path" class="mb-2">Logo</x-label>
                            <div class="h-16 mb-4">
                                <img src="{{ $partner->getLogoPartner() }}" alt="{{ $partner->name }}" class="h-full w-auto bg-cover rounded">
                            </div>
                            <x-input id="logo_path" type="file" name="logo_path" class="w-full" />

                            @error('logo_path')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
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
