
<x-base-layout>
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow"><i class="fa fa-home mr-5"></i>Home</a>
                    <i class="fa fa-angle-right"></i> Pages <i class="fa fa-angle-right"></i> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <img class="border-radius-15" src="{{ asset('assets/images/login-1.png') }}" alt="" />
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Login</h1>
                                            <p class="mb-30">Don't have an account? <a href="{{ route('register') }}">Create here</a></p>
                                        </div>
                                        <x-jet-validation-errors class="mb-4" />
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" name="email" :value="old('email')" placeholder="email" required autofocus />
                                            </div>
                                            <div class="form-group">
                                                <input required=""  type="password" name="password"  required autocomplete="current-password" />
                                            </div>

                                            <div class="login_footer form-group mb-50">

                                                <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Log in</button>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <a href="/auth/google" class="btn btn-danger">Login With Google</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-base-layout>
