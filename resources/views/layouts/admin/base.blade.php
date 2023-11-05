<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>UAE Medicine - Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/admin2/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/admin2/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin2/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/admin2/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset("assets/img/favicon.ico")}}' />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.dataTables.min.css"/>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" >
  @livewireStyles
  @stack('styles')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>

          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        <li><a href="{{route('admin.cart')}}"><i class="fa fa-shopping-cart"></i><sup>
        @if(Cart::instance('cart')->count()>0)
        <span style="background:gold;border-radius:55px; padding:2px;">{{Cart::instance('cart')->count()}}</span>

        @else
        <span style="background:gold;border-radius:55px; padding:2px;">0</span>

        @endif
        </sup></a></li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="{{ asset('assets/admin2/img/users/user-1.png') }}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/admin2/img/users/user-2.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/admin2/img/users/user-5.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/admin2/img/users/user-4.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/admin2/img/users/user-3.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/admin2/img/users/user-2.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>Logout</a>
                                         <form id="logout-form" method="POST" action="{{route('logout')}}">
                                         @csrf

                                         </form>
            </div>
          </li>



        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/"> <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name" style="font-size:9px;">UAE MEdicine AdminPanel</span>
            </a>
          </div>
         <ul class="sidebar-menu" style="list-style:none; color:black;font-weight:500;">
            <li class="dropdown ">
              <a href="{{route('admin.dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown ">
              <a href="{{route('admin.pharmacyshop')}}" class="nav-link"><i data-feather="shopping-cart"></i><span>Pharmacy</span></a>
            </li>
            <li><a class="nav-link" href="{{route('admin.pharmacysale')}}"><i data-feather="shopping-cart"></i><span>Pharmacy Sale</span></a></li>
              <li><a class="nav-link" href="{{route('admin.orders')}}">All Orders</a></li>
              <li><a class="nav-link" href="{{route('admin.perscription')}}">All Perscription</a></li>
              <li><a class="nav-link" href="{{route('admin.inventory')}}">Inventory Detail</a></li>
                <li><a class="nav-link" href="{{route('admin.category')}}">All Categories</a></li>
                <li><a class="nav-link" href="{{route('admin.addcategory')}}">Add Category</a></li>
              <li><a class="nav-link" href="{{route('admin.product')}}">Admin Products</a></li>
              <li><a class="nav-link" href="{{route('admin.doctorlist')}}">All Available Doctors</a></li>
              <li><a class="nav-link" href="{{route('admin.supplierlist')}}">All Available Supplier</a></li>
              <li><a href="{{route('admin.pharmacistlist')}}" class="nav-link">All Available Pharmacist</a></li>
                <li><a class="nav-link" href="{{route('admin.addproduct')}}">Add Product</a></li>
                <li><a class="nav-link" href="{{route('admin.homeslider')}}">All Home Sliders</a></li>
                <li><a class="nav-link" href="{{route('admin.addhomeslider')}}">Add Slider</a></li>
                <li><a class="nav-link" href="{{route('admin.homecategories')}}">Home Categories</a></li>
                <li><a class="nav-link" href="{{route('admin.sale')}}">Sale On</a></li>
              <li><a class="nav-link" href="{{route('admin.approvalproduct')}}">View Suppplier Products</a></li>
              <li><a class="nav-link" href="{{route('admin.coupon')}}">All Coupons</a></li>
              <li><a class="nav-link" href="{{route('admin.subscriptionpackages')}}">Subscription Packages</a></li>
              <li><a class="nav-link" href="{{route('admin.contact')}}">Contact US</a></li>




          </ul>
        </aside>
      </div>
      {{$slot}}

      <footer class="main-footer">
        <div class="footer-left">
          <a href="#">UAE Medicine</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  @livewireScripts
  @livewireChartsScripts
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <!-- General JS Scripts -->
  <script src="{{asset('assets/admin2/js/app.min.js')}}"></script>
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  <script src="{{asset('assets/admin2/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/admin2/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/admin2/js/custom.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/oedwqmg4x4zmk4bqtjwiqzd2gps4jnbw6gcey3bot5178o5y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  @stack('scripts')
  @stack('js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
