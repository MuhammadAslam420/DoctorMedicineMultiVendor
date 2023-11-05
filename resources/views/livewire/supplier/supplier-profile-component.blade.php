<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                    @if($user->supplier->image)
                        <img src="{{asset('images/supplier')}}/{{$user->supplier->image}}" width=100% >
                     @else
                        <img src="{{asset('images/supplier/user.png')}}" width=100%  >
                     @endif
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#">{{$user->supplier->company_name}}</a>
                      </div>
                      <div class="author-box-job"></div>
                    </div>
                    <div class="text-center">
                      <div class="author-box-description">
                        <p>
                      {!! $user->supplier->company_address !!}
                        </p>
                      </div>
                      <div class="mb-2 mt-3">
                        
                      
                      <div><a href="{{route('supplier.editprofile')}}" class="btn btn-info">Edit Your Profile</a></div>
                      </div>
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>
              
                <div class="card">
                  <div class="card-header">
                    <h4>Personal Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                    <p class="clearfix">
                        <span class="float-left">
                         Owner Name
                        </span>
                        <span class="float-right text-muted">
                         {{$user->name}}
                        </span>
                      </p>
                    <p class="clearfix">
                        <span class="float-left">
                          Business Name
                        </span>
                        <span class="float-right text-muted">
                         {{$user->supplier->company_name}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Business Registration Number
                        </span>
                        <span class="float-right text-muted">
                         {{$user->supplier->registration_no}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                          {{$user->phone}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                         {{$user->email}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Business Address
                        </span>
                        <span class="float-right text-muted">
                         {!! $user->supplier->company_address !!}
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
                          aria-selected="true">Business Info</a>
                      </li>
                      
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                          <div class="col-md-3 col-6 b-r">
                            <strong>Company Registration Number</strong>
                            <br>
                            <p class="text-muted">{{$user->supplier->registration_no}}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Mobile</strong>
                            <br>
                           
                            <p class="text-muted">{{$user->phone}}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted">{{$user->email}}</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Location</strong>
                            <br>
                            <p class="text-muted">{{$user->supplier->city}} {{$user->supplier->province}} {{$user->supplier->country}}</p>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-3 col-6 b-r">
                            <strong>Business Address</strong>
                            <br>
                           
                            <p class="text-muted">{{$user->supplier->company_address}}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>User Type</strong>
                            <br>
                            <p class="text-muted">{{$user->utype}}</p>
                          </div>
                          
                          <div class="col-md-3 col-6 b-r">
                            <strong>City</strong>
                            <br>
                            <p class="text-muted">{{$user->supplier->city}}</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Location</strong>
                            <br>
                            <p class="text-muted">{{$user->supplier->city}} {{$user->supplier->province}} {{$user->supplier->zipcode}} {{$user->supplier->country}}</p>
                          </div>
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