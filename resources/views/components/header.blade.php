<header class="main-header-two">
    <div class="main-header-two__top">
        <div class="container">
            <div class="main-header-two__top-inner">
                <div class="main-header-two__logo">
                    <a href="/"><img src="{{ asset('images/resources/logo-2.png') }}" alt=""></a>
                </div>
                <div class="main-header-two__right">
                    <ul class="list-unstyled main-header-two__contact-list">
                        <li>
                            <div class="icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="text">
                                <p><a href="https://api.whatsapp.com/send?phone=628952292484">+628952292484</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="text">
                                <p><a href="https://www.instagram.com/esteh.maxwin">@esteh.maxwin</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="text">
                                <p><a href="#">anifahfitria7@gmail.com</a></p>
                            </div>
                        </li>                    </ul>                    <div class="main-header-two__search-cart-box">
                        <div class="main-header-two__cart-box">
                            <a href="#shop" class="main-header-two__cart icon-shopping-cart"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="container">                <div class="main-menu-two__wrapper-inner">
                    <div class="main-header-two__social">
                        {{-- <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a> --}}
                        {{-- <a href="https://api.whatsapp.com/send?phone=628952292484"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/esteh.maxwin"><i class="fab fa-instagram"></i></a> --}}
                    </div>
                    <div class="main-menu-two__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="scrollToLink">
                                <a href="{{ Route::is('product.show') ? route('beranda').'#home' : '#home' }}">Home </a>
                            </li>
                            <li class="scrollToLink">
                                <a href="{{ Route::is('product.show') ? route('beranda').'#categories' : '#categories' }}">Category</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="{{ Route::is('product.show') ? route('beranda').'#about' : '#about' }}">About</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="{{ Route::is('product.show') ? route('beranda').'#shop' : '#shop' }}">Shop</a>
                            </li>
                            {{-- <li class="scrollToLink">
                                <a href="{{ Route::is('product.show') ? route('beranda').'#galery' : '#galery' }}">Galery</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="{{ Route::is('product.show') ? route('beranda').'#testimonial' : '#testimonial' }}">Testimonial</a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="main-menu-two__right">
                        <ul class="list-unstyled main-menu-two__login">
                            <li class="active"><a href="{{ route('login') }}">Login</a></li>
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
