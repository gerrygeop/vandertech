<x-guest-layout>

    <section class="min-h-screen my-16 text-gray-600">
        <div class="max-w-5xl mx-auto py-0 xl:py-10">
            @include('_news-detail')

            
            @if ($news->is_event)
                <x-divide-section />

                <section class="relative">
                    @include('_contact-wa')
                </section>
            @endif
        </div>
    </section>

    @include('_footer')

</x-guest-layout>