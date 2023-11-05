<div>
    <div>
        <div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
            <div class="custom-container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">Our Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-75 pb-55">
            <div class="custom-container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="totall-product">
                                <p> We found <span>{{ $doctors->count() }}</span> Doctors available for you</p>
                            </div>
                            <div class="sort-by-product-area">
                               <input type="text" name="doctor" id="doctor" class="form-control" placeholder="Search by doctor name or speciality here" wire:model="doctor">
                            </div>
                            <div class="sort-by-product-area">
                                <select class="form-control" name="city" wire:model="city">
                                    <option value="" selected="selected" >Sort By City</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Islamabad">Islamabad</option>
                                    <option value="Krachi">Krachi</option>
                                    <option value="Peshawar">Peshawar</option>
                                </select>
                            </div>
                            <div class="sort-by-product-area">
                                <select class="form-control" name="orderby" wire:model="sorting">
                                    <option value="default">Default Order Sorting</option>
                                    <option value="date">Sort by new arrivals</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>

                            </div>
                            <div class="sort-by-product-area">
                                <select class="form-control" name="post-per-page" wire:model="pagesize">
                                    <option value="12" selected="selected" >Sort ByPage Size:12 PerPage</option>
                                    <option value="16">16 Per Page</option>
                                    <option value="18">18 Per Page</option>
                                    <option value="20">20 Per Page</option>
                                    <option value="24">24 Per Page</option>
                                </select>
                            </div>
                        </div>
                        <div class="shop-bottom-area">
                            <div class="row">
                                @foreach($doctors as $doctor)
                                <div class="col-xl-3 col-lg-4 col-md-4 col-12 col-sm-6 wow tmFadeInUp">
                                    <div class="single-product-wrap mb-50">
                                        <div class="product-img-action-wrap mb-10">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{route('doctor.detail',['slug'=>$doctor->slug])}}"
                                                    title="{{$doctor->firstname}}">
                                                    <img class="default-img"
                                                        src="{{asset('images/doctors')}}/{{$doctor->profileImage}}"
                                                        alt="{{$doctor->firstname}}" style="height:240px;">
                                                    <img class="hover-img"
                                                        src="{{asset('images/doctors')}}/{{$doctor->profileImage}}"
                                                        alt="{{$doctor->firstname}}" style="height:240px;">
                                                </a>
                                            </div>


                                        </div>
                                        <div class="product-content-wrap">
                                            {{-- <div class="product-category">
                                                <a
                                                    href="{{route('product.category',['category_slug'=>$product->category->slug])}}">{{
                                                    $product->category->name }}</a>
                                            </div> --}}
                                            <h2><a
                                                    href="{{route('doctor.detail',['slug'=>$doctor->slug])}}">{{$doctor->firstname}}</a>
                                            </h2>
                                            <div class="product-price">
                                                <span class="new-price">Rs.{{$doctor->checkup_fees}}</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            {{$doctors->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                    <div class="col-lg-3">

                        <div class="sidebar-wrapper sidebar-wrapper-mr1">
                            <div class="sidebar-widget sidebar-widget-wrap sidebar-widget-padding-1 mb-20"
                                style="background:#39603d;">
                                <h4 class="sidebar-widget-title text-light">Specialist</h4>
                                <div class="sidebar-categories-list">
                                    <ul>
                                        @foreach($specialists as $special)
                                        <li>
                                            <a class="text-light"
                                                href="{{ route('specialist',['slug'=>$special->slug]) }}" style="text-transform: capitalize;">{{
                                                $special->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget sidebar-widget-wrap sidebar-widget-padding-3 mb-20"
                            style="background:#39603d;width:300px;">
                            <h4 class="sidebar-widget-title text-light">Filter by price </h4>
                            <div class="price-filter">
                                <p class="text-light">Price
                                    <span class="text-light">{{$min_price}} - {{$max_price}}</span>
                                </p>
                                <div id="slider" wire:ignore></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js"></script>
    <script>
        var slider=document.getElementById('slider');
            noUiSlider.create(slider,{
                start : [1000,5000],
                connect:true,
                range :{
                    'min': 1000,
                    'max' : 5000
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

</div>
