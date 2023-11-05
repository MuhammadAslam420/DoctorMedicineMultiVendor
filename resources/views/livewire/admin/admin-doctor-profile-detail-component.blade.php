<div class="main-content">
<style type="text/css">
        /*Setting Basic Dimensions to give
        gallery view */
        .container{
            margin: 0 auto;
            width: 90%;
        }
        .main_view{
            width: 80%;
            height: 25rem;
        }
        .main_view img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .side_view{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .side_view img{
            width: 9rem;
            height: 7rem;
            object-fit: cover;
            cursor: pointer;
            margin:0.5rem;
        }
    </style>
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      @if($doctor->profileImage)
                      <img alt="image" id="main" src="{{asset('images/doctors')}}/{{$doctor->profileImage}}" class="rounded-circle author-box-picture">
                      @else
                      <img alt="image" id="main" src="{{asset('images/doctors/user.png')}}" class="rounded-circle author-box-picture">
                       @endif
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        @if($doctor->firstname)
                        <a href="{{route('doctor.detail',['slug'=>$doctor->slug])}}">{{$doctor->firstname}}</a>
                        @else
                        <a href="#">{{$doctor->firstname}}</a>
                        @endif
                      </div>
                      <div class="author-box-job">{!! $doctor->specialist !!}</div>
                    </div>
                    <div class="text-center">
                      <div class="author-box-description">
                        <p>
                        Hospital : {!! $doctor->clinic_address !!}
                        </p>
                      </div>
                      <div class="mb-2 mt-3">
                        
                      
                      <div>
                          @if(Session::has('doctor_msg'))
                          <div class="alert alert-success">{{Session::get('doctor_msg')}}
                            </div>
                            @endif
                                   <div class="dropdown">
                                     <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                       Change Profile Status
                                       <span class="caret"></span>
                                     </button>
                                     <ul class="dropdown-menu">
                                       <li class="text-center"><a href="#" wire:click.prevent="updateDoctorStatus({{$doctor->id}},1)">Approved</a></li>
                                     </ul>
                                    </div></div>
                      </div>
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>
              
                <div class="card">
                  <div class="card-header">
                    <h4>Account Detail Details</h4>
                    @php
                    $account=DB::table('users')->where('id','=',$doctor->user_id)->first();
                    @endphp
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                    <p class="clearfix">
                        <span class="float-left">
                          Name
                        </span>
                        <span class="float-right text-muted">
                          {{$account->name}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                          {{$account->phone}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                         {{$account->email}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                         Account Type
                        </span>
                        <span class="float-right text-muted">
                         {{$account->utype}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          License No
                        </span>
                        <span class="float-right text-muted">
                         {{$doctor->license_no}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          CheckUp Fees
                        </span>
                        <span class="float-right text-muted">
                         {{$doctor->checkup_fees}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          City
                        </span>
                        <span class="float-right text-muted">
                         {{$doctor->city}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Province
                        </span>
                        <span class="float-right text-muted">
                         {{$doctor->state}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Country
                        </span>
                        <span class="float-right text-muted">
                         {{$doctor->country}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Degree
                        </span>
                        <span class="float-right text-muted">
                        @php
                                        $images=explode(',',$doctor->degree_certificate);
                                        @endphp
                                        @foreach($images as $image)
                                       @if($image)
                                       <div class="single-small-img">
                                            <img src="{{asset('images/doctors')}}/{{$image}}" alt="Image" style="height:45px; width:75px;" onclick="change(this.src)">
                                        </div>
                                       @endif
                                        @endforeach
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                         other Certificates
                        </span>
                        <span class="float-right text-muted">
                        @php
                                        $images1=explode(',',$doctor->other_sertificate);
                                        @endphp
                                        @foreach($images1 as $image1)
                                       @if($image1)
                                       <div class="single-small-img">
                                            <img src="{{asset('images/doctors')}}/{{$image1}}" alt="Image" style="height:45px; width:75px;" onclick="change(this.src)">
                                        </div>
                                       @endif
                                        @endforeach
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">About</a>
                      </li>
                      
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                          <div class="col-md-3 col-6 b-r">
                            <strong>Full Name</strong>
                            <br>
                            <p class="text-muted">{{$account->name}}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Mobile</strong>
                            <br>
                           
                            <p class="text-muted">{{$account->phone}}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted">{{$account->email}}</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Location</strong>
                            <br>
                            <p class="text-muted">{{$doctor->city}} {{$doctor->state}} {{$doctor->country}}</p>
                          </div>
                        </div>
                        <p class="m-t-30">{!! $doctor->about_self !!}</p>
                        <div class="section-title">Eduction</div>
                       <p>{!! $doctor->degree !!}</p>
                      </div>
                        <div class="section-title">Experience</div>
                       <p>{!! $doctor->experience !!}</p>
                      </div>
                     
                    </div>
                  </div>
                </div>
                </div>
            </div>
          </div>     
      <!--    <div class="alert alert-success"><h3><a href="{{route('doctor.updateprofile')}}">Please Update Your Profile First</a></h3></div>-->
           
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
 <script type="text/javascript">
        const change = src => {
            document.getElementById('main').src = src
        }
    </script>
 @endpush