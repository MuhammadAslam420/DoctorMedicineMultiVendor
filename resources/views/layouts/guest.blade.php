
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UAE Medicine -Home</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <!--<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />-->
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    @livewireStyles
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

   <!-- HEADER AREA START (header-3) -->
 <header class="ltn__header-area ltn__header-3">       
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area border-bottom" style="background:#32AEB1;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li style="color:white;">UAE No's 1 Pharmacy and Health Website</li>
                            <li style="color:white;"><a href="locations.html"><i class="fa fa-map-marker"style="color:#32AEB1;"></i> 15/A, Nest Tower, NYC</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-right text-end">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li>
                                    <!-- ltn__language-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                        <ul>
                                            <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you" style="color:white;font-size:12px;"><i class="fa fa-envelope"></i> info@webmail.com</a></li>

                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li><a href="#" title="Facebook"><i class="fa fa-facebook-f" style="color:white;"></i></a></li>
                                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"style="color:white;"></i></a></li>
                                            
                                            <li><a href="#" title="Instagram"><i class="fa fa-instagram"style="color:white;"></i></a></li>
                                            <li><a href="#" title="Dribbble"><i class="fa fa-dribbble" style="color:white;"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end --> 
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo">
                        <a href="/">
                            <!--<img src="img/logo.png" alt="Logo">-->
                            <p style="color:#32AEB1;font-size:15px;">UAE Medicine</p>
                        </a>
                    </div>
                </div>
                <div class="col header-contact-serarch-column d-none d-lg-block">
                    <div class="header-contact-search">
                        <!-- header-feature-item -->
                        <div class="header-feature-item">
                            <div class="header-feature-icon">
                                <i class="fa fa-phone" style="color:#32AEB1;"></i>
                            </div>
                            <div class="header-feature-info">
                                <h6>Phone</h6>
                                <p><a href="tel:0123456789">+0123-456-789</a></p>
                            </div>
                        </div>
                        <!-- header-search-2 -->
                        <div class="header-search-2">
                            <form id="#123" method="get"  action="#">
                                <input type="text" name="search" value="" placeholder="Search here..."/>
                                <button type="submit">
                                    <span><i class="fa fa-search" style="color:#32AEB1;"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- header-options -->
                    <div class="ltn__header-options">
                        <ul>
                          
                            <li class="d-lg-none">
                                <!-- header-search-1 -->
                                <div class="header-search-wrap">
                                    <div class="header-search-1">
                                        <div class="search-icon">
                                            <i class="fa fa-search" style="color: #32AEB1;"></i>
                                            <i class="icon-cancel  for-search-close"></i>
                                        </div>
                                    </div>
                                    <div class="header-search-1-form">
                                        <form id="#" method="get"  action="#">
                                            <input type="text" name="search" value="" placeholder="Search here..."/>
                                            <button type="submit">
                                                <span><i class="fa fa-search"  style="color: #32AEB1;"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none---"> 
                                <!-- user-menu -->
                                <div class="ltn__drop-menu user-menu">
                                    <ul>
                                      
                                        @if(Route::has('login'))
                                        @auth
                                        @if(Auth::user()->utype === 'ADM')
                                        <li><a href="#"  style="font-size:11px;color:seagreen;"><i class="fa fa-user" style="color:#32AEB1;"></i>({{Auth::user()->name}})</a>
                                           <ul>
                                           
                                           <li><a href="{{route('admin.dashboard')}}">AdminPanel</a></li>
                                           <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                           <form id="logout-form" method="POST" action="{{route('logout')}}">
                                           @csrf
                                           
                                           </form>
                                           </ul>
                                       </li>
                                        @elseif(Auth::user()->utyp === 'SUP')
                                        <li><a href="#"> ({{Auth::user()->name}})</a>
                                           <ul>
                                          
                                           <li><a href="{{route('supplier.dashboard')}}">SupplierDashboard</a></li>
                                           <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                           <form id="logout-form" method="POST" action="{{route('logout')}}">
                                           @csrf
                                           
                                           </form>
                                           </ul>
                                       </li>
                                        @elseif(Auth::user()->utype === 'DOC')
                                        <li><a href="#"  style="font-size:11px;color:seagreen;"><i class="fa fa-user" style="color:#32AEB1;"></i>({{Auth::user()->name}})</a>
                                           <ul>
                                           
                                           <li><a href="{{route('doc.dashboard')}}">DoctorPanel</a></li>
                                           <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                           <form id="logout-form" method="POST" action="{{route('logout')}}">
                                           @csrf
                                           
                                           </form>
                                           </ul>
                                       </li>
                                       
                                        @elseif(Auth::user()->utype === 'PHR')
                                        <li><a href="#"  style="font-size:11px;color:seagreen;"><i class="fa fa-user" style="color:#32AEB1;"></i>({{Auth::user()->name}})</a>
                                           <ul>
                                          
                                           <li><a href="{{route('phr.dashboard')}}">PharmacistPanel</a></li>
                                           <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                           <form id="logout-form" method="POST" action="{{route('logout')}}">
                                           @csrf
                                           
                                           </form>
                                           </ul>
                                       </li>
                                       
                                      
                                       @elseif(Auth::user()->utype === 'DELMAN')
                                        <li><a href="#"  style="font-size:11px;color:seagreen;"><i class="fa fa-user" style="color:#32AEB1;"></i>({{Auth::user()->name}})</a>
                                           <ul>
                                           <li><a href="{{route('deliverymanger.dashboard')}}">DeliveryManagerPanel</a></li>
                                           @csrf
                                           <form method="POST" action="{{route('logout')}}">
                                           <li><a href="{{route('logout')}}" onclick="event.preventDefault(); .closest('form').submit();">Logout</a></li>
                                           </form>
                                           </ul>
                                       </li>
                                       @elseif(Auth::user()->utype === 'PAT')
                                        <li><a href="#"  style="font-size:11px;color:seagreen;"><i class="fa fa-user" style="color:#32AEB1;"></i>({{Auth::user()->name}})</a>
                                           <ul>
                                           <li><a href="{{route('patient.dashboard')}}">PatientPanel</a></li>
                                           <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                           <form id="logout-form" method="POST" action="{{route('logout')}}">
                                           @csrf
                                           
                                           </form>
                                           </ul>
                                       </li>
                                       @elseif(Auth::user()->utype === 'DELBOY')
                                        <li><a href="#"  style="font-size:11px;color:seagreen;"><i class="fa fa-user" style="color:#32AEB1;"></i>({{Auth::user()->name}})</a>
                                           <ul>
                                           <li><a href="{{route('deliveryboy.dashboard')}}">DeliveryBoyPanel</a></li>
                                           <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                           <form id="logout-form" method="POST" action="{{route('logout')}}">
                                           @csrf
                                           
                                           </form>
                                           </ul>
                                       </li>
                                        @else
                                        <li><a href="#"  style="font-size:11px;color:seagreen;"><i class="fa fa-user" style="color:#32AEB1;"></i>({{Auth::user()->name}})</a>
                                           <ul>
                                           
                                           <li><a href="{{route('user.dashboard')}}">CustomerPanel</a></li>
                                           <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                           <form id="logout-form" method="POST" action="{{route('logout')}}">
                                           @csrf
                                           
                                           </form>
                                           </ul>
                                       </li>
                                       @endif
                                        @else
                                        <li>
                                            <a href="#"><i class="fa fa-user" style="color:#32AEB1;"></i></a>
                                            <ul>
                                                <li><a href="{{route('login')}}">Sign in</a></li>
                                                <li><a href="{{route('register')}}">Register</a></li>
                                                
                                            </ul>
                                        </li>
                                        @endif
                                        @endif
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <!-- mini-cart 2 -->
                                <div class="mini-cart-icon mini-cart-icon-2">
                                    <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                        <span class="mini-cart-icon">
                                            <i class="fa fa-shopping-cart" style="color:#32AEB1;"></i>
                                            <sup style="background: #32AEB1;">2</sup>
                                        </span>
                                        <h6><span>Your Cart</span> <span  style="color:#32AEB1;">$89.25</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
    <!-- header-bottom-area start -->
    <div class="header-bottom-area ltn__border-top ltn__header-sticky  ltn__sticky-bg-white--- ltn__sticky-bg-secondary ltn__secondary-bg section-bg-1 menu-color-white d-none d-lg-block" style="background: #32AEB1;">
        <div class="container">
            <div class="row">
                <div class="col header-menu-column justify-content-center">
                    <div class="sticky-logo">
                        <div class="site-logo">
                            <a href="/"><p style="color:white;">UAE Medicine</p><!--<img src="img/logo-3.png" alt="Logo">--></a>
                        </div>
                    </div>
                    <div class="header-menu header-menu-2">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li ><a href="/">Home</a>
                                       
                                    </li>
                                    <li ><a href="about.html">About</a>
                                     
                                    </li>
                                    <li ><a href="/shop">Shop</a>
                                       
                                    </li>
                                    <li ><a href="blog.html">News</a>
                                        
                                    </li>
                                    <li ><a href="team.html">Doctors</a>
                                     
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom-area end -->
</header>
<!-- HEADER AREA END -->

