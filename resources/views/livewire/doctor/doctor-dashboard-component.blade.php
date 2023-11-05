<div class="main-content" wire:ignore.self>
  <section class="section">
    @if(Session::has('message'))
    <div class="alert text-success bg-info">{{Session::get('message')}}</div>
    @endif
    <div class="row ">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Total Appointments Booked</h5>
                    <h2 class="mb-3 font-18">{{$totalAppointment}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="d-flex justify-content-center">
                    <i class="fa fa-stethoscope f-right fa-3x p-5"></i>
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
                    <h5 class="font-15">Total Online Appointments Booked</h5>
                    <h2 class="mb-3 font-18">{{$totalOnlineAppointment}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="d-flex justify-content-center">
                    <i class="fa fa-stethoscope f-right fa-3x p-5"></i>
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
                    <h5 class="font-15">Total Checkup Booked</h5>
                    <h2 class="mb-3 font-18">{{$totalPysicalAppointment}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="d-flex justify-content-center">
                    <i class="fa fa-stethoscope f-right fa-3x p-5"></i>
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
                    <h5 class="font-15">Cancel Appointments </h5>
                    <h2 class="mb-3 font-18">{{$totalCancelAppointment}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="d-flex justify-content-center">
                    <i class="fa fa-stethoscope f-right fa-3x p-5"></i>
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
                    <h5 class="font-15">Total Revenue Expected</h5>
                    <h2 class="mb-3 font-18">Rs.{{$totalRevenueAppointment}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="d-flex justify-content-center">
                    <i class="fas fa-money-bill-alt  f-right  p-5" style="font-size:40px;"></i>
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
                    <h5 class="font-15">Total Revenue Expected</h5>
                    <h2 class="mb-3 font-18">Rs.{{$totalRevenueAppointment}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="d-flex justify-content-center">
                    <i class="fas fa-money-bill-alt  f-right  p-5" style="font-size:40px;"></i>
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
                    <h5 class="font-15">Total Checkup Revenue Expected</h5>
                    <h2 class="mb-3 font-18">Rs.{{$totalPysicalRevenueAppointment}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="d-flex justify-content-center">
                    <i class="fas fa-money-bill-alt  f-right  p-5" style="font-size:40px;"></i>
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
                    <h5 class="font-15">Total Online Consultation Revenue Expected</h5>
                    <h2 class="mb-3 font-18">Rs.{{$totalOnlineAppointment}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="d-flex justify-content-center">
                    <i class="fas fa-money-bill-alt  f-right  p-5" style="font-size:40px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-12">
        @php
        $doctor=DB::table('doctors')->where('user_id',Auth::user()->id)->where('package_status','!=','default')->where('expire_date','>=',Carbon\Carbon::today())->first();
        @endphp
        <div class="card ">
          <div class="card-header">
            @if($doctor)
            <h4 class="text-center">Your Subscription Package Expire on <strong class="text-danger">{{$doctor->expire_date}}</strong> </h4>
            @else
            <h4>SubScription Packages</h4>
            @endif
          </div>
          <div class="card-body">

            <div class="row">
              @if($doctor)
              <div class="col-md-4">
                <div class="card bg-success">

                  @php
                  $package=DB::table('subscription_packages')->where('id',$doctor->package_id)->first();
                  @endphp

                  <div class="card-header">
                    <h3 class="heading">{{$package->name}}</h3>
                    <br><br>
                    <div style="font-size:12px;">{{$package->price}} .
                      <span style="font-size:12px;">Rs</span>
                      <span style="font-size:12px;">/{{$package->days}}</span>
                    </div>
                  </div>
                  <ul class="pricing-content">
                    {!! $package->description !!}
                  </ul>
                  <div class="text-center">
                    {{$doctor->expire_date}}
                  </div>
                </div>
              </div>
              @else
              @foreach($packages as $package)
              <div class="col-md-4 col-sm-6">
                <div class="card bg-primary">
                  <div class="card-header">
                    <h3 class="heading">{{$package->name}}</h3>
                    <br><br>
                    <div style="font-size:12px;">{{$package->price}} .
                      <span style="font-size:12px;">Rs</span>
                      <span style="font-size:12px;">/{{$package->days}}</span>
                    </div>
                  </div>
                  <ul class="pricing-content">
                    {!! $package->description !!}
                  </ul>
                  <a href="{{route('doctor.buy_package',['id'=>$package->id])}}" class="btn btn-success">
                    Choose Package
                  </a>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Clinic Appointment</h4>
            <div class="card-header-form">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>

                  <th class="p-1 text-center">
                    Patient Name
                  </th>
                  <th class="p-1 text-center">
                    Disease
                  </th>

                  <th class="p-1 text-center">
                    DOB
                  </th>
                  <th class="p-1 text-center">
                    Gender
                  </th>
                  <th class="p-1 text-center">
                    Topic
                  </th>

                  <th class="p-1 text-center">
                    Meeting status

                  </th>
                  <!-- <th class="p-1 text-center">
                    start Url

                  </th> -->
                  <!-- <th class="p-1 text-center" colspan="2">
                    Action

                  </th> -->
                </tr>
                @foreach($PysicalAppointment as $online)
                <tr>

                  <td class="p-1 text-center text-black">{{$online->appointment->firstname}} {{$online->appointment->lastname}}</td>
                  <td class="p-1 text-center text-black">{{$online->appointment->problem}}</td>
                  <td class="p-1 text-center text-black">{{$online->appointment->dob}}</td>
                  <td class="p-1 text-center text-black">{{$online->appointment->gender}}</td>
                  <td class="p-1 text-center text-black">{{$online->appointment->problem}}</td>
                  <td class="p-1 text-center text-black">{{$online->appointment->meeting_status}}</td>
                  @if($online->appointment->meeting_status ='held')
                  <td class="p-1 text-center text-success">Metting Already Held</td>
                  @elseif($online->appointment->meeting_status ='cancel')
                  <td class="p-1 text-center text-danger">Meeting Cancel By Patient</td>
                  @endif
                  <!-- <td class="p-1 text-center text-black">
                    <a href="{{route('doctor.onlineappointmentdetail',['appointment_id'=>$online->appointment_id])}}">
                      <i class="fa fa-edit fa-2x text-info"></i></a>
                  </td> -->

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
