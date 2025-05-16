@props(['products' => []])
<!--Hot Products Two Start-->
        <section class="hot-products-two" id="shop">
            <div class="container">
                <div class="hot-products-two__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Checkout New Products</span>
                                <h2 class="section-title__title">Our Best Products</h2>
                            </div>
                        </div>
                        {{-- <div class="col-xl-6 col-lg-6">
                            <div class="hot-products-two__filter-box">
                                <ul class="hot-products-two__filter style1 post-filter list-unstyled clearfix">
                                    <li data-filter=".filter-item" class="active"><span class="filter-text">All</span>
                                    </li>
                                    <li data-filter=".category1"><span class="filter-text">Category 1</span></li>
                                    <li data-filter=".category2"><span class="filter-text">Category 2</span></li>
                                    <li data-filter=".category3"><span class="filter-text">Category 3</span></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>                <div class="hot-products-two__bottom">
                    <div class="row filter-layout">
                        @if(count($products) > 0)
                            @foreach($products as $product)
                            <!-- Hot Products Two Single Start -->
                            <div class="col-xl-3 col-lg-6 col-md-6 filter-item category1">
                                <div class="hot-products__single">
                                    <div class="hot-products__single-inner">
                                        <div class="hot-products__img-box">
                                            <div class="hot-products__img">
                                                @if($product->image)
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                                @else
                                                    <img src="{{ asset('images/resources/hot-product-1-1.jpg') }}" alt="{{ $product->name }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="hot-products__content">
                                            <div class="hot-products__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>                                            <h3 class="hot-products__title"><a href="#">{{ $product->name }}</a></h3>
                                            <p class="hot-products__price">{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</p>
                                            <div class="hot-products__btn-box">
                                                <a href="{{ $product->link ?? '#' }}" class="hot-products__btn thm-btn" {{ $product->link ? 'target="_blank"' : '' }}>Buy</a>
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
                            @endforeach
                        @else
                            <div class="col-12 text-center py-5">
                                <h4>No products available yet</h4>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!--Hot Products Two End-->