<!-- MOBILE MENU START -->
<div class="mobile-header-menu-fullwidth mb-30 d-block d-lg-none" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Mobile Menu Button -->
                <div class="mobile-menu-toggle d-lg-none">
                    <span>MENU</span>
                    <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                        <svg viewBox="0 0 800 600">
                            <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                            <path d="M300,320 L540,320" id="middle"></path>
                            <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MOBILE MENU END -->

<!-- Utilize Cart Menu Start -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="img/product/1.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Antiseptic Spray</a></h6>
                    <span class="mini-cart-quantity">1 x $65.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="img/product-2/2.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Digital Stethoscope</a></h6>
                    <span class="mini-cart-quantity">1 x $85.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="img/product/3.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Cosmetic Containers</a></h6>
                    <span class="mini-cart-quantity">1 x $92.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="img/product/4.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Thermometer Gun</a></h6>
                    <span class="mini-cart-quantity">1 x $68.00</span>
                </div>
            </div>
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$310.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="/cart" class="theme-btn-1 btn btn-effect-1" style="background: #32AEB1;">View Cart</a>
                <a href="/checkout" class="theme-btn-2 btn btn-effect-2" style="background: #32AEB1;">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div>
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu" style="background: #32AEB1;">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="/">
                    <p style="color:white;">UAE Medicine</p>
                    <!--<img src="img/logo.png" alt="Logo">-->
                </a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fa fa-search" style="color:white;"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="/" style="color:white;">Home</a>
                   
                </li>
                <li><a href="about.php" style="color:white;">About</a>
                   
                </li>
                <li><a href="/shop" style="color:white;">Shop</a>
                   
                </li>
                <li><a href="blog.php" style="color:white;">News</a>
               
                </li>
                <li><a href="team.php" style="color:white;">Doctors</a>
                  
                </li>
                <li><a href="contact.php" style="color:white;">Contact</a></li>
            </ul>
        </div>
      
    </div>
</div>
<!-- Utilize Mobile Menu End -->
{{$slot}}
   
    <!-- footter-->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <p style="color: #32AEB1; font-size: 20px;" class="text-center">UAE Medicine</p>
                                    <!--<img src="img/logo-2.png" alt="Logo">-->
                                </div>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.</p>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>Brooklyn, New York, United States</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="fa fa-phone" style="color: white;"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="fa fa-envelope" style="color: white;"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:example@example.com">example@example.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Company</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="/shop">All Products</a></li>
                                    <li><a href="locations.html">Locations Map</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Services</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="order-tracking.html">Order tracking</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="account.html">My account</a></li>
                                    <li><a href="about.html">Terms & Conditions</a></li>
                                    <li><a href="about.html">Promotional Offers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Customer Care</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="account.html">My account</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="order-tracking.html">Order tracking</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <div class="footer-newsletter">
                                <form action="#">
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                            <h5 class="mt-30">We Accept</h5>
                            <img src="img/icons/payment-4.png" alt="Payment Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5" style="background: #32AEB1;">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>All Rights Reserved @ UAE Medicine <span class="current-year"></span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

  

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="https://use.fontawesome.com/0b84b2eea5.js"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>
    @livewireScripts
  
</body>
</html>

