<x-guest-layout>

    <section class="mt-20 text-gray-600">    
        <div class="max-w-6xl mx-auto py-16">

            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium mb-2 text-gray-900">News & Event</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
            </div>

            <div class="flex flex-wrap -m-4">

                @foreach ($news as $new)
                    <x-card-news link="{{ route('news-event-detail', $new) }}" cover="{{ $new->getPhoto() }}" heading="{{ $new->title }}">
                        {{ $new->body }}
                    </x-card-news>
                @endforeach

            </div>
        </div>
    </section>

    @include('_footer')

</x-guest-layout>