<x-guest-layout>

    <section class="min-h-screen pt-16 lg:pt-28 pb-24 bg-slate-100/75">
        <div class="max-w-6xl mx-auto lg:px-6">
            <div class="shadow">
                
                @include('newsevent-content')
    
                @if ($news->is_event)
                    <x-divide-section />
    
                    <section class="relative">
                        @include('registration-form')
                    </section>
                @endif
            </div>
        </div>
    </section>

</x-guest-layout>