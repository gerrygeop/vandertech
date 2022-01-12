<x-guest-layout>

    <section class="mt-20 text-gray-600">    
        <div class="max-w-6xl mx-auto py-16">
            
            <div class="mx-auto overflow-hidden bg-white dark:bg-gray-800">
                <img class="object-cover w-full h-64" src="{{ $new->getPhoto() }}" alt="Article">

                <div class="p-6">
                    <div>
                        {{-- <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Product</span> --}}
                        <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform dark:text-white hover:text-gray-600 hover:underline">{{ $new->title }}</a>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ $new->body }}</p>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">{{ $new->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('_footer')

</x-guest-layout>