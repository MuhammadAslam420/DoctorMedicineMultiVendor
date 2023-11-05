<div class="main-content">
        <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Available register  Supplier List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <table class="table">
                                  @if(Session::has('admin_msg'))
                                  <div class="alert alert-success text-white">{{Session::get('admin_msg')}}</div>
                                  @endif
                                <thead><tr>
                                    <th>Account Id</th>
                                    <th>Profile Image</th>
                                    <th>Supplier Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Account Type</th>
                                    <th>Account Created</th>
                                    <th>Email Verified At</th>
                                    <th>Profile Current Status</th>
                                    <th>Action</th></tr>

                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                    <td>{{$user->id}}</td>
                                    @if($user->supplier->image)
                                    <td><img src="{{asset('images/supplier')}}/{{$user->supplier->image}}" alt="" style="width:75px;height:75px;"></td>
                                    @else
                                    <td><img src="{{asset('images/supplier/user.png')}}" alt="" style="width:75px;height:75px;"></td>
                                    @endif
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->utype}}</td>
                                    <td>{{$user->created_at}}</td>

                                    <td>{{$user->email_verified_at}}</td>
                                    <td>
                                   <div class="dropdown">
                                     <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                       @if($user->supplier->admin_approval === 'yes')
                                       Approved Profile
                                       @else
                                       Approval required
                                       @endif
                                       <span class="caret"></span>
                                     </button>
                                     <ul class="dropdown-menu">
                                     <li class="text-center"><a href="#" wire:click.prevent="updateAdminStatus({{$user->supplier->id}},'yes')">Approved To Show</a></li>
                                     <li class="text-center"><a href="#" wire:click.prevent="updateAdminStatus({{$user->supplier->id}},'no')">Decline Profile</a></li>
                                     </ul>
                                    </div></td>
                                    <td>
                                        <a href="{{route('admin.supplierproductlist',['user_id'=>$user->id])}}" ><i class="fa fa-user-circle"></i><i class="fa fa-list"></i></a>
                                        
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                {{$users->links("pagination::bootstrap-4")}}
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

