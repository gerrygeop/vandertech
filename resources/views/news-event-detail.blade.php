<x-guest-layout>

    <section class="min-h-screen pt-20 pb-24 bg-slate-100/75">
        <div class="max-w-6xl mx-auto px-3 lg:px-6">
            <div class="shadow">
                @include('_news-detail')
    
                @if ($news->is_event)
                    <x-divide-section />
    
                    <section class="relative">
                        @include('_contact-wa')
                    </section>
                @endif
            </div>
        </div>
    </section>

</x-guest-layout>