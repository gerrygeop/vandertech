<div class="min-h-full">

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            @foreach ($slides as $slide)
                <div class="swiper-slide min-h-full aspect-video">
                    <img 
                        src="{{ $slide->getPhotoSlide() }}" 
                        alt="Foto Slide Show">
                </div>
            @endforeach
            
        </div>

        <div class="swiper-button-next bg-slate-50/40 p-3 md:p-4 lg:p-6"></div>
        <div class="swiper-button-prev bg-slate-50/40 p-3 md:p-4 lg:p-6"></div>
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