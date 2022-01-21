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
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .swiper-button-next,
            .swiper-button-prev{
                color: #334155;
                font-weight: bold
            }
            @media screen and (max-width: 650px) {
                .swiper-button-next:after,
                .swiper-button-prev:after {
                    font-size: 12px !important;
                }
            }
        </style>
    @endpush

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