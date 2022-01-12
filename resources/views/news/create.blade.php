<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <section class="p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
                <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Create News</h2>
                
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 gap-6 mt-4">
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="judul">Judul</label>
                            <input id="judul" type="text" name="judul" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="body">Teks</label>
                            <textarea id="body" rows="10" name="body" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"></textarea>
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="news_photo_path">Cover</label>
                            <input id="news_photo_path" type="file" name="news_photo_path" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>

                    </div>

                    <div class="flex justify-end mt-6">
                        <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Simpan</button>
                    </div>
                </form>
            </section>

        </div>
    </div>
</x-app-layout>
