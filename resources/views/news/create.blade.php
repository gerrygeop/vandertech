<x-app-layout>
    <x-slot name="header">
        {{ __('Create News & Event') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
            <section class="p-8 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
                
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 gap-y-8">
                        <div>
                            <x-label for="title" class="mb-2">Judul</x-label>
                            <x-input id="title" type="text" name="title" class="w-full px-4 py-2" value="{{ old('title') }}" />

                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label for="body" class="mb-2">Teks</x-label>
                            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                            <trix-editor input="body"></trix-editor>

                            @error('body')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <x-label for="news_photo_path" class="mb-2">Cover</x-label>
                            <x-input id="news_photo_path" type="file" name="news_photo_path" class="w-full" />

                            @error('news_photo_path')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col p-4 mt-4 border rounded-md">
                            <div class="mb-3">
                                <p class="font-light text-sm text-gray-500 italic">*Form/kontak pendaftaran untuk pelatihan (kosongkan jika tidak diperlukan)</p>
                            </div>

                            <div>
                                <div class="flex items-center">
                                    <x-input id="is_event" name="is_event" type="checkbox" value="1" />
                                    <label for="is_event" class="ml-2 block text-sm font-medium text-gray-700">
                                        Aktifkan
                                    </label>
                                </div>

                                @error('is_event')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6">
                                <x-label for="contact" class="mb-2">Whatsapp</x-label>
                                <x-input id="contact" type="tel" name="contact" class="w-full px-4 py-2" placeholder="628123456789" value="{{ old('contact') }}" />
    
                                @error('contact')
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
