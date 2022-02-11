<x-guest-layout>

    <section class="min-h-screen pt-16 lg:pt-20 pb-24 bg-white text-slate-600">
        <div>
            {{ $swiper }}
        </div>

        <div class="max-w-6xl mx-auto">
            {{ $slot }}
        </div>
    </section>

    @push('scripts')
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            });
        </script>
    @endpush

</x-guest-layout>