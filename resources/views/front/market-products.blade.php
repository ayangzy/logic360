@extends('front.layouts.app')

@section('content')

<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">

           <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="shop-control-bar">
                        <div class="handheld-sidebar-toggle">
                            <button type="button" class="btn sidebar-toggler">
                                <i class="fa fa-sliders"></i>
                                <span>Filters</span>
                            </button>
                        </div>

                        <h1 class="woocommerce-products-header__title page-title">Available Products</h1>
                    </div>

                    <div id="grid-extended" role="tabpanel">
                        <div class="woocommerce columns-7">
                            <div class="products">
                                @if(count($products) > 0)

                                @foreach ($products as $product)
                                <div class="product card shadow rounded mb-2">

                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="">
                                        <img alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image card-img-top" src="{{$product->image_url}}">
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">₦</span> {{ $product->price }}</span>
                                        </span>
                                        <h2 class="woocommerce-loop-product__title">{{ $product->name }}</h2>
                                    </a>

                                    <div class="woocommerce-product-details__short-description">
                                        <ul class="text-center">
                                            <li>{{ $product->quantity }}</li>
                                            <li>{{ $product->market->name }} Market</li>
                                            <li>{{ $product->market->location->name }}</li>

                                        </ul>
                                    </div>

                                </div>
                                @endforeach
                                @else
                                <p class="text-danger m-auto">There are currently no product available for this market</p>
                                @endif

                            </div>

                        </div>

                    </div>

                </main>

                <div class="shop-control-bar-bottom">

                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                            {{ $products->links('vendor.pagination.custom') }}
                        </ul>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
