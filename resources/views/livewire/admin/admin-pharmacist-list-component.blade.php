<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Pharmacists</h4>
                  <div class="row">
                   
                   <div class="col-12">
                       <a href="{{route('admin.dashboard')}}" class="btn btn-success pull-right">Go Back To Dashboard</a>

                  </div>
               </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                  <table >
                      @if(Session::has('profile_msg'))
                      <div class="alert alert-success">{{Session::get('profile_msg')}}</div>
                      @endif

                        <thead>
                     
                             <tr>
                             <th class="p-1 text-center">
                                    #
                                 </th >
                                 <th class="p-1 text-center">
                                    Pharmacist ID
                                 </th >
                                 <th class="p-1 text-center">
                                     User ID
                                 </th >
                                 <th class="p-1 text-center">
                                 Pharmacist Image
                                 </th >
                                 <th class="p-1 text-center">
                                   Profile Name

                                 </th>
                                 <th class="p-1 text-center">
                                 Pharmacy Name

                                 </th>
                                 <th class="p-1 text-center">
                                 Pharmacy Registration

                                 </th>
                                 <th class="p-1 text-center">
                                 Mobile

                                 </th>
                                 <th class="p-1 text-center">
                                 Email

                                 </th>
                                 <th class="p-1 text-center">
                                 City

                                 </th>

                                 <th class="p-1 text-center">
                                 Status

                                 </th>
                                 <th class="p-1 text-center">
                                   Upload Date

                                 </th>
                                 <th class="p-1 text-center" colspan="2">
                                   Action

                                 </th>
                             </tr>
                         <thead>
                             @php
                              $i=1;
                             @endphp
                             @foreach($users as $user)
                             <tr>
                             <td class="p-1 text-center">{{$i++}}</td>
                                 <td class="p-1 text-center">{{$user->pharmacist->id}}</td>
                                 <td class="p-1 text-center">{{$user->id}}</td>
                                 <td class="p-1 text-center">  
                                 
                                            <a href="{{asset('images/pharmacist')}}/{{$user->pharmacist->image}}"  data-rel="lightcase:myCollection">
                                                <img src="{{asset('images/pharmacist')}}/{{$user->pharmacist->image}}" style="width:100px;height60px;" class="p-1"   alt="{{$user->firstname}}">
                                            </a>
                                           
                                        </td>
                                 <td class="p-1 text-center">{{$user->name}}</td>
                                 <td class="p-1 text-center">{{$user->pharmacist->pharmacy_name}}</td>
                                 <td class="p-1 text-center">{{$user->pharmacist->registration_no}}</td>
                                 <td class="p-1 text-center">{{$user->phone}}</td>
                                 <td class="p-1 text-center">{{$user->email}}</td>
                                 <td class="p-1 text-center">{{$user->pharmacist->city}}</td>
                                 <td class="p-1 text-center">
                                 
                                   <div class="dropdown">
                                     <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                     @if($user->pharmacist->admin_approval =='pending')
                                     Approval Pending
                                     @else
                                     Approved Profile
                                     @endif
                                       <span class="caret"></span>
                                     </button>
                                     <ul class="dropdown-menu">
                                     <li class="text-center"><a href="#" wire:click.prevent="updateProfileStatus({{$user->id}},'approved')">Approved Profile</a></li>
                                     <li class="text-center"><a href="#" wire:click.prevent="updateProfileStatus({{$user->id}},'pending')">Decline Profile</a></li>
                                     </ul>
                                    </div>
                                 </td>
                                 <td class="p-1 text-center">{{$user->created_at}}</td>
                                 <td class="p-1 text-center">
                                 <a href="{{route('admin.pharmacistdetail',['pharmacist_id'=>$user->pharmacist->id])}}" ><i class="fa fa-edit fa-2x text-info"></i></a></td>
                                 
                             </tr>
                             @endforeach
                         
                     </table>
                     
                    {{$users->links("pagination::bootstrap-4")}}
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
