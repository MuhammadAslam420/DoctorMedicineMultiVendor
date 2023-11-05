<div class="main-content">
        <section class="section">
        <h5>Product Order Statistics</h5>
          <div class="row ">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-header bg-primary">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Pharmacy Orders Revenue</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-center">
                    <div class="row ">
                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content text-center">


                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">Rs.{{$phramacytotalAmount}}</p>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-header bg-primary">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Pharmacy Orders</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-center">
                    <div class="row ">
                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content text-center">


                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$phramacyorders}}</p>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>
            </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="{{route('admin.deliveredorders')}}" style="text-decoration:none;">
              <div class="card">
                <div class="card-header bg-primary">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Completed Orders Revenue</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-center">
                    <div class="row ">
                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content text-center">


                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">Rs.{{$totalRevenue}}</p>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>
            </div>
            </a>
            </div>

            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <a href="{{route('admin.onlinepayment')}}" style="text-decoration:none;">
              <div class="card">
                <div class="card-header bg-primary">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Payment Received Online</p>

                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content text-center">

                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">Rs.{{$ptotalTransaction}} </p>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
             </a>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <a href="{{route('admin.pendingorders')}}" style="text-decoration:none;">
             <div class="card">
                <div class="card-header bg-primary">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Revenue Of CashOnDelivery</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">

                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">Rs.{{$ptotalCashondelivery}}</p>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <a href="{{route('admin.orders')}}" style="text-decoration:none;">
               <div class="card">
                <div class="card-header bg-primary">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Orders Recieved</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">

                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$totalorders}}</p>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="{{route('admin.todayorders')}}" style="text-decoration:none;">
              <div class="card">
                <div class="card-header  bg-primary">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Today Total Revenue</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="ro ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">Rs.{{$todayRevenue}}</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="{{route('admin.todayorders')}}" style="text-decoration:none;">
              <div class="card">
                <div class="card-header  bg-primary">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Today Number's Orders</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="ro ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$todaySale}}</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
