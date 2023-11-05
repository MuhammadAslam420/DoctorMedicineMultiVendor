<div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Contact Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="/"><span class="ltn__secondary-color"><i class="fa fa-home"></i></span> Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{asset('images/icons/10.png')}}" alt="Icon Image">
                        </div>
                        <h3>Email Address</h3>
                        <p>info@webmail.com <br>
                            jobs@webexample.com</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{asset('images/icons/11.png')}}" alt="Icon Image">
                        </div>
                        <h3>Phone Number</h3>
                        <p>+0123-456789 <br> +987-6543210</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{asset('images/icons/12.png')}}" alt="Icon Image">
                        </div>
                        <h3>Office Address</h3>
                        <p>18/A, New Born Town Hall <br>
                            New York, US</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">Get A Quote</h4>
                        @if(Session::has('cont_msg'))
								<div class="alert alert-success" role="alert">{{Session::get('cont_msg')}}</div>
						@endif
                        <form wire:submit.prevent="sendMessage">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name">
                                        <input type="text" name="name"  placeholder="name" wire:model="name">
									@error('name') <div class="alert alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email">
                                        <input type="email" name="email"  placeholder="email" wire:model="email">
									@error('email') <div class="alert alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-subject">
                                        <input type="text"	name="phone"  placeholder="mobile Number" wire:model="phone">
									@error('phone') <div class="alert alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone">
                                    <textarea name="comment" id="comment"  placeholder="Message" wire:model="comment"></textarea>
									@error('comment') <div class="alert alert-danger">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <input type="submit" name="ok" value="Submit" class="btn btn-info" >

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->

    <!-- GOOGLE MAP AREA START -->
    <div class="google-map mb-120">



    </div>
    <!-- GOOGLE MAP AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Buy medical disposable face mask <br> to protect your loved ones</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="shop.html">Explore Products <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->
