<footer class="site-footer">
    <div class="site-footer__bg" style="background-image: url(images/backgrounds/site-footer-bg-img.png);"></div>
    <div class="site-footer__ripped-paper" style="background-image: url(images/shapes/site-footer-ripped-paper.png);">
    </div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="index.html"><img src="{{ asset('images/resources/footer-logo.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">Selamat Datang di Es Teh MaxWin, Lorem Ipsum is simply
                                dummy text of the printing and typesetting.</p>
                        </div>
                        <div class="site-footer__social">
                            {{-- <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a> --}}
                            <a href="https://api.whatsapp.com/send?phone=628952292484"><i
                                    class="fab fa-whatsapp"></i></a>
                            <a href="https://www.instagram.com/esteh.maxwin"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links clearfix">
                        <h3 class="footer-widget__title">Links</h3>
                        <ul class="footer-widget__links-list list-unstyled clearfix">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#categories">Category</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#shop">Shop</a></li>
                            {{-- <li><a href="#galery">Galery</a></li>
                            <li><a href="#testimonial">Testimonial</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__contact clearfix">
                        <h3 class="footer-widget__title">Contact</h3>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <p><a href="https://api.whatsapp.com/send?phone=628952292484">+62 8952292484</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="#">anifahfitria7@gmail.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>Semarang. Indonesia </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__newsletter">
                        <h3 class="footer-widget__title">Newsletter</h3>
                        <p class="footer-widget__newsletter-text">Subscribe to our newsletter for daily new updates</p>
                        <form class="footer-widget__newsletter-form mc-form" data-url="MC_FORM_URL">
                            <div class="footer-widget__newsletter-input-box">
                                <input type="email" placeholder="Email address" name="email">
                                <button type="submit" class="footer-widget__newsletter-btn"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                        <div class="mc-form__response"></div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© All Copyright {{ date('Y') }} by <a href="#">Es
                                Teh MaxWin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
