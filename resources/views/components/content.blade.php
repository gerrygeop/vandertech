<x-guest-layout>

    <section class="min-h-screen my-16 text-gray-600">
        <div class="max-w-6xl mx-auto">

            {{ $slot }}

        </div>
    </section>

    @include('_footer')

</x-guest-layout>