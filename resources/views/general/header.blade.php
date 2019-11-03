<div class="swiper-container swiper-container-header">
    <div class="swiper-wrapper">
        <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h1>Swiper.js Slide 1</h1>
        </div>
        <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h1>Swiper.js Slide 2</h1>
        </div>
        <div class="swiper-slide d-flex justify-content-center align-items-center">
            <h1>Swiper.js Slide 3</h1>
        </div>
    </div>
    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <div class="swiper-scrollbar"></div>
</div>

@push('scripts')
    <script src="{{asset('js/swiper.js')}}"></script>
    <script>
        $(document).ready(function () {
            var mySwiper = new Swiper ('.swiper-container', {
                speed: 400,
                initialSlide: 1,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 3500,
                },
                keyboard: {
                    enabled: true,
                },
            })
        });
    </script>
@endpush