
        <div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
            <div class="custom-container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">Upload Doctor Prescription Here</li>
                    </ul>
                </div>
            </div>
        </div>
    <div class=" custom-container">
    <form wire:submit.prevent="uploadperscription">
        <div class="row">

            <div class="col-md-12">
            <div class="wrap-address-billing">

                    <div class="ltn__checkout-single-content mt-50">
                    <h3 class="box-title">Billing & Shipping Address</h3>
                        <div class="ltn__checkout-single-content-info">
                           <div class="row">
                               <div class="col-md-12">
                                 <div class="billing_address">
                                <h6>Personal Information</h6>
                                <div class="billing-address">
                <p class="row-in-form">
                    <label for="fname">first name<span>*</span></label>
                    <input  type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
                    @error('firstname') <span class="text-danger">{{$message}}</span>  @enderror
                </p>
                <p class="row-in-form">
                    <label for="lname">last name<span>*</span></label>
                    <input  type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
                    @error('lastname') <span class="text-danger">{{$message}}</span>  @enderror
                </p>
                <p class="row-in-form">
                    <label for="email">Email Addreess:</label>
                    <input  type="email" name="email" value="" placeholder="Type your email" wire:model="email">
                    @error('email') <span class="text-danger">{{$message}}</span>  @enderror
                </p>
                <p class="row-in-form">
                    <label for="phone">Phone number<span>*</span></label>
                    <input id="phone" type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
                    @error('mobile') <span class="text-danger">{{$message}}</span>  @enderror
                </p>
                <p class="row-in-form">
                    <label for="add">Address Line1:</label>
                    <input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line1">
                    @error('line1') <span class="text-danger">{{$message}}</span>  @enderror
                </p>
                <p class="row-in-form">
                    <label for="add">Address Line2:</label>
                    <input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line2">
                    @error('line2') <span class="text-danger">{{$message}}</span>  @enderror
                </p>

                <p class="row-in-form">
                    <label for="add">province:</label>
                    <input  type="text" name="add" value="" placeholder="province" wire:model="province">
                    @error('province') <span class="text-danger">{{$message}}</span>  @enderror
                </p>
                <p class="row-in-form">
                    <label for="country">Country<span>*</span></label>
                    <input  type="text" name="country" value="" placeholder="United States" wire:model="country">
                    @error('country') <span class="text-danger">{{$message}}</span>  @enderror
                </p>
                <p class="row-in-form">
                    <label for="city">Town / City<span>*</span></label>
                    <input  type="text" name="city" value="" placeholder="City name" wire:model="city">
                    @error('city') <span class="text-danger">{{$message}}</span>  @enderror
                </p>
                <p class="row-in-form">
                    <label for="zip-code">Postcode / ZIP:</label>
                    <input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
                    @error('zipcode') <span class="text-danger">{{$message}}</span>  @enderror
                </p>
                <p class="row-in-form">
                    <label for="images">Upload Perscription*:</label>
                    <input type="file"   name="images" multiple  wire:model="images">
                     @error('images') <span class="text-danger">{{$message}}</span>@enderror

                </p>
                 <p class="row-in-form">
                    <label for="NOD">Medicine Required For No's Days*</label>

                    <input type="number"   name="days" multiple  wire:model="days">
                     @error('days') <span class="text-danger">{{$message}}</span>@enderror

                 </p>

                                </div><br>
                                <div class="col-lg-12 col-md-6">
                                        <div class="input-item">
                                        <button class="btn btn-warning  text-uppercase" type="submit">Upload Now</button>
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
        </form>
    </div>
   </div>