<!-- row1-->
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">

              <a href="{{route('admin.pendingorders')}}" style="text-decoration:none;">
                 <div class="card">
                <div class="card-header" style="background:#32aeb1;">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Payment Pending Orders</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="ro ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$pendingorders}}</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </a>

            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">

              <a href="{{route('admin.orderspending')}}" style="text-decoration:none;">
                 <div class="card">
                <div class="card-header" style="background:#32aeb1;">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Pending Orders</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$tpendingorders}}</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            </div>

            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <a href="{{route('admin.deliveredorders')}}" style="text-decoration:none;">
             <div class="card">
             <div class="card-header" style="background:#32aeb1;">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">All Delivered Orders</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                         <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$cancelorders}}</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </a>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">

               <div class="card">
              <div class="card-header" style="background:#32aeb1;">
                <div class="card-title">
                <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Orders In The Process</p>
                </div>
              </div>
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="ro ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                       <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$process}}</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">

               <div class="card">
              <div class="card-header" style="background:#32aeb1;">
                <div class="card-title">
                <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Orders Dispatch From Shop</p>
                </div>
              </div>
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                       <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$dispatch}}</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
           <div class="card">
           <div class="card-header" style="background:#32aeb1;">
                <div class="card-title">
                <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Orders On The Way</p>
                </div>
              </div>
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                       <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$onaway}}</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
          <h5>Doctor Appointment Statistics</h5>
          <div class="row ">

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="{{route('admin.alldoctorappointments')}}" style="text-decoration:none;">
                <div class="card">
                <div class="card-header" style="background:#ef4281;">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Doctors Appointments Revenue</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                         <p style="font-weight:700;font-size:15px;font-family:Rubik;color:black;">Rs.{{$totalAppointmentRevenue}}</p>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/revenue.png')}}" style="height:75px;" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <a href="{{route('admin.onlinemeetings')}}" style="text-decoration:none;">
               <div class="card" >
                <div class="card-header" style="background:#ef4281;">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Online Meeting Payment Recieved</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                         <p style="font-weight:700;font-size:15px;font-family:Rubik;color:black;">Rs.{{$totalTransaction}}</p>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/revenue.png')}}" style="height:75px;" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="{{route('admin.todayappointment')}}" style="text-decoration:none;">
              <div class="card">
                <div class="card-header" style="background:#ef4281;">
                    <div class="card-title">
                    <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Today Doctor Appointment Revenue</p>
                    </div>
                  </div>
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                          <p style="font-weight:700;font-size:15px;font-family:Rubik;color:black;">Rs.{{$todayAppointmentRevenue}}</p>

                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="{{asset('assets/admin2/img/banner/revenue.png')}}" style="height:75px;" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </a>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="{{route('admin.cliniccheckup')}}" style="text-decoration:none;"><div class="card">
                <div class="card-header" style="background:#ef4281;">
                  <div class="card-title">
                  <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Cash Doctors Earn At Clinic Checkup</p>
                  </div>
                </div>
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                         <p style="font-weight:700;font-size:15px;font-family:Rubik;color:black;">{{$totalCheckup}}</p>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/revenue.png')}}" style="height:75px;" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div></a>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="{{route('admin.alldoctorappointments')}}" style="text-decoration:none;">
             <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">Doctor Appointment Booked</h5>

                         <h3 class="mb-3 font-18">{{$totalAppointmentBooking}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/doctorappointment.png')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="{{route('admin.onlinemeetings')}}" style="text-decoration:none;"><div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">Online Appointment Booking</h5>

                         <h3 class="mb-3 font-18">{{$onlineAppointmentBooking}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/doctorappointment.png')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="{{route('admin.cliniccheckup')}}" style="text-decoration:none;"><div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">Clinic Checkup Booking</h5>

                         <h3 class="mb-3 font-18">{{$clinicAppointmentBooking}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/doctorappointment.png')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="{{route('admin.todayappointment')}}" style="text-decoration:none;"><div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">Today Doctor Booking</h5>

                         <h3 class="mb-3 font-18">{{$todayAppointmentBooking}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/today.jfif')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div></a>
            </div>
          </div>
          <h5>All User's Statistics</h5>
          <div class="row ">

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content"><a href="{{route('admin.useractivity')}}">
                        <h5 class="font-15">No' User Register</h5>
                        @php
                        $reg=DB::table('users')->count();
                        @endphp
                         <h3 class="mb-3 font-18">{{$reg}}</h3>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/download.png')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">No' Pharmacist Register</h5>
                        @php
                        $pharmacy=DB::table('pharmacists')->count();
                        @endphp
                         <h3 class="mb-3 font-18">{{$pharmacy}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/download1.jfif')}}" alt="" style="width:100px; height:100px;">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">No's Doctor register</h5>
                        @php
                        $doc=DB::table('doctors')->count();
                        @endphp
                         <h3 class="mb-3 font-18">{{$doc}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/doctor.jpg')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">No's Supplier Register</h5>
                        @php
                        $sup=DB::table('suppliers')->count();
                        @endphp
                         <h3 class="mb-3 font-18">{{$sup}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/supplier.jfif')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">No's DeliveryBoy Register</h5>
                        @php
                        $delb=DB::table('users')->where('utype','=','DELBOY')->count();
                        @endphp
                         <h3 class="mb-3 font-18">{{$delb}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/deliveryboy.png')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">No's Delivery Manager Register</h5>
                        @php
                        $delm=DB::table('users')->where('utype','=','DELMAN')->count();
                        @endphp
                         <h3 class="mb-3 font-18">{{$delm}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/deliverymanager.png')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                        <h5 class="font-15">No's admin Register</h5>
                        @php
                        $adm=DB::table('users')->where('utype','=','ADM')->count();
                        @endphp
                         <h3 class="mb-3 font-18">{{$adm}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/banner/admin.jpg')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">

                        <h5 class="font-15">No's Buyer/Customer Register</h5>
                        @php
                        $usr=DB::table('users')->where('utype','=','USR')->count();
                        @endphp
                         <h3 class="mb-3 font-18">{{$usr}}</h3>

                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{asset('assets/admin2/img/user.png')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All appointments Table</h4>
                  <div class="card-header-form">

                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Date">

                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped" id="myTable">
                      <tr>

                        <th>Order_Id</th>
                                                <th>Subtotal</th>
                                                <th>Discount</th>
                                                <th>Tax</th>
                                                <th>Total</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>  Mobile</th>
                                                <th>ZipCode</th>
                                                <th>Status</th>
                                                <th> Order Date</th>
                                                <th> Action</th>
                      </tr>

                      @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>Rs.{{$order->subtotal}}</td>
                                                <td>Rs.{{$order->discount}}</td>
                                                <td>Rs.{{$order->tax}}</td>
                                                <td>Rs.{{$order->total}}</td>
                                                <td>{{$order->firstname}}</td>
                                                <td>{{$order->lastname}}</td>
                                                <td>{{$order->email}}</td>
                                                <td>{{$order->mobile}}</td>
                                                <td>{{$order->zipcode}}</td>
                                                <td>{{$order->status}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i></a></td>
                                            </tr>
                                            @endforeach



                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Appointment Table</h4>
                  <div class="card-header-form">

                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Date">

                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped" id="myTable">
                      <tr>

                        <th>Appontment ID</th>


                                                <th>Tax</th>
                                                <th>Total</th>
                                                <th>Patient Name</th>
                                                <th>Email</th>
                                                <th>  Mobile</th>
                                                <th>ZipCode</th>
                                                <th>Status</th>
                                                <th>Appointment Type</th>
                                                <th> Order Date</th>
                                                <th> Action</th>
                      </tr>

                      @foreach($appointments as $appointment)
                                            <tr>
                                                <td>{{$appointment->id}}</td>

                                                <td>Rs.{{$appointment->tax}}</td>
                                                <td>Rs.{{$appointment->subtotal}}</td>
                                                <td>{{$appointment->firstname}} {{$appointment->lastname}}</td>
                                                <td></td>
                                                <td>{{$appointment->email}}</td>
                                                <td>{{$appointment->mobile}}</td>
                                                <td>{{$appointment->meeting_status}}</td>
                                                <td>{{$appointment->meeting_type}}</td>
                                                <td>{{$appointment->created_at}}</td>
                                                <td><a href="#" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i></a></td>
                                            </tr>
                                            @endforeach



                    </table>
                  </div>
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
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
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
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
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
      @push('scripts')
<script>
  function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[11];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
@endpush
