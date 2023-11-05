<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                   
                    @if($pharmacist->image)
                        <img src="{{asset('images/pharmacist')}}/{{$pharmacist->image}}" width=100% >
                     @else
                        <img src="{{asset('images/pharmacist/user.png')}}" width=100%  >
                     @endif
                        
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#">{{$pharmacist->pharmacy_name}}</a>
                      </div>
                      <div class="author-box-job"></div>
                    </div>
                    <div class="text-center">
                      <div class="author-box-description">
                        <p>
                      {!! $pharmacist->pharmacy_address !!}
                        </p>
                      </div>
                     
                      <div class="w-100 ">
                          <a href="{{route('admin.pharmacistlist')}}" class="btn btn-primary">Go Back To List</a>
                      </div>
                      <div class="w-100 "><h3>Number of Products</h3>
                      <span>
                          
                              @php
                              $products=DB::table('pharmacist_tables')->where('pharmacist_id','=',$pharmacist->id)->count();
                              @endphp
                           <a href="{{route('admin.pharmacistproductlist',['pharmacist_id'=>$pharmacist->id])}}" class="btn btn-info">Available Products {{$products}}</a>
                              
                          
                      </span>
                      </div>
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
                         {{$pharmacist->user->name}}
                        </span>
                      </p>
                    <p class="clearfix">
                        <span class="float-left">
                          Pharmacy Name
                        </span>
                        <span class="float-right text-muted">
                         {{$pharmacist->pharmacy_name}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Pharmacy Registration No
                        </span>
                        <span class="float-right text-muted">
                         {{$pharmacist->registration_no}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                          {{$pharmacist->user->phone}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                         {{$pharmacist->user->email}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Business Address
                        </span>
                        <span class="float-right text-muted">
                         {!! $pharmacist->pharmacy_address !!}
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
                            <p class="text-muted">{{$pharmacist->registration_no}}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Mobile</strong>
                            <br>
                           
                            <p class="text-muted">{{$pharmacist->user->phone}}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted">{{$pharmacist->user->email}}</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Location</strong>
                            <br>
                            <p class="text-muted">{{$pharmacist->city}} {{$pharmacist->province}} {{$pharmacist->country}}</p>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-3 col-6 b-r">
                            <strong>Business Address</strong>
                            <br>
                           
                            <p class="text-muted">{{$pharmacist->pharmacy_address}}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>User Type</strong>
                            <br>
                            <p class="text-muted">{{$pharmacist->user->utype}}</p>
                          </div>
                          
                          <div class="col-md-3 col-6 b-r">
                            <strong>City</strong>
                            <br>
                            <p class="text-muted">{{$pharmacist->city}}</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Location</strong>
                            <br>
                            <p class="text-muted">{{$pharmacist->city}} {{$pharmacist->province}} {{$pharmacist->zipcode}} {{$pharmacist->country}}</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Location/ Map</strong>
                            <br>
                            <p class="text-muted">{!! $pharmacist->map !!}</p>
                          </div>
                        </div>
                       
                     
                    </div>
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