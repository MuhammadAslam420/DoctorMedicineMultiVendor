<main class="main" >
    @livewire('home-banner-component')
    <!--End hero slider-->
    <section class="popular-categories section-padding" style="background-color: #ffffff;" wire:ignore>
        <div class="container wow animate__animated animate__fadeIn">
            <div class="section-title">
                <div class="title">
                    <h3>Featured Categories</h3>

                </div>
                <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow"
                    id="carausel-10-columns-arrows"></div>
            </div>
            <div class="carausel-10-columns-cover position-relative" >
                <div class="carausel-10-columns" id="carausel-10-columns">
                    @foreach ($categories as $category)
                        <div class="card-2 bg-{{ $category->id }} wow animate__animated animate__fadeInUp"
                            data-wow-delay=".1s">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="{{ $category->id }}"><img
                                        src="{{ asset('images') }}/{{ $category->logo }}"
                                        alt="{{ $category->name }}" /></a>
                            </figure>
                            <h6><a href="{{ route('product.category', ['category_slug' => $category->slug]) }}">{{ $category->name }}</a></h6>
                            @php
                                $prod_count = DB::table('products')
                                    ->where('category_id', $category->id)
                                    ->count();
                            @endphp
                            <span>{{ $prod_count }} items</span>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--End category slider-->
    <section class="banners mb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <img src="{{ asset('images/banner/1.jpg') }}" alt="" />
                        <div class="banner-text">
                            <h4>
                                Everyday Fresh & <br />Clean with Our<br />
                                Products
                            </h4>
                            <a href="/shop" class="btn btn-xs">Shop Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <img src="{{ asset('images/banner/2.jpg') }}" alt="" />
                        <div class="banner-text">
                            <h4>
                                Make your Breakfast<br />
                                Healthy and Easy
                            </h4>
                            <a href="/shop" class="btn btn-xs">Shop Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-flex">
                    <div class="banner-img mb-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <img src="{{ asset('images/banner/3.jpg') }}" alt="" />
                        <div class="banner-text">
                            <h4>The best Organic <br />Products Online</h4>
                            <a href="/shop" class="btn btn-xs">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End banners-->
    <section class="product-tabs section-padding position-relative" wire:ignore>
        <div class="container">
            <div class="section-title style-2 wow animate__animated animate__fadeIn">
                <h3>Popular Products</h3>
                <ul class="nav nav-tabs links" id="myTab" role="tablist">

                    @foreach ($hcategories as $key => $cat)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="nav-tab-{{ $cat->id }}"
                                data-bs-toggle="tab" data-bs-target="#tab-{{ $cat->id }}" type="button"
                                role="tab" aria-controls="tab-{{ $cat->id }}"
                                aria-selected="false">{{ $cat->name }}</button>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="myTabContent" style="background-color: #ffffff;">
                @foreach ($hcategories as $key => $cat)
                    <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="tab-{{ $cat->id }}"
                        role="tabpanel" aria-labelledby="tab-{{ $cat->id }}">
                        <div class="row product-grid-4">
                            @php
                                $c_products = DB::table('products')
                                    ->where('category_id', $cat->id)
                                    ->get()
                                    ->take($no_of_products);
                            @endphp
                            @foreach ($c_products as $product)
                            @php
                            $witems=Cart::instance('wishlist')->content()->pluck('id');
                            $citems=Cart::instance('comapre')->content()->pluck('id');
                            @endphp
                                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
                                        data-wow-delay=".1s">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details', ['slug' => $product->id]) }}">
                                                    <img class="default-img"
                                                        src="{{ asset('images/product') }}/{{ $product->image }}"
                                                        alt="{{ $product->name }}" />

                                                </a>
                                            </div>
                                            <div class="product-action-1" wire:ignore>
                                                @if ($witems->contains($product->id))
                                                    <a aria-label="Remove From Wishlist" class="action-btn"
                                                        href="#"
                                                        wire:click.prevent="removeFromWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i
                                                            class="fa fa-heart fill-heart text-success"></i></a>
                                                @else
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="#"
                                                        wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i
                                                            class="fa fa-heart"></i></a>
                                                @endif
                                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i
                                                        class="fa fa-random"></i></a>
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a
                                                    href="{{ route('product.category', ['category_slug' => $cat->slug]) }}">{{ $cat->name }}</a>
                                            </div>
                                            <h2><a
                                                    href="{{ route('product.details', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                            </h2>


                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>PKR{{ $product->regular_price }}</span>

                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="#"
                                                        wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i
                                                            class="fa fa-shopping-basket mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                @endforeach

            </div>
            <!--End tab-content-->
        </div>
    </section>
    <!--Products Tabs-->
    <section class="section-padding pb-5" wire:ignore>
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn">
                <h3 class="">Daily Best Sells</h3>
                <ul class="nav nav-tabs links" id="myTab-2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab"
                            data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one"
                            aria-selected="true">Featured</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1"
                            type="button" role="tab" aria-controls="tab-two" aria-selected="false">Special
                            Offers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab"
                            data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three"
                            aria-selected="false">New added</button>
                    </li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-12 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel"
                            aria-labelledby="tab-one-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                    id="carausel-4-columns-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                    @foreach ($featureds as $fproduct)
                                    @php
                                        $witems=Cart::instance('wishlist')->content()->pluck('id');
                                        $citems=Cart::instance('comapre')->content()->pluck('id');
                                    @endphp
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product.details', ['slug' => $fproduct->slug]) }}">
                                                        <img class="default-img"
                                                            src="{{ asset('images/product') }}/{{ $fproduct->image }}"
                                                            alt="" />

                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fa fa-eye"></i></a>
                                                    @if ($witems->contains($fproduct->id))
                                                        <a aria-label="Add To Wishlist" class="action-btn"
                                                            href="#"
                                                            wire:click.prevent="removeFromWishlist({{ $fproduct->id }},'{{ $fproduct->name }}',{{ $fproduct->regular_price }})"><i
                                                                class="fa fa-heart fill-heart text-success"></i></a>
                                                    @else
                                                        <a aria-label="Add To Wishlist" class="action-btn"
                                                            href="#"
                                                            wire:click.prevent="addToWishlist({{ $fproduct->id }},'{{ $fproduct->name }}',{{ $fproduct->regular_price }})"><i
                                                                class="fa fa-heart"></i></a>
                                                    @endif
                                                    @if ($citems->contains($fproduct->id))
                                                        <a aria-label="Compare" class="action-btn" href="#"
                                                            wire:click.prevent="removeFromCompare({{ $fproduct->id }},'{{ $fproduct->name }}',{{ $fproduct->regular_price }})"><i
                                                                class="fa fa-random fill-random text-success"></i></a>
                                                    @else
                                                        <a aria-label="Compare" class="action-btn" href="#"
                                                            wire:click.prevent="addToCompare({{ $fproduct->id }},'{{ $fproduct->name }}',{{ $fproduct->regular_price }})"><i
                                                                class="fa fa-random"></i></a>
                                                    @endif
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">
                                                        Featured
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a
                                                        href="{{ route('product.details', ['slug' => $fproduct->id]) }}">{{ $fproduct->name }}</a>
                                                </h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">

                                                    <span >{{ $fproduct->regular_price }}</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ ($fproduct->sale_quantity / 100) * $fproduct->quantity }}%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold:
                                                        {{ $fproduct->sale_quantity }}/{{ $fproduct->quantity }}</span>
                                                </div>
                                                <a href="" class="btn w-100 hover-up"><i
                                                        class="fa fa-shopping-basket mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!--End product Wrap-->
                                </div>
                            </div>
                        </div>
                        <!--End tab-pane-->
                        <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                    id="carausel-4-columns-2-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                    @foreach ($specials as $special)
                                    @php
                        $witems=Cart::instance('wishlist')->content()->pluck('id');
                        $citems=Cart::instance('comapre')->content()->pluck('id');
                        @endphp
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product.details', ['slug' => $special->id]) }}">
                                                        <img class="default-img"
                                                            src="{{ asset('images/product') }}/{{ $special->image }}"
                                                            alt="" />


                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fa fa-eye"></i></a>
                                                    @if ($witems->contains($special->id))
                                                        <a aria-label="Add To Wishlist" class="action-btn"
                                                            href="#"
                                                            wire:click.prevent="removeFromWishlist({{ $special->id }},'{{ $special->name }}',{{ $special->regular_prices }})"><i
                                                                class="fa fa-heart fill-heart text-success"></i></a>
                                                    @else
                                                        <a aria-label="Add To Wishlist" class="action-btn"
                                                            href="#"
                                                            wire:click.prevent="addToWishlist({{ $special->id }},'{{ $special->name }}',{{ $special->regular_prices }})"><i
                                                                class="fa fa-heart"></i></a>
                                                    @endif
                                                    @if ($citems->contains($special->id))
                                                        <a aria-label="Compare" class="action-btn" href="#"
                                                            wire:click.prevent="removeFromCompare({{ $special->id }},'{{ $special->name }}',{{ $special->regular_prices }})"><i
                                                                class="fa fa-random fill-random text-success"></i></a>
                                                    @else
                                                        <a aria-label="Compare" class="action-btn" href="#"
                                                            wire:click.prevent="addToCompare({{ $special->id }},'{{ $special->name }}',{{ $special->regular_prices }})"><i
                                                                class="fa fa-random"></i></a>
                                                    @endif
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">
                                                        Special Offer
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a
                                                        href="{{ route('product.details', ['slug' => $special->slug]) }}">{{ $special->name }}</a>
                                                </h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">
                                                    <span >{{ $special->regular_price }}</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width:{{ ($special->sale_quantity / 100) * $special->quantity }}%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold:
                                                        {{ $special->sale_quantity }}/{{ $special->quantity }}</span>
                                                </div>
                                                <a href="#" class="btn w-100 hover-up"
                                                    wire:click.prevent="store({{ $special->id }},'{{ $special->name }}',{{ $special->regular_price }})"><i
                                                        class="fa fa-shopping-basket mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!--End product Wrap-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                    id="carausel-4-columns-3-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                    @foreach ($news as $new)
                                    @php
                        $witems=Cart::instance('wishlist')->content()->pluck('id');
                        $citems=Cart::instance('comapre')->content()->pluck('id');
                        @endphp
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product.details', ['slug' => $new->id]) }}">
                                                        <img class="default-img"
                                                            src="{{ asset('images/product') }}/{{ $new->image }}"
                                                            alt="" />

                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"> <i
                                                            class="fa fa-eye"></i></a>
                                                    @if ($witems->contains($new->id))
                                                        <a aria-label="Add To Wishlist" class="action-btn"
                                                            href="#"
                                                            wire:click.prevent="removeFromWishlist({{ $new->id }},'{{ $new->name }}',{{ $new->regular_price }})"><i
                                                                class="fa fa-heart fill-heart text-success"></i></a>
                                                    @else
                                                        <a aria-label="Add To Wishlist" class="action-btn"
                                                            href="#"
                                                            wire:click.prevent="addToWishlist({{ $new->id }},'{{ $new->name }}',{{ $new->regular_price }})"><i
                                                                class="fa fa-heart"></i></a>
                                                    @endif
                                                    @if ($citems->contains($new->id))
                                                        <a aria-label="Compare" class="action-btn" href="#"
                                                            wire:click.prevent="removeFromCompare({{ $new->id }},'{{ $new->name }}',{{ $new->regular_price }})"><i
                                                                class="fa fa-random fill-random text-success"></i></a>
                                                    @else
                                                        <a aria-label="Compare" class="action-btn" href="#"
                                                            wire:click.prevent="addToCompare({{ $new->id }},'{{ $new->name }}',{{ $new->regular_price }})"><i
                                                                class="fa fa-random"></i></a>
                                                    @endif
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">
                                                        New
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a
                                                        href="{{ route('product.details', ['slug' => $new->slug]) }}">{{ $new->name }}</a>
                                                </h2>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 80%"></div>
                                                </div>
                                                <div class="product-price mt-10">

                                                    <span>{{ $new->regular_price }}</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ ($new->sale_quantity / 100) * $new->quantity }}%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold:
                                                        {{ $new->sale_quantity }}/{{ $new->quantity }}</span>
                                                </div>
                                                <a href="#"
                                                    wire:click.prevent="store({{ $new->id }},'{{ $new->name }}',{{ $new->regular_price }})"
                                                    class="btn w-100 hover-up"><i
                                                        class="fa fa-shopping-basket mr-5"></i>Add To Cart</a>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!--End product Wrap-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End tab-content-->
                </div>
                <!--End Col-lg-9-->
            </div>
        </div>
    </section>
    <!--End Best Sales-->
    <section class="section-padding pb-5" wire:ignore>
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3 class="">Sales On</h3>
                <a class="show-all" href="/deals">
                    All Deals
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <div class="row">
                @if ($sale)
                    @if ($sproducts->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                        @foreach ($sproducts as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp"
                                    data-wow-delay="0">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img">
                                            <a href=" {{ route('product.details', ['slug' => $product->slug]) }} ">
                                                <img src="{{ asset('images/product') }}/{{ $product->image }}"
                                                    alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="deals-countdown-wrap">
                                            <div class="deals-countdown"
                                                data-countdown="{{ Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s') }}">
                                                {{ Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s') }}
                                            </div>
                                        </div>
                                        <div class="deals-content">
                                            <h2><a
                                                    href="{{ route('product.details', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                            </h2>
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>{{ $product->sale_price }}</span>
                                                    <span class="old-price">{{ $product->regular_price }}</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="#"
                                                        wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->sale_price }})"><i
                                                            class="fa fa-shopping-basket mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif

            </div>
        </div>
    </section>
    <!--End Deals-->

</main


