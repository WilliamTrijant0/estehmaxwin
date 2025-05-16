<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Ogenix HTML 5 Template' }}</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('images/favicons/site.webmanifest') }}" />
    <meta name="description" content="ogenix HTML 5 Template " />

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" />
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
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/nice-select.css') }}" />
    
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('/css/ogenix.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/ogenix-responsive.css') }}" />

    {{ $styles ?? '' }}
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        <x-header />

        {{ $slot }}

        <x-footer />
    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="images/resources/logo-1.png" width="104" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
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

    <!-- scripts -->
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

    {{ $scripts ?? '' }}
</body>

</html>
