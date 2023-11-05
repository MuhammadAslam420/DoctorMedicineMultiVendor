<main class="main pages mb-80">

    <div class="page-header pt-5 ">
        <div class="container">
            <section class="popular-categories section-padding mb-10" style="background-color: #ffffff;" wire:ignore>
                <div class="container wow animate__animated animate__fadeIn">
                    <div class="section-title justify-content-center" >
                        <div class="title ">
                            <h3 >Find doctors by health concern</h3>
                        </div>
                        <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow"
                            id="carausel-10-columns-arrows">
                        </div>
                    </div>
                    <div class="carausel-10-columns-cover position-relative">
                        <div class="carausel-10-columns" style="padding:0;" id="carausel-10-columns">
                            @foreach ($specialists as $special)
                            <div class="card-2 bg-{{ $special->id }} wow animate__animated animate__fadeInUp"
                                data-wow-delay=".1s" >
                                <figure class="img-hover-scale overflow-hidden">
                                    <a href="{{ $special->id }}"><img
                                            src="{{ asset('images/icons') }}/{{ $special->logo }}"
                                            alt="{{ $special->name }}" style="width:50px;border-radius:91px;"/></a>
                                </figure>
                                <h6><a href="{{ route('specialist', ['slug' => $special->slug]) }}">{{ $special->name
                                        }}</a></h6>
                                @php
                                $prod_count = DB::table('doctors')
                                ->where('specialist', $special->id)
                                ->count();
                                @endphp
                                <span style="padding:2px;">{{ $prod_count }} Specialist</span>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>

            <div class="archive-header-2 text-center mb-25"
                style=" background: url(./images/banner/banner-10.png) no-repeat center bottom;">
                <h1 class="display-2 mb-50 text-dark">Find and book the best doctors near you</h1>
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <div class="sidebar-widget-2 widget_search mb-50">
                            <div class="search-style-2" wire:ignore>
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="search-style-2" style="display: flex;flex-direction:row;">
                                            <select class="from-control" name='city' wire:model="city"
                                                style="width:250px;background:#ffffff;border-radius:8px;">
                                                <option>Select Location</option>
                                                <option value="Multan">Multan</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Islamabad">Islamabad</option>
                                                <option value="Krachi">Krachi</option>
                                                <option value="Peshawar">Peshawar</option>
                                            </select>
                                            <input type="text" placeholder="Search for Doctors By name or specilaty."
                                                wire:model="doctor" />

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container mb-30 mt-20">
                <div class="row flex-row-reverse">
                    <div class="col-lg-4-5">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p>We found <strong class="text-brand">{{ count($doctors) }}</strong> Available Dortors for you!</p>
                            </div>

                        </div>
                        <div class="row product-grid">

                            @foreach($doctors as $doctor)

                            <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                                <div class="vendor-wrap mb-40">
                                    <div class="vendor-img-action-wrap">
                                        <div class="vendor-img">
                                            <a href="{{route('doctor.detail',['slug'=>$doctor->slug])}}"
                                                title="{{$doctor->firstname}}">
                                                <img class="default-img"
                                                    src="{{asset('images/doctors')}}/{{$doctor->profileImage}}"
                                                    alt="{{$doctor->firstname}}" style="border-radius:91px;" />
                                            </a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">top Ranked</span>
                                        </div>
                                    </div>
                                    <div class="vendor-content-wrap">
                                        <div class="d-flex justify-content-between align-items-end mb-30">
                                            <div>
                                                <div class="product-category">
                                                    <span class="text-muted">{{
                                                        \Carbon\Carbon::parse($doctor->created_at)->format('d/m/Y')}}</span>
                                                </div>
                                                <h4 class="mb-5"><a
                                                        href="{{route('doctor.detail',['slug'=>$doctor->slug])}}">{{
                                                        $doctor->firctname }}</a></h4>
                                                         <div class="product-rate-cover">

                                                            <span class="font-small ml-5 text-highlighted"> ( <b style="font-weight:800;color:orangered;">{{$doctor->onlinemeeting->where('rstatus',1)->count()}}</b>
                                                                Reviews )</span>
                                                        </div>

                                            </div>
                                            <div class="mb-10">
                                                <span class="font-small total-product">{{ $doctor->checkup_fees }} Check
                                                    Fee</span>
                                            </div>
                                        </div>
                                        <div class="vendor-info mb-30">
                                            <ul class="contact-infor text-muted">
                                                <li><img src="{{ asset('images/icons/icon-location.svg') }}"
                                                        alt="" /><strong>Address: </strong> <span>{{ $doctor->city
                                                        }}&nbsp;{{ $doctor->state }},&nbsp;{{ $doctor->country }}</span>
                                                </li>
                                                @php
                                                $setting=DB::table('settings')->where('id',1)->first();
                                                @endphp
                                                <li><img src="{{ asset('images/icons/icon-contact.svg')}}"
                                                        alt="" /><strong>Call Us:</strong><span>(+92) - {{
                                                        $setting->phone }}</span></li>
                                                        <li>
                                                            <i class="fa fa-hospital-o text-success" style="font-weight: 800;"></i>
                                                            &nbsp;<strong>Hospital:</strong>
                                                            <span>{{ $doctor->hospital->hospital }}</span>
                                                        </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('doctor.detail',['slug'=>$doctor->slug])}}"
                                            class="btn btn-xs">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--end vendor card-->
                        </div>
                        <div class="pagination-area mt-20 mb-20">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    {{$doctors->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>

                        <div class="col-lg-1-5 primary-sidebar " wire:ignore.self>
                            <div class="sidebar-widget price_range range mb-30">
                                <h5 class="section-title style-1 mb-30">Filter by price</h5>
                                <div class="price-filter">
                                    <div class="price-filter-inner">
                                        <h2 class="widget-title" style="font-size:16px;padding-bottom:10px;">Price
                                            <span class="text-info">Rs.{{$min_price}} - {{$max_price}}</span>
                                        </h2>
                                        <div class="widget-content" style="padding-bottom:20px;">
                                            <div id="slider" wire:ignore>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="sidebar-widget widget-category-2 mb-30">
                                <h5 class="section-title style-1 mb-30">Sort Per Page Size</h5>
                                <select class="form-control" name="post-per-page" class="use-chosen" wire:model="pagesize">
                                    <option value="12" selected="selected">12 per page</option>
                                    <option value="16">16 per page</option>
                                    <option value="18">18 per page</option>
                                    <option value="21">21 per page</option>
                                    <option value="24">24 per page</option>
                                    <option value="30">30 per page</option>
                                    <option value="32">32 per page</option>
                                </select>
                            </div>
                            <div class="sidebar-widget widget-category-2 mb-30">
                                <h5 class="section-title style-1 mb-30">Sort Arrivals</h5>
                                <select class="form-control" name="orderby" class="use-chosen" wire:model="sorting">
                                    <option value="default" selected="selected">Default sorting</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
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
