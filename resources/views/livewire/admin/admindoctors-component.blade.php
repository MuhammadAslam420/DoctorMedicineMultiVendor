<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Doctors List</h4>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                  <table >
                        <thead>
                             <tr>
                                 <th class="p-2 text-center">
                                    Doctor ID
                                 </th >
                               
                                 <th class="p-2 text-center">
                                    doctor Image
                                 </th>
                                 <th class="p-2 text-center">
                                    doctor Name
                                 </th>
                                 <th class="p-2 text-center">
                                    Approval
                                 </th>
                                 <th class="p-2 text-center">
                                   Price

                                 </th>
                                 <th class="p-2 text-center">
                                   Discount

                                 </th>
                                 <th class="p-2 text-center">
                                 Education

                                 </th>
                                 <th class="p-2 text-center">
                                 Experience

                                 </th>
                                 <th class="p-2 text-center">
                                  Specialist In

                                 </th>
                                 <th class="p-2 text-center">
                                   Action

                                 </th>
                             </tr>
                         <thead>
                             @foreach($doctors as $doctor)
                             <tr>
                                
                                 <td class="p-2 text-center">{{$doctor->id}}</td>
                                 <td class="p-2 text-center"><img src="{{asset('images/doctors')}}/{{$doctor->profileImage}}" style="width:50px; height:50px;"></td>
                                 <td class="p-2 text-center">{{$doctor->firstname}}</td>
                                 @if($doctor->admin_approval ==1)
                                 <td class="p-2 text-center text-success">Profile Approved</td>
                                 @else
                                 <td class="p-2 text-center text-danger">Approval Required</td>
                                 @endif
                                 <td class="p-2 text-center">{{$doctor->checkup_fees}}</td>
                                 <td class="p-2 text-center">{{$doctor->discount}}</td>
                                 <td class="p-2 text-center">{!! $doctor->degree !!}</td>
                                 <td class="p-2 text-center">{!! $doctor->experience !!}</td>
                                 <td class="p-2 text-center">{!! $doctor->specialist !!}</td>
                                 <td class="p-2 text-center">
                                 <a href="{{route('admin.doctorprofiledetail',['doctor_id'=>$doctor->id])}}" ><i class="fa fa-edit  text-info"></i></a>
                                 <a href="#" onclick="confirm('Are You Sure, You want to delete the doctor!.') || event.stopImmediatePropagation()" wire:click.prevent="deletedoctor({{$doctor->id}})" ><i class= "fa fa-times  text-danger"></i></a></td>
                             </tr>
                             @endforeach
                         
                         {{$doctors->links("pagination::bootstrap-4")}}
                     </table>
                     
                    {{$doctors->links("pagination::bootstrap-4")}}
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
