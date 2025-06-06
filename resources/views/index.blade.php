<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home Two || ogenix || ogenix HTML 5 Template </title>    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('images/favicons/site.webmanifest') }}" />
    <meta name="description" content="ogenix HTML 5 Template " />

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/ogenix-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/nice-select.css') }}" />    <!-- template styles -->
    
    <link rel="stylesheet" href="{{ asset('/css/ogenix.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/ogenix-responsive.css') }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        {{-- Header --}}
        <header class="main-header-two">
            <div class="main-header-two__top">
                <div class="container">
                    <div class="main-header-two__top-inner">
                        <div class="main-header-two__logo">
                            <a href="index.html"><img src="{{ asset('images/resources/logo-2.png') }}" alt=""></a>
                        </div>
                        <div class="main-header-two__right">
                            <ul class="list-unstyled main-header-two__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-mobile"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:923076806860">+ 92 ( 307 ) 68 - 06860</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-header-two__search-cart-box">
                                <div class="main-header-two__search-form-box">
                                    <form class="main-header-two__search-form mc-form" data-url="MC_FORM_URL"
                                        novalidate="novalidate">
                                        <div class="main-header-two__search-input-box">
                                            <div class="main-header-two__search-icon"><span
                                                    class="icon-magnifying-glass"></span></div>
                                            <input type="search" placeholder="Search here" name="search">
                                            <button type="submit"
                                                class="main-header-two__search-btn thm-btn">Search</button>
                                        </div>
                                    </form>
                                    <div class="mc-form__response"></div>
                                </div>
                                <div class="main-header-two__cart-box">
                                    <a href="cart.html" class="main-header-two__cart icon-shopping-cart"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-two">
                <div class="main-menu-two__wrapper">
                    <div class="container">
                        <div class="main-menu-two__wrapper-inner">
                            <div class="main-header-two__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="main-menu-two__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list one-page-scroll-menu">
                                    <li class="dropdown current megamenu scrollToLink">
                                        <a href="#home">Home </a>
                                        <ul>
                                            <li>
                                                <section class="home-showcase">
                                                    <div class="container">
                                                        <div class="home-showcase__inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="images/home-showcase/home-showcase-1-1.jpg"
                                                                                alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index.html"
                                                                                    class="thm-btn home-showcase__buttons__item">Multi
                                                                                    Page</a>
                                                                                <a href="index-one-page.html"
                                                                                    class="thm-btn home-showcase__buttons__item">One
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div>
                                                                        <!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">
                                                                            Home
                                                                            Page
                                                                            01</h3>
                                                                        <!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="images/home-showcase/home-showcase-1-2.jpg"
                                                                                alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index2.html"
                                                                                    class="thm-btn home-showcase__buttons__item">Multi
                                                                                    Page</a>
                                                                                <a href="index2-one-page.html"
                                                                                    class="thm-btn home-showcase__buttons__item">One
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div>
                                                                        <!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">
                                                                            Home
                                                                            Page
                                                                            02
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="images/home-showcase/home-showcase-1-3.jpg"
                                                                                alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index3.html"
                                                                                    class="thm-btn home-showcase__buttons__item">Multi
                                                                                    Page</a>
                                                                                <a href="index3-one-page.html"
                                                                                    class="thm-btn home-showcase__buttons__item">One
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div>
                                                                        <!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">
                                                                            Home
                                                                            Page
                                                                            03
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image">
                                                                            <img src="images/home-showcase/home-showcase-1-4.jpg"
                                                                                alt="">
                                                                            <div class="home-showcase__buttons">
                                                                                <a href="index-dark.html"
                                                                                    class="thm-btn home-showcase__buttons__item">View
                                                                                    Page</a>
                                                                            </div>
                                                                            <!-- /.home-showcase__buttons -->
                                                                        </div>
                                                                        <!-- /.home-showcase__image -->
                                                                        <h3 class="home-showcase__title">
                                                                            Home
                                                                            Page
                                                                            04
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.home-showcase__inner -->

                                                    </div><!-- /.container -->
                                                </section>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#services">Services</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#about">About</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#shop">Shop</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#Portfolio">Portfolio</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#news">News</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu-two__right">
                                <ul class="list-unstyled main-menu-two__login">
                                    <li class="active"><a href="#">Login</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-two clearfix" id="home">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
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

                    <div class="swiper-slide">                        <div class="image-layer-two"
                            style="background-image: url({{ asset('images/backgrounds/main-slider-2-1.jpg') }});"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <div class="main-slider-two__shape-1 zoom-fade-2">
                                            <img src="images/shapes/main-slider-two-shape-1.png" alt="">
                                        </div>
                                        <h4 class="main-slider-two__sub-title">Only Organic Products</h4>
                                        <h2 class="main-slider-two__title">Stay Healthy <span>&</span> <br> Eat Organic
                                        </h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="about.html" class="thm-btn main-slider-two__btn-one">Learn more</a>
                                            <a href="product-details.html" class="thm-btn main-slider-two__btn-two">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">                        <div class="image-layer-two"
                            style="background-image: url({{ asset('images/backgrounds/main-slider-2-2.jpg') }});"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <div class="main-slider-two__shape-1 zoom-fade-2">
                                            <img src="images/shapes/main-slider-two-shape-1.png" alt="">
                                        </div>
                                        <h4 class="main-slider-two__sub-title">Only Organic Products</h4>
                                        <h2 class="main-slider-two__title">Stay Healthy <span>&</span> <br> Eat Organic
                                        </h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="about.html" class="thm-btn main-slider-two__btn-one">Learn more</a>
                                            <a href="product-details.html" class="thm-btn main-slider-two__btn-two">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">                        <div class="image-layer-two"
                            style="background-image: url({{ asset('images/backgrounds/main-slider-2-3.jpg') }});"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <div class="main-slider-two__shape-1 zoom-fade-2">
                                            <img src="images/shapes/main-slider-two-shape-1.png" alt="">
                                        </div>
                                        <h4 class="main-slider-two__sub-title">Only Organic Products</h4>
                                        <h2 class="main-slider-two__title">Stay Healthy <span>&</span> <br> Eat Organic
                                        </h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="about.html" class="thm-btn main-slider-two__btn-one">Learn more</a>
                                            <a href="product-details.html" class="thm-btn main-slider-two__btn-two">Shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature Two Start-->
        <section class="feature-two">
            <div class="container">
                <div class="row">
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two__shape-1">
                                    <img src="images/shapes/feature-two-shape-1.png" alt="">
                                </div>
                                <div class="feature-two__img-box">
                                    <div class="feature-two__img">
                                        <img src="images/resources/feature-two-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="feature-two__content">
                                    <h3 class="feature-two__title"><a href="agriculture-services.html">Agriculture
                                            products</a></h3>
                                    <p class="feature-two__sub-title">Vegetables, fruits & berries</p>
                                    <div class="feature-two__btn-box">
                                        <a href="agriculture-services.html" class="thm-btn feature-two__btn">Shop</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two__shape-1">
                                    <img src="images/shapes/feature-two-shape-1.png" alt="">
                                </div>
                                <div class="feature-two__img-box">
                                    <div class="feature-two__img">
                                        <img src="images/resources/feature-two-img-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="feature-two__content">
                                    <h3 class="feature-two__title"><a href="farming-products.html">Farming products</a>
                                    </h3>
                                    <p class="feature-two__sub-title">Eggs, meat & milk</p>
                                    <div class="feature-two__btn-box">
                                        <a href="farming-products.html" class="thm-btn feature-two__btn">Shop</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two__shape-1">
                                    <img src="images/shapes/feature-two-shape-1.png" alt="">
                                </div>
                                <div class="feature-two__img-box">
                                    <div class="feature-two__img">
                                        <img src="images/resources/feature-two-img-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="feature-two__content">
                                    <h3 class="feature-two__title"><a href="organic-services.html">Dry fruits
                                            products</a></h3>
                                    <p class="feature-two__sub-title">Dry fruits, Nuts & product</p>
                                    <div class="feature-two__btn-box">
                                        <a href="organic-services.html" class="thm-btn feature-two__btn">Shop</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                </div>
            </div>
        </section>
        <!--Feature Two End-->

        <!--Categories Two Start-->
        <section class="categories-two" id="services">
            <div class="categories-two__bg-box">
                <div class="categories-two__bg-img-1"
                    style="background-image: url(images/backgrounds/categories-two-bg-img-1.jpg);"></div>
                <div class="categories-two__ripped-paper"
                    style="background-image: url(images/shapes/categories-two-ripped-paper.png);"></div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Checkout New Products</span>
                    <h2 class="section-title__title">Introdusing latest products</h2>
                </div>
                <div class="row">
                    <!--Categories Two Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-4">
                        <div class="categories-two__single" style="--accent-color: #9c72cc;">
                            <div class="categories-two__icon">
                                <span class="icon-vegetable"></span>
                            </div>
                            <h3 class="categories-two__title"><a href="agriculture-services.html">Vegetables</a></h3>
                        </div>
                    </div>
                    <!--Categories Two Single End-->
                    <!--Categories Two Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-4">
                        <div class="categories-two__single" style="--accent-color: #6cbc94;">
                            <div class="categories-two__icon categories-two__icon-2">
                                <span class="icon-fruits"></span>
                            </div>
                            <h3 class="categories-two__title"><a href="farming-products.html">Fresh fruits</a></h3>
                        </div>
                    </div>
                    <!--Categories Two Single End-->
                    <!--Categories Two Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-4">
                        <div class="categories-two__single" style="--accent-color: #50a72c;">
                            <div class="categories-two__icon categories-two__icon-3">
                                <span class="icon-cinnamon"></span>
                            </div>
                            <h3 class="categories-two__title"><a href="organic-services.html">Spices</a></h3>
                        </div>
                    </div>
                    <!--Categories Two Single End-->
                    <!--Categories Two Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-4">
                        <div class="categories-two__single" style="--accent-color: #d7a955;">
                            <div class="categories-two__icon categories-two__icon-4">
                                <span class="icon-walnut"></span>
                            </div>
                            <h3 class="categories-two__title"><a href="delivery-services.html">Dry fruits</a></h3>
                        </div>
                    </div>
                    <!--Categories Two Single End-->
                    <!--Categories Two Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-4">
                        <div class="categories-two__single" style="--accent-color: #5580d7;">
                            <div class="categories-two__icon categories-two__icon-5">
                                <span class="icon-iced-coffee"></span>
                            </div>
                            <h3 class="categories-two__title"><a href="agriculture-services.html">Beverages</a></h3>
                        </div>
                    </div>
                    <!--Categories Two Single End-->
                    <!--Categories Two Single Start-->
                    <div class="col-xl-2 col-lg-4 col-md-4">
                        <div class="categories-two__single" style="--accent-color: #dd637c;">
                            <div class="categories-two__icon categories-two__icon-6">
                                <span class="icon-chop"></span>
                            </div>
                            <h3 class="categories-two__title"><a href="delivery-services.html">Meat</a></h3>
                        </div>
                    </div>
                    <!--Categories Two Single End-->
                </div>
            </div>
        </section>
        <!--Categories Two End-->

        <!--About Two Start-->
        <section class="about-two" id="about">
            <div class="about-two__shape-4 zoominout">
                <img src="images/shapes/about-two-shape-4.png" alt="">
            </div>
            <div class="about-two__shape-5 img-bounce">
                <img src="images/shapes/about-two-shape-5.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Get to Know us</span>
                                <h2 class="section-title__title">Provider of only organic
                                    & healthy food</h2>
                            </div>
                            <p class="about-two__text">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even.</p>
                            <ul class="about-two__points-box list-unstyled">
                                <li>
                                    <div class="about-two__content">
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>Local growth</p>
                                        </div>
                                    </div>
                                    <p class="about-two__points-text">Lorem ipsum dolor sited amet consectetur notted.
                                    </p>
                                </li>
                                <li>
                                    <div class="about-two__content">
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>Healthy food</p>
                                        </div>
                                    </div>
                                    <p class="about-two__points-text">Lorem ipsum dolor sited amet consectetur notted.
                                    </p>
                                </li>
                            </ul>
                            <div class="about-two__btn-box">
                                <a href="about.html" class="about-two__btn thm-btn">Discover more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="about-two__img-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-two__img-1">
                                    <img src="images/resources/about-two-img-1.jpg" alt="">
                                    <div class="about-two__shape-1 float-bob-y">
                                        <img src="images/shapes/about-two-shape-1.png" alt="">
                                    </div>
                                    <div class="about-two__shape-2 zoominout">
                                        <img src="images/shapes/about-two-shape-2.png" alt="">
                                    </div>
                                    <div class="about-two__shape-3 float-bob-x">
                                        <img src="images/shapes/about-two-shape-3.png" alt="">
                                    </div>
                                </div>
                                <div class="about-two__img-2">
                                    <img src="images/resources/about-two-img-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->

        <!--Banner Two Start-->
        <section class="banner-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="banner-two__inner">
                                <div class="banner-two__img-1">
                                    <img src="images/resources/banner-two-img-1.png" alt="">
                                </div>
                                <div class="banner-two__shape-1">
                                    <img src="images/shapes/banner-two-shape-1.png" alt="">
                                </div>
                                <p class="banner-two__tagline">10% <span>off</span></p>
                                <h3 class="banner-two__title">Daily Organic
                                    <br> Vegetables</h3>
                                <div class="banner-two__btn-box">
                                    <a href="product-details.html" class="banner-two__btn thm-btn">Shop selected
                                        items</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner-two__right wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="banner-two__inner">
                                <div class="banner-two__img-1">
                                    <img src="images/resources/banner-two-img-2.png" alt="">
                                </div>
                                <div class="banner-two__shape-1">
                                    <img src="images/shapes/banner-two-shape-2.png" alt="">
                                </div>
                                <p class="banner-two__tagline">10% <span>off</span></p>
                                <h3 class="banner-two__title">Daily Healthy
                                    <br> Breakfast</h3>
                                <div class="banner-two__btn-box">
                                    <a href="product-details.html" class="banner-two__btn thm-btn">Shop selected
                                        items</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner Two End-->

        <!--Video One Start-->
        <section class="video-one">
            <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(images/backgrounds/video-one-bg.jpg)"></div>
            <div class="video-one-border"></div>
            <div class="video-one-border video-one-border-two"></div>
            <div class="video-one-border video-one-border-three"></div>
            <div class="video-one-border video-one-border-four"></div>
            <div class="video-one-border video-one-border-five"></div>
            <div class="video-one-border video-one-border-six"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__inner">
                            <div class="video-one__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="video-one__shape">
                                <img src="images/shapes/video-one-shape-1.png" alt="">
                            </div>
                            <h2 class="video-one__video-title">Be healthy & eat only
                                <br> fresh organic vegetables</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video One End-->

        <!--Cta One Start-->
        <section class="cta-one">
            <div class="cta-one__bg-img" style="background-image: url(images/backgrounds/cta-one-bg-img-1.png);">
            </div>
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__img-1">
                        <img src="images/resources/cta-one-img-1.png" alt="">
                    </div>
                    <div class="cta-one__left">
                        <div class="cta-one__title-box">
                            <span class="cta-one__tagline">Need Ogenix Help?</span>
                            <h2 class="cta-one__title">We’re leader in organic market</h2>
                        </div>
                    </div>
                    <div class="cta-one__right">
                        <div class="cta-one__btn-box">
                            <a href="about.html" class="cta-one__btn thm-btn">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Cta One End-->

        <!--Hot Products Two Start-->
        <section class="hot-products-two" id="shop">
            <div class="container">
                <div class="hot-products-two__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Checkout New Products</span>
                                <h2 class="section-title__title">Introdusing new products</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="hot-products-two__filter-box">
                                <ul class="hot-products-two__filter style1 post-filter list-unstyled clearfix">
                                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span>
                                    </li>
                                    <li data-filter=".fruits"><span class="filter-text">Fruits</span></li>
                                    <li data-filter=".vegetables"><span class="filter-text">Vegetables</span></li>
                                    <li data-filter=".fresh"><span class="filter-text">Fresh</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hot-products-two__bottom">
                    <div class="row filter-layout">
                        <!-- Hot Products Two Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 filter-item fresh vegetables">
                            <div class="hot-products__single">
                                <div class="hot-products__single-inner">
                                    <div class="hot-products__img-box">
                                        <div class="hot-products__img">
                                            <img src="images/resources/hot-product-1-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="hot-products__content">
                                        <div class="hot-products__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="hot-products__title"><a href="product-details.html">Bananas</a></h3>
                                        <p class="hot-products__price">$18.00</p>
                                        <div class="hot-products__btn-box">
                                            <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="hot-products__icon-boxes">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hot Products Two Single End -->
                        <!-- Hot Products Two Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 filter-item fruits fresh">
                            <div class="hot-products__single">
                                <div class="hot-products__single-inner">
                                    <div class="hot-products__img-box">
                                        <div class="hot-products__img">
                                            <img src="images/resources/hot-product-1-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="hot-products__content">
                                        <div class="hot-products__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="hot-products__title"><a href="product-details.html">Potatos</a></h3>
                                        <p class="hot-products__price">$22.00</p>
                                        <div class="hot-products__btn-box">
                                            <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="hot-products__icon-boxes">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hot Products Two Single End -->
                        <!-- Hot Products Two Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 filter-item fresh vegetables">
                            <div class="hot-products__single">
                                <div class="hot-products__single-inner">
                                    <div class="hot-products__img-box">
                                        <div class="hot-products__img">
                                            <img src="images/resources/hot-product-1-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="hot-products__content">
                                        <div class="hot-products__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="hot-products__title"><a href="product-details.html">Apples</a></h3>
                                        <p class="hot-products__price">$16.00</p>
                                        <div class="hot-products__btn-box">
                                            <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="hot-products__icon-boxes">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hot Products Two Single End -->
                        <!-- Hot Products Two Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 filter-item vegetables">
                            <div class="hot-products__single">
                                <div class="hot-products__single-inner">
                                    <div class="hot-products__img-box">
                                        <div class="hot-products__img">
                                            <img src="images/resources/hot-product-1-4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="hot-products__content">
                                        <div class="hot-products__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="hot-products__title"><a href="product-details.html">Lettus</a></h3>
                                        <p class="hot-products__price">$9.00</p>
                                        <div class="hot-products__btn-box">
                                            <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="hot-products__icon-boxes">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hot Products Two Single End -->
                        <!-- Hot Products Two Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 filter-item fruits">
                            <div class="hot-products__single">
                                <div class="hot-products__single-inner">
                                    <div class="hot-products__img-box">
                                        <div class="hot-products__img">
                                            <img src="images/resources/hot-product-1-5.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="hot-products__content">
                                        <div class="hot-products__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="hot-products__title"><a href="product-details.html">Brown Bread</a>
                                        </h3>
                                        <p class="hot-products__price">$23.00</p>
                                        <div class="hot-products__btn-box">
                                            <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="hot-products__icon-boxes">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hot Products Two Single End -->
                        <!-- Hot Products Two Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 filter-item vegetables">
                            <div class="hot-products__single">
                                <div class="hot-products__single-inner">
                                    <div class="hot-products__img-box">
                                        <div class="hot-products__img">
                                            <img src="images/resources/hot-product-1-6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="hot-products__content">
                                        <div class="hot-products__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="hot-products__title"><a href="product-details.html">Lemos</a></h3>
                                        <p class="hot-products__price">$10.00</p>
                                        <div class="hot-products__btn-box">
                                            <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="hot-products__icon-boxes">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hot Products Two Single End -->
                        <!-- Hot Products Two Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 filter-item fresh vegetables">
                            <div class="hot-products__single">
                                <div class="hot-products__single-inner">
                                    <div class="hot-products__img-box">
                                        <div class="hot-products__img">
                                            <img src="images/resources/hot-product-1-7.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="hot-products__content">
                                        <div class="hot-products__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="hot-products__title"><a href="product-details.html">Red grapes</a>
                                        </h3>
                                        <p class="hot-products__price">$17.00</p>
                                        <div class="hot-products__btn-box">
                                            <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="hot-products__icon-boxes">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hot Products Two Single End -->
                        <!-- Hot Products Two Single Start -->
                        <div class="col-xl-3 col-lg-6 col-md-6 filter-item vegetables">
                            <div class="hot-products__single">
                                <div class="hot-products__single-inner">
                                    <div class="hot-products__img-box">
                                        <div class="hot-products__img">
                                            <img src="images/resources/hot-product-1-8.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="hot-products__content">
                                        <div class="hot-products__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="hot-products__title"><a href="product-details.html">Tomattos</a></h3>
                                        <p class="hot-products__price">$23.00</p>
                                        <div class="hot-products__btn-box">
                                            <a href="cart.html" class="hot-products__btn thm-btn">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="hot-products__icon-boxes">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hot Products Two Single End -->
                    </div>
                </div>
            </div>
        </section>
        <!--Hot Products Two End-->

        <!--Gallery One Start-->
        <section class="gallery-one gallery-two" id="Portfolio">
            <div class="section-title text-center">
                <span class="section-title__tagline">Checkout Portfolio</span>
                <h2 class="section-title__title">We recently completed our
                    <br> few works</h2>
            </div>
            <div class="container">
                <div class="row">
                    <!--Gallery One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img-box">
                                <div class="gallery-one__img">
                                    <img src="images/resources/gallery-1-1.jpg" alt="">
                                </div>
                                <div class="gallery-one__content-box">
                                    <div class="gallery-one__content">
                                        <div class="gallery-one__shape-1">
                                            <img src="images/shapes/gallery-one-shape-1.png" alt="">
                                        </div>
                                        <div class="gallery-one__title-box">
                                            <h3 class="gallery-one__title"><a href="portfolio-details.html">Healthy
                                                    food</a></h3>
                                            <p class="gallery-one__sub-title">Vegan, Organic</p>
                                        </div>
                                    </div>
                                    <div class="gallery-one__arrow-box">
                                        <a href="portfolio-details.html" class="gallery-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img-box">
                                <div class="gallery-one__img">
                                    <img src="images/resources/gallery-1-2.jpg" alt="">
                                </div>
                                <div class="gallery-one__content-box">
                                    <div class="gallery-one__content">
                                        <div class="gallery-one__shape-1">
                                            <img src="images/shapes/gallery-one-shape-1.png" alt="">
                                        </div>
                                        <div class="gallery-one__title-box">
                                            <h3 class="gallery-one__title"><a href="portfolio-details.html">Healthy
                                                    food</a></h3>
                                            <p class="gallery-one__sub-title">Vegan, Organic</p>
                                        </div>
                                    </div>
                                    <div class="gallery-one__arrow-box">
                                        <a href="portfolio-details.html" class="gallery-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img-box">
                                <div class="gallery-one__img">
                                    <img src="images/resources/gallery-1-3.jpg" alt="">
                                </div>
                                <div class="gallery-one__content-box">
                                    <div class="gallery-one__content">
                                        <div class="gallery-one__shape-1">
                                            <img src="images/shapes/gallery-one-shape-1.png" alt="">
                                        </div>
                                        <div class="gallery-one__title-box">
                                            <h3 class="gallery-one__title"><a href="portfolio-details.html">Healthy
                                                    food</a></h3>
                                            <p class="gallery-one__sub-title">Vegan, Organic</p>
                                        </div>
                                    </div>
                                    <div class="gallery-one__arrow-box">
                                        <a href="portfolio-details.html" class="gallery-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img-box">
                                <div class="gallery-one__img">
                                    <img src="images/resources/gallery-1-4.jpg" alt="">
                                </div>
                                <div class="gallery-one__content-box">
                                    <div class="gallery-one__content">
                                        <div class="gallery-one__shape-1">
                                            <img src="images/shapes/gallery-one-shape-1.png" alt="">
                                        </div>
                                        <div class="gallery-one__title-box">
                                            <h3 class="gallery-one__title"><a href="portfolio-details.html">Healthy
                                                    food</a></h3>
                                            <p class="gallery-one__sub-title">Vegan, Organic</p>
                                        </div>
                                    </div>
                                    <div class="gallery-one__arrow-box">
                                        <a href="portfolio-details.html" class="gallery-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                </div>
            </div>
        </section>
        <!--Gallery One End-->

        <!--Deal One Start-->
        <section class="deal-one">
            <div class="deal-one__shape-4 float-bob-x">
                <img src="images/shapes/deal-one-shape-4.png" alt="">
            </div>
            <div class="deal-one__shape-5 zoominout">
                <img src="images/shapes/deal-one-shape-5.png" alt="">
            </div>
            <div class="deal-one__bg-img"
                style="background-image: url(images/backgrounds/deal-one-bg-img-.jpg);"></div>
            <div class="deal-one__bg-img-2"
                style="background-image: url(images/backgrounds/deal-one-bg-img-2.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="deal-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Sales on Weekly Offers</span>
                                <h2 class="section-title__title">Our special products deal <br>
                                    of the day</h2>
                            </div>
                            <p class="deal-one__text">Lorem ipsum dolor sit amet nsectetur cing elit. Suspe ndisse
                                suscipit
                                sagittis leo sit met entum estibu dignissim.</p>
                            <div class="deal-one__coundown-box">
                                <div class="default-coundown">
                                    <div class="box">
                                        <div class="countdown time-countdown-two" data-countdown-time="2023/12/07">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="deal-one__right">
                            <div class="deal-one__img wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="images/resources/deal-one-img-1.png" alt="">
                                <div class="deal-one__shape-1 zoominout">
                                    <img src="images/shapes/deal-one-shape-1.png" alt="">
                                </div>
                                <div class="deal-one__shape-2 float-bob-x">
                                    <img src="images/shapes/deal-one-shape-2.png" alt="">
                                </div>
                                <div class="deal-one__shape-3 zoominout">
                                    <img src="images/shapes/deal-one-shape-3.png" alt="">
                                </div>
                                <div class="deal-one__big-text">Healthy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Deal One End-->

        <!--News One Start-->
        <section class="news-two" id="news">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">From the Blog Posts</span>
                    <h2 class="section-title__title">Latest news updates
                        <br> & articles</h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="images/blog/news-1-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="news-one__content-box">
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                    </li>
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="news-details.html">Which healthy food growth
                                        strategies required</a></h3>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="news-details.html">Read More</a>
                                    </div>
                                    <div class="news-one__comment">
                                        <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p>20 Sep</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="images/blog/news-1-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="news-one__content-box">
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                    </li>
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="news-details.html">Donec aliquet blandit enim
                                        feugiat Suspendisse</a></h3>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="news-details.html">Read More</a>
                                    </div>
                                    <div class="news-one__comment">
                                        <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p>20 Sep</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="images/blog/news-1-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="news-one__content-box">
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                    </li>
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="news-details.html">luctus sit amet eu nibh tempus
                                        turpis.</a></h3>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="news-details.html">Read More</a>
                                    </div>
                                    <div class="news-one__comment">
                                        <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p>20 Sep</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <!--Subscribe One Start-->
        <section class="subscribe-one">
            <div class="container">
                <div class="subscribe-one__inner">
                    <div class="subscribe-one__shape-1 float-bob-x">
                        <img src="images/shapes/subscribe-one-shape-1.png" alt="">
                    </div>
                    <div class="subscribe-one__shape-2 float-bob-y">
                        <img src="images/shapes/subscribe-one-shape-2.png" alt="">
                    </div>
                    <div class="subscribe-one__shape-4 float-bob-y">
                        <img src="images/shapes/subscribe-one-shape-4.png" alt="">
                    </div>
                    <div class="subscribe-one__shape-5 zoominout">
                        <img src="images/shapes/subscribe-one-shape-5.png" alt="">
                    </div>
                    <div class="subscribe-one__inner-content">
                        <div class="subscribe-one__shape-3 float-bob-x">
                            <img src="images/shapes/subscribe-one-shape-3.png" alt="">
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="subscribe-one__left">
                                    <div class="icon">
                                        <span class="icon-folder"></span>
                                    </div>
                                    <div class="subscribe-one__title-box">
                                        <span class="subscribe-one__tagline">Quisque vel ortor</span>
                                        <h2 class="subscribe-one__title">Subscribe to newsletter</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="subscribe-one__right">
                                    <div class="subscribe-one__shape-6 float-bob-x">
                                        <img src="images/shapes/subscribe-one-shape-6.png" alt="">
                                    </div>
                                    <div class="subscribe-one__form-box">
                                        <form class="subscribe-one__form mc-form" data-url="MC_FORM_URL">
                                            <div class="subscribe-one__input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                                <button type="submit" class="subscribe-one__btn"><i
                                                        class="fas fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                        <div class="mc-form__response"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Subscribe One End-->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__bg"
                style="background-image: url(images/backgrounds/site-footer-bg-img.png);"></div>
            <div class="site-footer__ripped-paper"
                style="background-image: url(images/shapes/site-footer-ripped-paper.png);"></div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.html"><img src="images/resources/footer-logo.png" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">We’re Providing Everyday Fresh <br> and
                                        Quality
                                        Products.</p>
                                </div>
                                <div class="footer-widget__social-box">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Explore</h3>
                                </div>
                                <div class="footer-widget__explore-list-box">
                                    <ul class="footer-widget__explore-list list-unstyled">
                                        <li><a href="about.html">About Company</a></li>
                                        <li><a href="services.html">Our Services</a></li>
                                        <li><a href="pricing.html">Become a Seller</a></li>
                                        <li><a href="products.html">New Products</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <p class="footer-widget__contact-text">Valentin, Street Road 24, New York,
                                    USA - 67452</p>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="text">
                                            <p><a href="tel:928800688960">+92 (8800) 68 - 8960</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text">
                                            <p><a href="mailto:info@example.com ">info@example.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__gallery">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Gallery</h3>
                                </div>
                                <ul class="footer-widget__gallery-list list-unstyled clearfix">
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="images/resources/footer-widget-gallery-img-1.jpg" alt="">
                                            <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="images/resources/footer-widget-gallery-img-2.jpg" alt="">
                                            <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="images/resources/footer-widget-gallery-img-3.jpg" alt="">
                                            <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="images/resources/footer-widget-gallery-img-4.jpg" alt="">
                                            <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="images/resources/footer-widget-gallery-img-5.jpg" alt="">
                                            <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__gallery-img">
                                            <img src="images/resources/footer-widget-gallery-img-6.jpg" alt="">
                                            <a href="portfolio-details.html"><span class="fa fa-link"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-left">
                                    <p class="site-footer__bottom-text">© Copyright 2023 by <a href="#">Company.com</a>
                                    </p>
                                </div>
                                <div class="site-footer__bottom-right">
                                    <ul class="list-unstyled site-footer__bottom-menu">
                                        <li><a href="about.html">Terms & Conditions</a></li>
                                        <li><span>/</span></li>
                                        <li><a href="about.html">Privacy Policy</a></li>
                                        <li><span>/</span></li>
                                        <li><a href="about.html">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="images/resources/logo-1.png" width="104"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@ogenix.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>
    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('vendors/countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/jquery.nice-select.min.js') }}"></script>


    <!-- template js -->
    <script src="{{ asset('js/ogenix.js') }}"></script>
</body>

</html>