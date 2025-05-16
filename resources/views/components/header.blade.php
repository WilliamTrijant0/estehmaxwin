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
                                <p><a href="">+ 92 ( 307 ) 68 - 06860</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="text">
                                <p><a href="">needhelp@company.com</a></p>
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
                            <a href="#shop" class="main-header-two__cart icon-shopping-cart"></a>
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
                            <li class="scrollToLink">
                                <a href="#home">Home </a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#categories">Category</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#about">About</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#shop">Shop</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#galery">Galery</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#testimonial">Testimonial</a>
                            </li>
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
