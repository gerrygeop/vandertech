<x-app-layout>
    <x-slot name="header">
        Tambah Mitra Perusahaan
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <section class="p-8 mx-auto bg-white rounded-md shadow-md dark:bg-slate-800">
                
                <form action="{{ route('d.partner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 gap-y-8">
                        <div>
                            <x-label for="name" class="mb-2">Nama Perusahaan</x-label>
                            <x-input id="name" type="text" name="name" class="w-full" value="{{ old('name') }}" />

                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label class="mb-2">Kategori</x-label>
                            <div class="grid grid-rows-none grid-cols-1 md:grid-rows-3 md:grid-flow-col md:grid-cols-none gap-2">
                                @foreach ($categories as $category)
                                    <label for="category{{ $category->id }}" class="col-span-1 flex items-center">
                                        <x-input
                                            type="checkbox"
                                            class="rounded"
                                            id="category{{ $category->id }}"
                                            name="category{{ $category->id }}"
                                            value="{{ $category->id }}" />
            
                                        <span class="ml-2">
                                            {{ $category->name }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <x-label for="logo_path" class="mb-2">Logo</x-label>
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
