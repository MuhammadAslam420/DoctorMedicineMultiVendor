<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/doctors" rel="nofollow"><i class="fa fa-home mr-5"></i>Doctors</a>
                <i class="fa fa-angle-right"></i> Doctor <i class="fa fa-angle-right"></i> {{ $doctor->firstname }}
            </div>
        </div>
    </div>
    <div class="container mt-10 mb-30">

        <div class="row flex-row-reverse">
            <div class="col-lg-4-5">
                <div class="row product-grid">
                    <div class="col-lg-12 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">TopRanked</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="#">About</a>
                                </div>
                                <h2><a href="#">{{ $doctor->firstname }}</a></h2>
                                <div class="row mb-15">

                                    @php
                                    $avgrating=0;
                                    $avgbehaviour=0;
                                    $avgwaiting_time=0;
                                    @endphp
                                    <div class="col-md-4">

                                        @foreach($doctor->onlinemeeting->where('rstatus',1) as $onlinemeeting)
                                        @php
                                        $avgrating=$avgrating + $onlinemeeting->review->rating;
                                        $avgbehaviour=$avgbehaviour + $onlinemeeting->review->behaviour;
                                        $avgwaiting_time=$avgwaiting_time +
                                        $onlinemeeting->review->waiting_time;
                                        @endphp
                                        @endforeach
                                        @if($avgrating > 0)
                                        <span style="color:#39603d;font-weight:800;">Skill Rating: ({{$avgrating /
                                            $doctor->onlinemeeting->where('rstatus',1)->count()}})</span>
                                        <div class="product-rating">
                                            @for($i=1; $i<=5; $i++) @if($i<=$avgrating) <i class="fa fa-star"
                                                style="color:#f1b24a;"></i>
                                                @else
                                                <i class="fa fa-star" style="color:grey;"></i>
                                                @endif
                                                @endfor
                                        </div>
                                        @else
                                        <i class="fa fa-star" style="color:grey;"></i>
                                        @endif
                                    </div>
                                    <div class="col-md-4 ">

                                        @if($avgbehaviour >0)

                                        <span style="color:#39603d;font-weight:800;padding:10px;">Behaviour Rating:
                                            ({{$avgbehaviour /
                                            $doctor->onlinemeeting->where('rstatus',1)->count()}})</span>
                                        <div class="product-rating" style="width: 90%">
                                            @for($i=1; $i<=5; $i++) @if($i<=$avgbehaviour) <i class="fa fa-star"
                                                style="color:#f1b24a;"></i>
                                                @else
                                                <i class="fa fa-star" style="color:grey;"></i>
                                                @endif
                                                @endfor

                                        </div>
                                        @else
                                        <i class="fa fa-star" style="color:grey;"></i>
                                        @endif


                                    </div>
                                    <div class="col-md-4">

                                        @if($avgwaiting_time > 0)
                                        <span style="color:#39603d;font-weight:800;">Waiting Time Rating:
                                            ({{$avgwaiting_time /
                                            $doctor->onlinemeeting->where('rstatus',1)->count()}})</span>
                                        <div class="product-rating" style="width: 90%">
                                            @for($i=1; $i<=5; $i++) @if($i<=$avgwaiting_time) <i class="fa fa-star"
                                                style="color:#f1b24a;"></i>
                                                @else
                                                <i class="fa fa-star" style="color:grey;"></i>
                                                @endif
                                                @endfor

                                        </div>
                                        @else
                                        <i class="fa fa-star" style="color:grey;"></i>
                                        @endif

                                    </div>
                                    <span class="font-small mt-15 ml-5" style="color:#39603d;font-weight:800;"> (Total
                                        {{$doctor->onlinemeeting->where('rstatus',1)->count()}} Reviews)</span>
                                </div>
                                <div class="row mt-10 mb-10">
                                    <div class="col-md-6">
                                        <span style="font-size: 32px;font-weight:700;color:#39603d;">Availability <a
                                                href="#" style="font-size: 32px;">Hospital & Timing</a></span>
                                        <ol>
                                            @foreach($doctor->practice as $item)
                                            <li class="text-primary" style="font-weight:500;">
                                                <strong>Hospital:</strong>
                                                {{$item->hospital->hospital}}, {{$item->hospital->city}},
                                                {{$item->hospital->country}}
                                            </li>
                                            <li class="text-success" style="font-weight:500;">
                                                <strong>Hours:</strong>
                                                {{$item->timing}}
                                            </li>
                                            <li class="text-danger" style="font-weight:500;"><strong>Days:</strong>
                                                {{$item->days}}</li>
                                            @endforeach
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <span style="font-size: 32px;font-weight:700;color:#39603d;">Experience <a
                                                href="#" style="font-size: 32px;">Years of Practice</a></span>
                                        <p>{!! $doctor->experience !!}</p>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-12">
                                        <a href="#" style="font-size:32px;" class="card-title">Brief Introduction:</a>
                                        <p>{!! $doctor->about_self !!}</p>
                                    </div>

                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        @if($doctor->discount)
                                        <span>PKR.{{ $doctor->discount }}</span>
                                        <span class="old-price">PKR.{{ $doctor->checkup_fees }}</span>
                                        @else
                                        <span>PKR.{{ $doctor->checkup_fees }}</span>
                                        @endif
                                    </div>
                                    <div class="add-cart">
                                        <a class="btn btn-warning" href="#"
                                            wire:click.prevent="store({{$doctor->id}},'{{$doctor->firstname}}',{{$doctor->checkup_fees}})">Book
                                            Your Appointment Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="tab-style3">
                        <ul class="nav nav-tabs text-uppercase">

                            <li class="nav-item">
                                <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (
                                    {{$doctor->onlinemeeting->where('rstatus',1)->count()}} )</a>
                            </li>
                        </ul>
                        <div class="tab-content shop_info_tab entry-main-content">

                            <div class="tab-pane fade" id="Reviews">
                                <!--Comments-->
                                <div class="comments-area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4 class="mb-30">Customer questions & answers</h4>
                                            <div class="comment-list">
                                                @php
                                                $meetings=DB::table('onlinemeetings')->where('doctor_id',$doctor->id)->get();

                                                @endphp

                                                @foreach ($meetings as $meeting )
                                                @php
                                                     $review=DB::table('appointment_reviews')->where('onlinemeeting_id',$meeting->id)->first();
                                                @endphp
                                               @if($review)
                                               <div class="single-comment justify-content-between d-flex mb-30">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center">
                                                        <img src="{{ asset('assets/images/author-2.png') }}" alt="" />

                                                    </div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="font-xs text-muted">{{$review->created_at}} </span>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10">{{$review->comment}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h4 class="mb-30">Customer reviews</h4>
                                            <div class="d-flex mb-30">

                                                @php
                                                $avgrating=0;
                                                $avgbehaviour=0;
                                                $avgwaiting_time=0;
                                                @endphp
                                                @foreach($doctor->onlinemeeting->where('rstatus',1) as $onlinemeeting)
                                                @php
                                                $avgrating=$avgrating + $onlinemeeting->review->rating;
                                                $avgbehaviour=$avgbehaviour + $onlinemeeting->review->behaviour;
                                                $avgwaiting_time=$avgwaiting_time +
                                                $onlinemeeting->review->waiting_time;
                                                @endphp
                                                @endforeach
                                                @if($avgrating > 0)
                                                <span>Skill Rating: ({{$avgrating /
                                                    $doctor->onlinemeeting->where('rstatus',1)->count()}})</span>
                                                <div class="pro-details-rating">
                                                    @for($i=1; $i<=5; $i++) @if($i<=$avgrating) <i class="fa fa-star"
                                                        style="color:#f1b24a;"></i>
                                                        @else
                                                        <i class="fa fa-star" style="color:grey;"></i>
                                                        @endif
                                                        @endfor

                                                </div>
                                                @else
                                                <i class="fa fa-star" style="color:grey;"></i>
                                                @endif
                                                <br>
                                                @if($avgbehaviour >0)
                                                <span>Behaviour Rating: ({{$avgbehaviour /
                                                    $doctor->onlinemeeting->where('rstatus',1)->count()}})</span>
                                                <div class="pro-details-rating">
                                                    @for($i=1; $i<=5; $i++) @if($i<=$avgbehaviour) <i class="fa fa-star"
                                                        style="color:#f1b24a;"></i>
                                                        @else
                                                        <i class="fa fa-star" style="color:grey;"></i>
                                                        @endif
                                                        @endfor

                                                </div>
                                                @else
                                                <i class="fa fa-star" style="color:grey;"></i>
                                                @endif
                                                <br>
                                                @if($avgwaiting_time > 0)
                                                <span>Waiting Time Rating: ({{$avgwaiting_time /
                                                    $doctor->onlinemeeting->where('rstatus',1)->count()}})</span>
                                                <div class="pro-details-rating">
                                                    @for($i=1; $i<=5; $i++) @if($i<=$avgwaiting_time) <i
                                                        class="fa fa-star" style="color:#f1b24a;"></i>
                                                        @else
                                                        <i class="fa fa-star" style="color:grey;"></i>
                                                        @endif
                                                        @endfor

                                                </div>
                                                @else
                                                <i class="fa fa-star" style="color:grey;"></i>
                                                @endif
                                            </div>

                                            <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                <div class="sidebar-widget widget-store-info mb-30 bg-3 border-0">
                    <div class="vendor-logo mb-30">
                        <img src="{{ asset('images/doctors') }}/{{ $doctor->profileImage }}"
                            alt="{{ $doctor->firstname }}" style="border-radius:91px;" />
                        <a class="btn btn-warning mt-10" href="#"
                            wire:click.prevent="store({{$doctor->id}},'{{$doctor->firstname}}',{{$doctor->checkup_fees}})">Book
                            Appointment Now</a>

                    </div>
                    <div class="vendor-info">
                        <div class="product-category">
                            <span class="text-muted">{{ $doctor->created_at }}</span>
                        </div>
                        <h4 class="mb-5"><a href="#" class="text-heading">{{ $doctor->firstname }}</a></h4>
                        <div class="product-rate-cover mb-15">
                            @php
                            $avgrating=0;
                            $avgbehaviour=0;
                            $avgwaiting_time=0;
                            @endphp
                            <div class="d-flex d-inline-block">

                                @foreach($doctor->onlinemeeting->where('rstatus',1) as $onlinemeeting)
                                @php
                                $avgrating=$avgrating + $onlinemeeting->review->rating;
                                $avgbehaviour=$avgbehaviour + $onlinemeeting->review->behaviour;
                                $avgwaiting_time=$avgwaiting_time +
                                $onlinemeeting->review->waiting_time;
                                @endphp
                                @endforeach
                                @if($avgrating > 0)
                                <span style="color:#39603d;font-weight:800;">Skill Rating: ({{$avgrating /
                                    $doctor->onlinemeeting->where('rstatus',1)->count()}})</span>
                                <div class="product-rating">
                                    @for($i=1; $i<=5; $i++) @if($i<=$avgrating) <i class="fa fa-star"
                                        style="color:#f1b24a;"></i>
                                        @else
                                        <i class="fa fa-star" style="color:grey;"></i>
                                        @endif
                                        @endfor
                                </div>
                                @else
                                <i class="fa fa-star" style="color:grey;"></i>
                                @endif
                            </div>
                            <div class="d-flex d-inline-block">

                                @if($avgbehaviour >0)
                                <span style="color:#39603d;font-weight:800;">Behaviour Rating: ({{$avgbehaviour /
                                    $doctor->onlinemeeting->where('rstatus',1)->count()}})</span>
                                <div class="product-rating" style="width: 90%">
                                    @for($i=1; $i<=5; $i++) @if($i<=$avgbehaviour) <i class="fa fa-star"
                                        style="color:#f1b24a;"></i>
                                        @else
                                        <i class="fa fa-star" style="color:grey;"></i>
                                        @endif
                                        @endfor

                                </div>
                                @else
                                <i class="fa fa-star" style="color:grey;"></i>
                                @endif
                            </div>
                            <div class="d-flex d-inline-block">

                                @if($avgwaiting_time > 0)
                                <span style="color:#39603d;font-weight:800;">Waiting Time Rating: ({{$avgwaiting_time /
                                    $doctor->onlinemeeting->where('rstatus',1)->count()}})</span>
                                <div class="product-rating" style="width: 90%">
                                    @for($i=1; $i<=5; $i++) @if($i<=$avgwaiting_time) <i class="fa fa-star"
                                        style="color:#f1b24a;"></i>
                                        @else
                                        <i class="fa fa-star" style="color:grey;"></i>
                                        @endif
                                        @endfor

                                </div>
                                @else
                                <i class="fa fa-star" style="color:grey;"></i>
                                @endif

                            </div>
                            <span class="font-small ml-5" style="color:#39603d;font-weight:800;"> (
                                {{$doctor->onlinemeeting->where('rstatus',1)->count()}} Reviews)</span>
                        </div>
                        <div class="vendor-info">
                            <a href="#" class="btn btn-xs">Services <i class="fa fa-stethoscope pt-5"></i></a>
                            <ul class="font-sm mb-20">
                                @php
                                $specials=explode(',',$doctor->specialist);
                                @endphp
                                @foreach($specials as $special)
                                @php
                                $name=DB::table('doctor_specialists')->where('id','=',$special)->first();
                                @endphp

                                <li><span
                                        style="color:#39603d;font-weight:700;text-transform:capitalize;">{{$name->name}}</span>
                                </li>

                                @endforeach
                            </ul>

                        </div>
                        <div class="follow-social mb-20">
                            <h6 class="mb-15">Follow Us</h6>
                            <ul class="social-network">
                                @php
                                $setting=DB::table('settings')->where('id',1)->first();
                                @endphp
                                <li class="hover-up">
                                    <a href="{{ $setting->twitter }}">
                                        <img src="{{ asset('images/icons/social-tw.svg') }}" alt="" />
                                    </a>
                                </li>
                                <li class="hover-up">
                                    <a href="{{ $setting->facebook }}">
                                        <img src="{{ asset('images/icons/social-fb.svg') }}" alt="" />
                                    </a>
                                </li>
                                <li class="hover-up">
                                    <a href="{{ $setting->instagram }}">
                                        <img src="{{ asset('images/icons/social-insta.svg') }}" alt="" />
                                    </a>
                                </li>
                                <li class="hover-up">
                                    <a href="{{ $setting->pinterest }}">
                                        <img src="{{ asset('images/icons/social-pin.svg') }}" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="vendor-info">
                            <ul class="font-sm mb-20">
                                <li><img class="mr-5" src="{{ asset('images/icons/icon-location.svg')}} }}"
                                        alt="" /><strong>Address: </strong> <span>{{ $doctor->city }}&nbsp;{{
                                        $doctor->state }},&nbsp;{{ $doctor->country }}</span></li>
                                <li><img class="mr-5" src="{{ asset('images/icons/icon-contact.svg') }}" alt="" />

                                    <strong>Call Us:</strong><span>(+92) - {{ $setting->phone }}</span>
                                </li>
                            </ul>
                            <a href="#"
                                wire:click.prevent="store({{$doctor->id}},'{{$doctor->firstname}}',{{$doctor->checkup_fees}})"
                                class="btn btn-xs">Book Your Appointment Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
