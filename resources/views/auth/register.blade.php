<x-base-layout>
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow"><i class="fa fa-home mr-5"></i>Home</a>
                    <i class="fa fa-angle-right"></i> Pages <i class="fa fa-sign-out"></i> Regsiter Now
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Create an Account</h1>
                                            <p class="mb-30">Already have an account? <a
                                                    href="{{ route('login') }}">Login</a></p>
                                        </div>
                                        <x-jet-validation-errors class="mb-4" />
                                        <form action="{{route('register')}}" name="frm-login" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Your name*" required
                                                    autofocus />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="Email address"
                                                    :value="old('new email')" required autofocus />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="phone" placeholder="Mobile Number*"
                                                    :value="phone" required autofocus />
                                            </div>
                                            <div class="form-group">
                                                <select name="utype" class="form-control" required autofocus>
                                                    <option>Select User Type</option>
                                                    <option value="USR">Customer/Buyer</option>
                                                    <option value="DOC">Doctor</option>
                                                    <option value="PHR">Pharmacist</option>
                                                    <option value="SUP">Supplier/Seller</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="Password" required
                                                    autofocus autocomplete="new password" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation"
                                                    placeholder="Confirm Password" />
                                            </div>
                                            <div class="form-group mb-30">
                                                <button type="submit"
                                                    class="btn btn-fill-out btn-block hover-up font-weight-bold"
                                                    name="login">Submit &amp; Register</button>
                                            </div>
                                            <p class="font-xs text-muted"><strong>Note:</strong>Your personal data will
                                                be used to support your experience throughout this website, to manage
                                                access to your account, and for other purposes described in our privacy
                                                policy</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <div class="card-login mt-115">
                                    <a href="#" class="social-login facebook-login">
                                        <img src="{{ asset('assets/images/logo-facebook.svg') }}" alt="" />
                                        <span>Continue with Facebook</span>
                                    </a>
                                    <a href="/auth/google" class="social-login google-login">
                                        <img src="{{ asset('assets/images/logo-google.svg')}}" alt="" />
                                        <span>Continue with Google</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-base-layout>
