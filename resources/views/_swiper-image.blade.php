@push('styles')
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: black;

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
            height: 20px !important;
            width: 10px !important;
            font-weight: bold
        }
    </style>
@endpush

<div class="min-h-full">

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide min-h-full aspect-video">
                <img 
                    src="{{ url('image/intienergi/12.jpeg') }}" 
                    alt="">
            </div>
            <div class="swiper-slide min-h-full aspect-video">
                <img 
                src="{{ url('image/intienergi/5.jpeg') }}"
                    alt="">
            </div>
            <div class="swiper-slide min-h-full aspect-video">
                <img 
                    src="{{ url('image/intienergi/2.jpeg') }}"
                    alt="">
            </div>
            <div class="swiper-slide min-h-full aspect-video">
                <img 
                    src="{{ url('image/intienergi/6.jpeg') }}"
                    alt="">
            </div>
            <div class="swiper-slide min-h-full aspect-video">
                <img 
                    src="{{ url('image/intienergi/4.jpeg') }}"
                    alt="">
            </div>
        </div>

        <div class="swiper-button-next bg-slate-50/40 p-6"></div>
        <div class="swiper-button-prev bg-slate-50/40 p-6"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

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