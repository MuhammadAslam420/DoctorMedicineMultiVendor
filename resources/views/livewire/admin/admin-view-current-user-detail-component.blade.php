<div class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>All Users Login activity History</h2>
                                </div>
                            </div>
                            <div class="card-body">
                          
                           <div class="row">
                                 @foreach ($number_blocks as $block)
                                 <div class="col-md-4">
                                 <div class="card bg-primary">
                                   <div class="card-header">
                                     <div class="card-title"><i class="fa fa-user f-left fa-solid"></i></div>
                                   </div>
                                   <div class="card-body">
                                  <div class="card-title content-center">
                                  <span class="info-box-text">{{ $block['title'] }}</span>
                                   <span class="info-box-number">{{ $block['number'] }}</span>
                                  </div>
                                   </div>
                                 </div>
                                 </div>
                                 
                                 @endforeach
                            </div>
                          
                           

<div class="row">
          <div class="col-md-12">
            <div class="container">
              <div class="container-fluid">
                <ul class="p-2  text-dark" style="display: inline-block;">
                <li style="display: inline-block;">
                <input type="checkbox" value="USR" wire:model="types"/>
                <span>USR</span>
                </li >
                <li style="display: inline-block;">
                <input type="checkbox" value="ADM" wire:model="types"/>
                <span>ADM</span>
                </li>
                <li style="display: inline-block;">
                <input type="checkbox" value="DOC" wire:model="types"/>
                <span>DOC</span>
                </li>
                <li style="display: inline-block;">
                <input type="checkbox" value="SUP" wire:model="types"/>
                <span>SUP</span>
                </li>
                <li style="display: inline-block;">
                <input type="checkbox" value="PHR" wire:model="types"/>
                <span>PHR</span>
                </li>
                <li style="display: inline-block;">
                <input type="checkbox" value="DELBOY" wire:model="types"/>
                <span>DELBOY</span>

                </li>
                <li style="display: inline-block;">
                <input type="checkbox" value="DELMAN" wire:model="types"/>
                <span>DELMAN</span>
                </li>
                </ul>
                <div class="row flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <div class=" col-md-6 shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                <livewire:livewire-column-chart
                key="{{ $columnChartModel->reactiveKey() }}"
                :column-chart-model="$columnChartModel"
                />
                </div>
                <div class=" col-md-6 shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                <livewire:livewire-pie-chart
                key="{{ $pieChartModel->reactiveKey() }}"
                :pie-chart-model="$pieChartModel"
                />
</div>
</div>
</div>

</div>
</div>
</div>

            
                <div class="col-md-12">
                    <h3>Last Logged Users Detail</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Last login at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($userslogged as $block)
                            <tr>
                                <td>{{ $block->name }}</td>
                                <td>{{ $block->email }}</td>
                                <td>{{ $block->utype}}</td>
                                @if($block->last_login_at)
                                <td>{{ $block->last_login_at->diffForHumans() }}</td>
                                @else
                                <td>No Record Found</td>
                                @endif
                            </tr>
                       
                        @endforeach
                        </tbody>
                    </table>
                    {{$userslogged->links("pagination::bootstrap-4")}}
                </div>
       
        </div>
<div class="card-title">User Not Logged since 30 Days</div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Utype</th>
                                            <th>Last Login</th>
                                            <th>Last logout</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                           
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->utype}}</td>
                                                @if($user->current_login_at)
                                                <td>{{$user->current_login_at->diffForHumans()}}</td>
                                                @else
                                                <td>No History Found</td>
                                                @endif
                                                @if($user->last_login_at)
                                                <td>{{$user->last_login_at->diffForHumans()}}</td>
                                                @else
                                                <td>No History Found</td>
                                                @endif
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
