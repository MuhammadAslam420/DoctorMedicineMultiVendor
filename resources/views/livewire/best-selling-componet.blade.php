
   

<main id="main" class="main-site left-sidebar">
<style>
    .product-wish{
		position: absolute;
		top:10%;
		left:0;
		z-index:99;
		right:30px;
		text-align:right;
		padding-top:0;
		

	}
	.product-wish .fa{
		color:#cbcbcb;
		font-size:22px;
	}
	.product-wish .fa:hover{
		color:#32aeb1;

	}
	.fill-heart{
		color:#32aeb1 !important;
	}
</style>
		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Shop</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="{{asset('images/bg/14.jpg')}}" alt=""></figure>
						</a>
					</div>

					<div class="wrap-shop-control">

						<h1 class="shop-title">Avaliable Medicine</h1>

						<div class="wrap-right">

							<div class="sort-item orderby ">
                            <select class="nice-select" name="orderby" wire:model="sorting">
                                        <option value="default">Default Sorting</option>
                                        <option value="date">Sort by new arrivals</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
							</div>

							<div class="sort-item product-per-page">
                            <select class="nice-select" name="post-per-page" wire:model="pagesize">
                                        <option value="12" selected="selected">12 Per Page</option>
                                        <option value="16">16 Per Page</option>
                                        <option value="18">18 Per Page</option>
                                        <option value="20">20 Per Page</option>
                                        <option value="24">24 Per Page</option>
                                    </select>
							</div>

							<div class="change-display-mode">
								<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
								<a href="#" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
							</div>

						</div>

					</div><!--end wrap shop control-->

					<div class="row">

						<ul class="product-list grid-products equal-container">
                        @php
			            $witems=Cart::instance('wishlist')->content()->pluck('id');
			            @endphp
                        @foreach($products as $product)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
                                                <a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                    <figure><img src="{{asset('images/product')}}/{{$product->image}}" style="height:175px;" alt="{{$product->name}}"></figure>
                                                </a>
                                            </div>
									<div class="product-info">
										<a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
										<div class="wrap-price  justify-content-center"><span class="product-price">${{$product->regular_price}}</span></div>
										<a href="#" class="btn add-to-cart"  wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fa fa-shopping-cart"></i></a>
									</div>
                                    <div class="product-wish" >
                                    @if($witems->contains($product->id))
                                                            <a href="#" title="Wishlist"  wire:click.prevent="removeFromWishlist({{$product->id}})">
                                                                <i class="fa fa-heart"></i></a>
                                                        @else
                                                        <a href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">
                                                        <i class="fa fa-heart"></i>
                                                        </a>
                                                        @endif
									
									</div>
								</div>
							</li>
						@endforeach	
							

						</ul>
                        

					</div>
					{{$products->links("pagination::bootstrap-4") }}
					
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">All Categories</h2>
						<div class="widget-content">
							<ul class="list-category">
                                @foreach($categories as $cat)
								<li class="{{count($cat->subcategories) > 0 ? 'has-child-cate':''}}"><a href="{{route('product.category',['category_slug'=>$cat->slug])}} " class="cate-link">{{$cat->name}}</a>
                                   
                                   @if(count($cat->subcategories)>0)
                                    <span class="toggle-control"><i class="fa fa-plus"></i></span>
                                    <ul class="sub-cat">
                                        @foreach($cat->subcategories as $scategory)
                                        <li class="category-item"><a href="{{route('product.category',['category_slug'=>$cat->slug,'scategory_slug'=>$scategory->slug])}}" class="cat-link">{{$scategory->name}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                        </li>
							    @endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->
					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Filter By Price</h2>
					    <h2 class="widget-title">Price
							<span class="text-info" style="font-size:14px;">Rs.{{$min_price}} - {{$max_price}}</span>
						</h2>
						<div class="widget-content">
							<div id="slider" wire:ignore>

							</div>
						</div>
					</div><!-- Price-->

					<div class="widget mercado-widget widget-product" style="padding-top:20px;">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
                                @foreach($related_products as $rptoduct)
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="{{route('product.details',['slug'=>$rptoduct->slug])}}" title="{{$rptoduct->name}}">
												<figure><img src="{{asset('images/product')}}/{{$rptoduct->image}}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{route('product.details',['slug'=>$rptoduct->slug])}}" class="product-name"><span>{{$rptoduct->name}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$rptoduct->regular_price}}</span></div>
										</div>
									</div>
								</li>
                               @endforeach
							

							</ul>
						</div>
					</div>
					<!-- brand widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
@push('scripts')
	<script>
		var slider=document.getElementById('slider');
		noUiSlider.create(slider,{
			start : [100,1000],
			connect:true,
			range :{
				'min': 100,
				'max' : 1000
			},
			pips:{
				mode:'steps',
				stepped:true,
				density:3
			}
		});
		slider.noUiSlider.on('update',function(value){
			@this.set('min_price',value[0]);
			@this.set('max_price',value[1]);

		});
	</script>
	@endpush