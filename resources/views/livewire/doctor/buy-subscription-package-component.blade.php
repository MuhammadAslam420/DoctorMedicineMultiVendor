<div class="main-content" wire:ignore.self>
    <section class="section">

        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-primary">
                            <div class="card-header">
                                <h3 class="heading">{{$package->name}}</h3>
                                <br><br>
                                <div style="font-size:12px;">{{$package->price}} .
                                    <span style="font-size:12px;">Rs</span>
                                    <span style="font-size:12px;">/{{$package->days}} days</span>
                                </div>
                            </div>
                            <ul class="pricing-content">
                                {!! $package->description !!}
                            </ul>
                            <button type="button" class="btn btn-success">
                                The Package You Has Been Selected
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form wire:submit.prevent="checkout">
                            <div class="payment ml-30">
                                <h4 class="mb-30">Choose Payment Method</h4>
                                <div class="payment_option">


                                    <div class="custome-radio mt-5">
                                        <input type="radio" name="payment-method" id="payment-method-visa" value="card" wire:model="paymentmode" style="width:22px;">
                                        <label class="form-label">Debit/Credit Card</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input type="radio" name="payment-method" id="payment-method-easypasia" value="easypaisa" wire:model="paymentmode" style="width:22px;">
                                        <label class="form-label">EasyPaisa</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input type="radio" name="payment-method" id="payment-method-jazzcash" value="jazzcash" wire:model="paymentmode" style="width:22px;">
                                        <label class="form-label">JazzCash</label>
                                    </div>
                                    @if($paymentmode == 'card')
                                    <div class="warp-address-billing">
                                        @if(Session::has('message'))
                                        <div class="text-danger">{{Session::get('message')}}</div>
                                        @endif
                                        <p class="row-in-form">
                                            <label for="card-no">Card Number:</label>
                                            <input type="text" name="card-no" value="" class="form-control" placeholder="car number" wire:model="card_no">
                                            @error('card_no') <span class="text-danger">{{$message}}</span> @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="exp-month">Expiry Month:</label>
                                            <input type="text" name="exp-mont" value="" class="form-control" placeholder="MM" wire:model="exp_month">
                                            @error('exp_month') <span class="text-danger">{{$message}}</span> @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="exp-year">Expiry year:</label>
                                            <input type="text" name="exp-year" value="" class="form-control" placeholder="YY" wire:model="exp_year">
                                            @error('exp_year') <span class="text-danger">{{$message}}</span> @enderror
                                        </p>
                                        <p class="row-in-form">
                                            <label for="cvc">CVC:</label>
                                            <input type="password" name="cvc" value="" class="form-control" placeholder="cvc number" wire:model="cvc">
                                            @error('cvc') <span class="text-danger">{{$message}}</span> @enderror
                                        </p>
                                    </div>
                                    @elseif($paymentmode == 'easypaisa')
                                    <div>
                                        <h5>EasyPaisa Account:03443262447</h5>
                                    </div>
                                    @elseif($paymentmode == 'jazzcash')
                                    <div>
                                        <h5>Jazzcash Account:03106473564</h5>
                                    </div>
                                    @endif

                                </div>
                                <div class="payment-logo d-flex">
                                    <img class="mr-15" src="{{asset('assets/images/payment-visa.svg')}}" alt="">
                                    <img class="mr-15" src="{{asset('assets/images/payment-master.svg')}}" alt="">
                                    <img class="mr-15" src="{{asset('images/Jazzcash.svg')}}" style="width:55px;" alt="">
                                    <img class="mr-15" src="{{asset('images/Easypaisa.svg')}}" style="width:25px;" alt="">
                                </div>
                                <button type="submit" class="btn btn-info btn-fill-out btn-block mt-3">Pay Your Payment<i class="fa fa-sign-out ml-15"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">Setting Panel
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Select Layout</h6>
                    <div class="selectgroup layout-color w-50">
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                            <span class="selectgroup-button">Light</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                            <span class="selectgroup-button">Dark</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Sidebar Color</h6>
                    <div class="selectgroup selectgroup-pills sidebar-color">
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Color Theme</h6>
                    <div class="theme-setting-options">
                        <ul class="choose-theme list-unstyled mb-0">
                            <li title="white" class="active">
                                <div class="white"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="black">
                                <div class="black"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Mini Sidebar</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="sticky_header_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Sticky Header</span>
                        </label>
                    </div>
                </div>
                <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                    <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                        <i class="fas fa-undo"></i> Restore Default
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
