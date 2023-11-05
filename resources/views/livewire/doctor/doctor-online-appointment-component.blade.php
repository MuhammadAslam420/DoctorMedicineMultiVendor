<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Appointment</h4>
                  <div class="row">
                   
                   <div class="col-12">
                       <a href="#" class="btn btn-success pull-right">Add order</a>

                  </div>
               </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                  <table >
                        <thead>
                          @if(Session::has('appointment_msg'))
                          <div class="alert alert-success" role="alert">{{Session::get('appointment_msg')}}</div>
                          @endif
                             <tr>
                                
                                 <th class="p-1 text-center">
                                    Patient Name
                                 </th >
                                 <th class="p-1 text-center">
                                    Disease
                                 </th >
                                
                                 <th class="p-1 text-center">
                                    DOB
                                 </th >
                                 <th class="p-1 text-center">
                                    Gender
                                 </th >
                                 <th class="p-1 text-center">
                                    Zoom Meeting ID
                                 </th>
                                 <th class="p-1 text-center">
                                    Topic
                                 </th>
                                 <th class="p-1 text-center">
                                    Start Time
                                 </th>
                                 <th class="p-1 text-center">
                                   Duration

                                 </th>
                                 <th class="p-1 text-center">
                                   Password

                                 </th>
                                 <th class="p-1 text-center">
                                   Meeting status

                                 </th>
                                 <th class="p-1 text-center">
                                 start Url

                                 </th>
                                 <th class="p-1 text-center" colspan="2">
                                   Action

                                 </th>
                             </tr>
                         <thead>
                             <tbody class="bg-light">
                             @foreach($onlines as $online)
                             <tr>
                                 
                                 <td class="p-1 text-center text-black">{{$online->appointment->firstname}} {{$online->appointment->lastname}}</td>
                                 <td class="p-1 text-center text-black">{{$online->appointment->problem}}</td>
                                 <td class="p-1 text-center text-black">{{$online->appointment->dob}}</td>
                                 <td class="p-1 text-center text-black">{{$online->appointment->gender}}</td>
                                 <td class="p-1 text-center text-black">{{$online->meeting_id}}</td>
                                 <td class="p-1 text-center text-black">{{$online->topic}}</td>
                                 <td class="p-1 text-center text-black">{{$online->start_at}}</td>
                                 <td class="p-1 text-center text-black">{{$online->duration}}</td>
                                 <td class="p-1 text-center text-black">{{$online->password}}</td>
                                 <td class="p-1 text-center text-black">{{$online->appointment->meeting_status}}</td>
                                 @if($online->appointment->meeting_status ='held')
                                 <td class="p-1 text-center text-success">Metting Already Held</td>
                                 @elseif($online->appointment->meeting_status ='cancel')
                                 <td class="p-1 text-center text-danger">Meeting Cancel By Patient</td>
                                 @else
                                 <td class="p-1 text-center text-black"><a href="https://us05web.zoom.us/wc/6931639507/start" class="btn btn-success">start Meeting</a></td>
                                 @endif
                                 <td class="p-1 text-center text-black">
                                 <a href="{{route('doctor.onlineappointmentdetail',['appointment_id'=>$online->appointment_id])}}" >
                                  <i class="fa fa-edit fa-2x text-info"></i></a>
                                </td>
                                 
                             </tr>
                             @endforeach
                         
                         {{$onlines->links("pagination::bootstrap-4")}}
                      </tbody>        
                     </table>
                     
                    {{$onlines->links("pagination::bootstrap-4")}}
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
