<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>UAE Medicine - Supplier Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/admin2/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/admin2/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin2/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/admin2/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset("assets/admin2/img/favicon.ico")}}' />
  @livewireStyles
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

          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              @php
        $supplier=DB::table('suppliers')->where('user_id','=',Auth::user()->id)->first();
        @endphp
        @if($supplier)
               <img alt="image" src="{{asset('images/supplier')}}/{{$supplier->image}}" class="user-img-radious-style">
               @else
               <img alt="image" src="{{asset('images/supplier/user.png')}}" class="user-img-radious-style">

        @endif
                <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello {{$name=Auth::user()->name}}</div>
              <a href="{{route('supplier.profile')}}" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a>
              <a href="{{route('supplier.editprofile')}}" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
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
            <a href="/"> <img alt="image" src="{{asset('assets/admin2/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name" style="font-size:9px;">UAE Medicine SupplierPanel</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown ">
              <a href="{{route('supplier.dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li><a href="{{route('supplier.products')}}"class="nav-link"><i data-feather="list"></i><span>Manage Products</span></a></li>
            <li><a href="{{route('my.inventory')}}"class="nav-link"><i data-feather="shopping-cart"></i><span>My Inventory</span></a></li>




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
  <!-- General JS Scripts -->
  <script src="{{asset('assets/admin2/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('assets/admin2/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('assets/admin2/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/admin2/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/admin2/js/custom.js')}}"></script>
  <script src="https://cdn.tiny.cloud/1/oedwqmg4x4zmk4bqtjwiqzd2gps4jnbw6gcey3bot5178o5y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  @livewireScripts
  @stack('scripts')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
