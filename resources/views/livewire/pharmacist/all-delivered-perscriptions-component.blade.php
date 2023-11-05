<div class="main-content">
        <section class="section">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-header">
                             <div class="card-title">
                                 All Delivered Perscription Details
                             </div>
                         </div>
                         <div class="card-body">
                           <a href="{{route('pharmacist.dashboard')}}" class="btn  btn-primary float-right">Go To Dashboard</a>
                             <table class="table">
                             @if(Session::has('order_msg'))
                    <div class="alert alert-success">{{Session::get('order_msg')}}</div>
                    @endif
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>ID</th>
                                         <th>Perscription</th>
                                         <th>Customer Name</th>
                                         <th>Mobile</th>
                                         <th>Email</th>
                                         <th>Address</th>
                                         <th>City</th>
                                         <th>Province</th>
                                         <th>Country</th>
                                         <th>Status</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                 @php
                                  $i=1;
                                  @endphp
                                     @foreach($perscriptions as $perscription)
                                     <tr>
                                         <td>{{$i++}}</td>
                                             <td>{{$perscription->id}}</td>
                                             @php
                                             $images=explode(',',$perscription->images);
                                             @endphp
                                             <td>
                                             @foreach($images as $image)
                                            @if($image)
                                            <a href="{{asset('images/perscription')}}/{{$image}}"  data-rel="lightcase:myCollection">
                                                <img src="{{asset('images/perscription')}}/{{$image}}" style="width:100px;height60px;" class="p-1"   alt="{{$perscription->firstname}}">
                                            </a>
                                            @endif
                                            @endforeach
                                             </td>
                                             <td>{{$perscription->firstname}} {{$perscription->lastname}}</td>
                                             <td>{{$perscription->mobile}}</td>
                                             <td>{{$perscription->email}}</td>
                                             <td>{{$perscription->line1}} {{$perscription->line2}}</td>
                                                <td>{{$perscription->city}}</td>
                                                <td>{{$perscription->province}}</td>
                                                <td>{{$perscription->country}}</td>
                                                <td class="text-success">{{$perscription->status}}
                                                </td>
                                      </tr>
                                     @endforeach
                                 </tbody>
                                 {{$perscriptions->links("pagination::bootstrap-4")}}
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
