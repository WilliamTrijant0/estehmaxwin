@extends('layouts.app')

@section('content')
<section class="shop-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Search Results</span>
            <h2 class="section-title__title">You searched for "{{ $query }}"</h2>
            <p>{{ $count }} results found</p>
        </div>
        <div class="row">
            @if(count($products) > 0)
                @foreach($products as $product)
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="shop-one__single">
                        <div class="shop-one__img">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                            <div class="shop-one__hover">
                                <a href="{{ $product->link }}" class="thm-btn shop-one__cart-btn">Details</a>
                            </div>
                        </div>
                        <div class="shop-one__content text-center">
                            <h3 class="shop-one__title"><a href="{{ $product->link }}">{{ $product->name }}</a></h3>
                            <div class="shop-one__price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                            <p class="shop-one__text">{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p>No products found matching your search query.</p>
                </div>
            @endif
        </div>
        
        <div class="shop-page__pagination">
            {{ $products->appends(['query' => $query])->links() }}
        </div>
    </div>
</section>
@endsection