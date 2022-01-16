<x-guest-layout>

    <section class="min-h-screen mt-16 text-gray-600">    
        <div class="max-w-6xl mx-auto px-4 pb-14 pt-8 lg:pt-12">

            <div class="flex flex-wrap w-full mb-6 lg:mb-8">
                <div>
                    <h1 class="text-2xl lg:text-3xl font-medium mb-2 text-gray-800 dark:text-gray-100">News & Event</h1>
                    <div class="h-0.5 w-20 bg-indigo-500 dark:bg-indigo-300 rounded"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                @foreach ($news as $new)
                    <x-card-news 
                        link="{{ route('news-event.detail', $new) }}" 
                        cover="{{ $new->getPhoto() }}" 
                        timestamp="{{ $new->created_at }}"
                        heading="{{ $new->title }}"
                        isEvent="{{ $new->is_event }}"
                    >
                    </x-card-news>
                @endforeach

            </div>
        </div>
    </section>

    @include('_footer')

</x-guest-layout>