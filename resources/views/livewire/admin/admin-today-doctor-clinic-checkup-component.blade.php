<div class="main-content">
        <section class="section">
          
         
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
                                                <th>Doctor</th>
                                                <th>Email</th>
                                                <th>  Mobile</th>
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
                                                <td>
                                                    @php
                                                    $doctor=DB::table('doctors')->where('id','=',$appointment->doctor_id )->first();
                                                    @endphp
                                                    {{$doctor->firstname}}
                                                </td>
                                                <td>{{$appointment->email}}</td>
                                                <td>{{$appointment->mobile}}</td>
                                                <td>{{$appointment->meeting_status}}</td>
                                                <td>{{$appointment->meeting_type}}</td>
                                                <td>{{$appointment->created_at}}</td>
                                                <td><a href="{{route('admin.appointmentdetail',['appointment_id'=>$appointment->id])}}" class="btn btn-info btn-sm"><i class="fas fa-plus-circle"></i></a></td>
                                            </tr>
                                            @endforeach
                     
                        
                      
                    </table>
                    {{$appointments->links("pagination::bootstrap-4")}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </section> <div class="settingSidebar">
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
