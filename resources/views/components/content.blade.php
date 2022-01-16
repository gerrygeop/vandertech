<x-guest-layout>

    @push('styles')
        <style>
            .swiper {
                width: 100%;
                height: 100%;
            }

            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fefefe;

                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
            }

            .swiper-slide img {
                display: block;
                width: auto;
                height: 100%;
                object-fit: cover;
            }
            .swiper-button-next,
            .swiper-button-prev{
                color: #2563eb;
                height: 20px !important;
                width: 10px !important;
                font-weight: bold
            }
        </style>
    @endpush

    <section class="min-h-screen mt-16 pb-24 bg-white text-gray-600">
        <div class="max-w-5xl mx-auto">

            {{ $slot }}

        </div>
    </section>

    @include('_footer')

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