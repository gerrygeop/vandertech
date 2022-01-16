<x-guest-layout>

    <section class="min-h-screen mt-16 pb-24 bg-white text-gray-600">
        <div class="max-w-5xl mx-auto">
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