<!--Main Slider Start-->
<section class="main-slider-two clearfix" id="home">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
        <div class="swiper-wrapper">
            @foreach (\App\Models\MainBanner::all() as $banner)
                <div class="swiper-slide">
                    <div class="image-layer-two"
                        style="background-image: url({{ asset('storage/' . $banner->image) }}); background-size: cover; background-position: center;">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <h4 class="main-slider-two__sub-title">{{ $banner->sub_title }}</h4>
                                    <h2 class="main-slider-two__title">{{ $banner->title }}</h2>
                                    <div class="main-slider-two__btn-box">
                                        {{-- <a href="about.html" class="thm-btn main-slider-two__btn-one">Learn more</a> --}}
                                        <a href="#shop" class="thm-btn main-slider-two__btn-two">Shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>

    </div>
</section>
<!--Main Slider End-->
