        @props(['product'])
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg">
            </div>
            <div class="page-header__ripped-paper"
                style="background-image: url({{ asset('images/shapes/page-header-ripped-paper.png') }});"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('beranda') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Product Details</li>
                    </ul>
                    <h2>Product details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Product Details Start-->
        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__img">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" />
                            @else
                                <img src="{{ asset('images/resources/hot-product-1-1.jpg') }}"
                                    alt="{{ $product->name }}" />
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__top">
                            <h3 class="product-details__title">{{ $product->name }}
                                <span>{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</span> </h3>
                        </div>
                        <div class="product-details__reveiw">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            {{-- <span>Product Review</span> --}}
                        </div>                        <div class="product-details__content">
                            <div class="product-details__content-text1">{!! $product->description !!}</div>
                            @if ($product->link)
                                <p class="product-details__content-text2">Available in store</p>
                            @else
                                <p class="product-details__content-text2">Available in store</p>
                            @endif
                        </div>

                        <div class="product-details__buttons">
                            @if ($product->link)
                                <div class="product-details__buttons-2">
                                    <a href="{{ $product->link }}" class="thm-btn" target="_blank">Buy Now</a>
                                </div>
                            @else
                                <div class="product-details__buttons-2">
                                    <a href="#" class="thm-btn">Contact Us</a>
                                </div>
                            @endif
                        </div>
                        {{-- <div class="product-details__social">
                            <div class="title">
                                <h3>Share with friends</h3>
                            </div>
                            <div class="product-details__social-link">
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-facebook"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!--Product Details End-->


