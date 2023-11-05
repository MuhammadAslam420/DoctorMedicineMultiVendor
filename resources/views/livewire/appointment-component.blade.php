@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endpush
<main class="main" wire:ignore.self>
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow"><i class="fa fa-home mr-5"></i>Home</a>
                <i class="fa fa-angle-right"></i> Doctor
                <i class="fa fa-sign-out"></i> Appointment
            </div>
        </div>
    </div>
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Appointment</h1>
            </div>
        </div>
        <form wire:submit.prevent="bookAppointment" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <div class="card">
                            <table class="table" wire:ignore.self>
                                <tbody>
                                    @foreach(Cart::instance('doctor')->content() as $item)
                                    <tr class="bg-blue-300">

                                        <td class="cart-product-image">
                                            <a href="#"><img src="{{asset('images/doctors')}}/{{$item->model->profileImage}}" alt="{{$item->model->name}}" style="width:75px; height:75px; border-radius:91px;"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="#" class="text-light font-bold">{{$item->model->firstname}}</a></h4>
                                        </td>
                                        <td class="cart-product-price text-light font-bold">Rs.{{$item->model->checkup_fees}}</td>
                                        <td class="cart-product-price text-light font-bold"><a href="#" wire:click.prevent="destroy('{{$item->rowId}}')">Cancel Appointment</a></td>
                                        @php
                                        $doctor_id=$item->model->id;
                                        @endphp
                                    </tr>




                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <div class="col-md-12">
                            <div class="billing_address">
                                <h6 class="card-title m-2">Patient Personal Information</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Patient First Name*</h6>
                                                <div class="input-item input-item-name">
                                                    <input type="text" class="form-control" name="firstname" placeholder="First Name" wire:model="firstname">

                                                    @error('firstname') <span class="text-danger">{{$message}}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Patient Last Name*</h6>
                                                <div class="input-item input-item-name">
                                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name" wire:model="lastname">
                                                    @error('lastname') <span class="text-danger">{{$message}}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Patient Email Address*</h6>
                                                <div class="input-item input-item-email">
                                                    <input type="email" class="form-control" name="email" placeholder="email address" wire:model="email">
                                                    @error('email') <span class="text-danger">{{$message}}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Patient Mobile Number*</h6>
                                                <div class="input-item input-item-phone">
                                                    <input type="text" class="form-control" name="mobile" placeholder="phone number" wire:model="mobile">
                                                    @error('mobile') <span class="text-danger">{{$message}}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6>Document Related Patient</h6>
                                                    <div class="input-item">
                                                        <input type="file" class="form-control" multiple name="document" wire:model="document">
                                                        @error('document') <span class="text-danger">{{$message}}</span>@enderror
                                                        @if($document)
                                                        @foreach($document as $image)
                                                        <img src="{{$image->temporaryurl()}}" width="120" />
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6>Date Of Birt</h6>
                                                    <div class="input-item">
                                                        <input type="date" multiple name="document" wire:model="dob" class="form-control">
                                                        @error('dob') <span class="text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6>Gender</h6>
                                                    <div class="input-item">
                                                        <select wire:model="gender" class="form-control">
                                                            <option value="">Select Gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="shemale">Shemale</option>
                                                            <option value="don't Know">Don't Know</option>
                                                        </select>
                                                        @error('gender') <span class="text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <h6>Problem</h6>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-item">
                                                            <textarea type="text" class="form-control" placeholder="Discuss About / Checkup About" name="line2" wire:model="problem"></textarea>
                                                            @error('problem') <span class="text-danger">{{$message}}</span>@enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="col-lg-12 col-md-12">


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6>Line 1*</h6>
                                                    <div class="input-item input-item-phone">
                                                        <input type="text" name="line1" class="form-control" placeholder="Line1 Address" wire:model="line1">
                                                        @error('line1') <span class="text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Line 2*</h6>
                                                    <div class="input-item input-item-phone">
                                                        <input type="text" name="line2" class="form-control" placeholder="Line2 Address" wire:model="line2">
                                                        @error('line2') <span class="text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>City*</h6>
                                                    <div class="input-item input-item-phone">
                                                        <input type="text" name="city" class="form-control" placeholder="City" wire:model="city">
                                                        @error('city') <span class="text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Province*</h6>
                                                    <div class="input-item input-item-phone">
                                                        <input type="text" name="province" class="form-control" placeholder="Province" wire:model="province">
                                                        @error('province') <span class="text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Country*</h6>
                                                    <div class="input-item input-item-phone">
                                                        <input type="text" name="country" class="form-control" placeholder="Country" wire:model="country">
                                                        @error('country') <span class="text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>Zipcode*</h6>
                                                    <div class="input-item input-item-phone">
                                                        <input type="text" name="zipcode" class="form-control" placeholder="ZipCode" wire:model="zipcode">
                                                        @error('zipcode') <span class="text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mt-5">
                                    <div style="display: flex;flex-direction:row;">
                                        <p><label><input type="checkbox" name="online" value="1" wire:model="online_consultation" style="width:16px;"> Online
                                                Consultation</label>
                                        </p>
                                        <p><label><input type="checkbox" name="online" value="1" wire:model="checkup" style="width:16px;"> Clinic Checkup</label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="font-bold text-center text-lg">Pick Appointment Date and Time</h6>
                                <div class="col-md-12 text-center" wire:ignore>

                                    <div class=" input-item">
                                        <div style="display:flex;flex-direction:row;">
                                            <input wire:model="appointment_date" class="bg-gray-300 w-full border border-gray-500 focus:outline-none p-2" name="appointment_date" id="appointment_date" placeholder="YYYY-MM-DD" autocomplete="off" />
                                            <i class="fa fa-calendar form-control-feedback text-xl" style="position:relative;margin-left:-30px;margin-top:15px;"></i>
                                        </div>
                                        @error('appointment_date')<p class="text-danger">{{$message}}</p>@enderror

                                    </div>
                                </div>

                                <div class="col-md-12" wire:ignore>
                                    <h6 class="font-bold text-center text-lg">Available Slots for Appoinmtment</h6>

                                    <div class="input-item mt-3">
                                        <div class="row">

                                            @php
                                            // dd($doctor_id);
                                            $slots=DB::table('practices')->where('doctor_id',$doctor_id)->where('booked','0')->get();
                                            // dd($slots);
                                            @endphp

                                            @foreach($slots as $key=>$time)
                                            <div class="col-3 h-48">
                                                <input type="radio" id="interval-{{ $key }}" value="{{ $time->timing }}" wire:model="duration" class="hidden peer">
                                                <label for="interval-{{ $key }}" class='bg-blue-300 inline-block w-full text-lg text-center font-bold border py-1 peer-checked:bg-green-400' wire:key='interval-{{ $key }}'>{{ $time->timing }} </label>
                                            </div>
                                            @endforeach



                                            @error('duration')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Note*</h6>
                                <div class="panel panel-warning">
                                    <div class="panel-heading ">
                                        <p class="alert alert-success">If You need Online
                                            Consulation then you can check online consulatation
                                            and pay doctor fee with your credit card and you can
                                            also pay through your jazzcash or easy paisa on this
                                            number 03106473564
                                            and send the transaction message on our whatsapp
                                            number before the online meeting date.
                                            If You want book doctor clinic appointment then
                                            avoid to click online consulatation and choose cash
                                            on delivery method. And carefully select the time
                                            slote and days according to the availability of
                                            doctor and hospital.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        @if($online_consultation)

                        <div>
                            <input type="radio" name="payment-method" id="payment-method-visa" value="card" wire:model="paymentmode" style="width:16px;">
                            <span>Pay with Debit / Credit Card</span>
                        </div>
                        <div>
                            <input type="radio" name="payment-method" id="payment-method-visa" value="jazzcash" wire:model="paymentmode" style="width:16px;">
                            <span>Pay with Jazzcash</span>

                        </div>
                        <div>
                            <input type="radio" name="payment-method" id="payment-method-visa" value="easypaisa" wire:model="paymentmode" style="width:16px;">
                            <span>Pay with Easypaisa</span>

                        </div>
                        @endif
                    </div>

                    <div class="col-lg-6">
                        <div class="ltn__checkout-payment-method mt-50">

                            <div id="checkout_accordion_1">
                                @if($paymentmode == 'card')
                                <div class="row">
                                    @if(Session::has("message"))
                                    <div class="alert alert-warning">{{Session::get('$message')}}</div>
                                    @endif
                                    <div class="col-md-6">
                                        <h6>Card No </h6>
                                        <div class="input-item">
                                            <input type="text" class="form-control" placeholder="Card Number" name="card-no" wire:model="card_no">
                                            @error('card_no') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6>Expiry Month </h6>
                                        <div class="input-item">
                                            <input type="text" class="form-control" placeholder="MM" name="exp-month" wire:model="exp_month">
                                            @error('exp_month') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6>Expiry Year</h6>
                                        <div class="input-item">
                                            <input type="text" class="form-control" placeholder="YYYY" name="exp-yearr" wire:model="exp_year">
                                            @error('exp_year') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <h6>CVC</h6>
                                        <div class="input-item">
                                            <input type="password" class="form-control" name="cvc" wire:model="cvc">
                                            @error('cvc') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- card -->
                                @if($checkup)
                                <div class="card">
                                    <input type="radio" name="payment-method" id="payment-method-ondelivery" value="cod" wire:model="paymentmode" style="width:22px;">
                                    <span>Payment on Clinic</span>

                                </div>
                                @endif
                                <!-- card -->

                                @error('paymentmode') <span class="text-danger">{{$message}}</span>@enderror
                                <!-- card

                                    <div class="card">
                                        <input type="radio" name="payment-method" id="payment-method-visa" value="cod" wire:model="paymentmode">
                                            <span>Pay with Debit / Credit Card</span>

                                    </div>
                                    -->
                            </div>

                            <div class="ltn__payment-note mt-30 mb-30">
                                <p>Your personal data will be used to process your order, support your experience
                                    throughout this website, and for other purposes described in our privacy policy.</p>
                            </div>
                            @if($errors->isEmpty())
                            <div wire:ignore id="processing" style="fon-size:22px; margin-bottom:20px; padding-left:27px; color:green; display:none;">
                                <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                <span>Processing....</span>

                            </div>
                            @endif
                            <button class="btn btn-warning text-uppercase" type="submit">Place Appointment</button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card shoping-cart-total mt-50">
                            <h4 class="title-2">Doctor Fees</h4>

                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td>fees.{{Cart::subtotal()}}</td>
                                        <td>tax.{{Cart::tax()}}</td>
                                        <td> Rs.{{Cart::total()}} <strong>Appointment Total Fees</strong></td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    @push('scripts')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

    <script>
        var picker = new Pikaday({
            field: document.getElementById('appointment_date'),
            onSelect: function() {
                var data = this.getDate();
                @this.set('appointment_date', data);
            }
        });
    </script>

    @endpush
