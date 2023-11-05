<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow"><i class="fa fa-home mr-5"></i>Home</a>
                <i class="fa fa-angle-right  mr-5"></i> <a href="/shop">{{$product->category->name}}</a>  <i class="fa fa-angle-right  mr-5"></i> {{$product->name}}
            </div>
        </div>
    </div>
    <div class="container mb-30">
        <div class="row">
            <div class="col-xl-10 col-lg-12 m-auto">
                <div class="product-detail accordion-detail">
                    <div class="row mb-50 mt-30">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery" wire:ignore>
                                <span class="zoom-icon"><i class="fa fa-search text-danger"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider" wire:ignore>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('images/product')}}/{{$product->image}}" alt="{{$product->name}}" />
                                    </figure>

                                    @php
                                    $images=explode(",",$product->images);
                                    @endphp
                                    @foreach($images as $image)
                                    @if($image)
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('images/product') }}/{{ $image }}" alt="product image" />
                                    </figure>

                                    @endif
                                    @endforeach
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails" >
                                    <div><img src="{{asset('assets/images')}}/{{$product->image}}" alt="{{$product->name}}" /></div>
                                    @foreach($images as $image)
                                    @if($image)
                                    <div>
                                        <img src="{{asset('assets/images')}}/{{$image}}" alt="{{$product->name}}" /></div>

                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock">
                                    @if($product->stock_status ==='instock')
                                    Instock
                                    @else
                                    Out Off Stock
                                    @endif
                                </span>
                                <h2 class="title-detail">{{$product->name}}</h2>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                               
                                        </div>
                                        <span class="font-small ml-5 text-muted"> ({{$product->orderItems->where('rstatus',1)->count()}} reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                       @if($sale)
                                       @if($sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
                                        @if($product->sale_price > 0)
                                        <span class="current-price text-brand">{{ $product->sale_price }}</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">{{ (( $product->regular_price - $product->sale_price) / 100) * ($product->regular_price) }}% Off</span>
                                            <span class="old-price font-md ml-15">{{ $product->regular_price }}</span>
                                        </span>
                                        @else
                                        <span class="current-price text-brand">{{ $product->regular_price }}</span>
                                        @endif
                                       @else
                                       <span class="current-price text-brand">{{ $product->regular_price }}</span>
                                       @endif
                                       @endif
                                    </div>
                                </div>
                                <div class="short-desc mb-30">
                                    <p class="font-lg">{!! $product->short_description !!}.</p>
                                </div>

                                <div class="detail-extralink mb-50">

                                    <div class="product-extra-link2">
                                        @if($sale)
                                        @if($sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
                                        @if($product->sale_price > 0)
                                        <button type="submit" class="button button-add-to-cart" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->sale_price }})"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            Add to cart</button>
                                            @else
                                            <button type="submit" class="button button-add-to-cart" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                Add to cart</button>
                                            @endif
                                            @else
                                            <button type="submit" class="button button-add-to-cart" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                Add to cart</button>
                                        @endif
                                        @else
                                        <button type="submit" class="button button-add-to-cart" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            Add to cart</button>
                                        @endif
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="addToCompare({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fa fa-random" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="font-xs float-start">
                                    <ul class="float-start mr-50" style="margin-right:100px;">
                                        <li class="mb-5">Type: <span class="text-brand">{{$product->category->name}}</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> {{ $product->created_at }}</span></li>

                                    </ul>
                                    <ul class="float-start mr-50" style="margin-right:100px;">
                                        <li class="mb-5">SKU: <a href="#">{{$product->SKU}}</a></li>
                                        <li class="mb-5">Tags:  <a href="#" rel="tag">{{$product->category->name}}</a></li>
                                        <li>Stock:<span class="in-stock text-brand ml-5">{{$product->quantity}} Items {{$product->stock_status}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (3)</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                <div class="tab-pane fade show active" id="Description">
                                    <div class="">
                                        <p>{!! $product->description !!}.</p>

                                    </div>
                                </div>
                                @php
                                $setting=DB::table('settings')->where('id',1)->first()
                                @endphp

                                <div class="tab-pane fade" id="Reviews">
                                    <!--Comments-->
                                    <div class="comments-area">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 class="mb-30">Customer questions & answers</h4>
                                                <div class="comment-list">
                                                    <div class="single-comment justify-content-between d-flex mb-30">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="{{ asset('assets/images/author-2.png') }}" alt="" />
                                                                <a href="#" class="font-heading text-brand">Sienna</a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="d-flex justify-content-between mb-10">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="font-xs text-muted">December 4, 2022 at 3:12 pm </span>
                                                                    </div>
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width: 100%"></div>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="{{ asset('assets/images/author-3.png') }}" alt="" />
                                                                <a href="#" class="font-heading text-brand">Brenna</a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="d-flex justify-content-between mb-10">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="font-xs text-muted">December 4, 2022 at 3:12 pm </span>
                                                                    </div>
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width: 80%"></div>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="{{ asset('assets/images/author-4.png') }}" alt="" />
                                                                <a href="#" class="font-heading text-brand">Gemma</a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="d-flex justify-content-between mb-10">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="font-xs text-muted">December 4, 2022 at 3:12 pm </span>
                                                                    </div>
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width: 80%"></div>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <h4 class="mb-30">Customer reviews</h4>
                                                <div class="d-flex mb-30">
                                                    <div class="product-rate d-inline-block mr-15">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <h6>4.8 out of 5</h6>
                                                </div>
                                                <div class="progress">
                                                    <span>5 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                </div>
                                                <div class="progress">
                                                    <span>4 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                </div>
                                                <div class="progress">
                                                    <span>3 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                </div>
                                                <div class="progress">
                                                    <span>2 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                </div>
                                                <div class="progress mb-30">
                                                    <span>1 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                </div>
                                                <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--comment form-->
                                    <div class="comment-form">
                                        <h4 class="mb-15">Add a review</h4>
                                        <div class="product-rate d-inline-block mb-30"></div>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <form class="form-contact comment_form" action="#" id="commentForm">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="email" id="email" type="email" placeholder="Email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="website" id="website" type="text" placeholder="Website" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="button button-contactForm">Submit Review</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
