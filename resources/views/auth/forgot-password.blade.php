<x-base-layout>
<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <i class="fa fa-angle-right"></i> Pages <i class="fa fa-sign-out"></i> My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 m-auto">
                    <div class="login_wrap widget-taber-content background-white">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <img class="border-radius-15" src="{{ asset('assets/images/forgot_password.svg') }}" alt="" />
                                <h2 class="mb-15 mt-15">Forgot your password?</h2>
                                <p class="mb-30">Not to worry, we got you! Let’s get you a new password. Please enter your email address or your Username.</p>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                                <div class=" main-content-area">
                                    <div class="wrap-login-item " style="background:#32aeb1;">
                                        <div class="login-form form-item form-stl">
                                        @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <x-jet-validation-errors class="mb-4" />
                            <form method="POST" action="{{route('password.email')}}" style="background:white;">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Type your email address" :value="old('email')" required autofocus />
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-submit bg-success" value="email Password Reset Link" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</x-base-layout>


