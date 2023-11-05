<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Add Availability Hours</h4>
                  <div class="row">
                   
                     <div class="col-12">
                         <a href="{{route('doctor.dashboard')}}" class="btn btn-success pull-right">Dashboard</a>

                    </div>
                 </div>
                </div>
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card-body p-0">
                  <div class="ml-5 mr-5 justify-content-center">
                    
                  <form  class="form-horizontal justify-content-center" wire:submit.prevent="storeHospital">
                         
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label">Hours</label>
                             <div class="col-md-12">
                             <input type="text" placeholder="19:00-23:00"  class="form-control input-md" wire:model="hours" >
                             @error('hours') <p class="text-danger">{{$message}}</p> @enderror

                             </div>
                         </div>
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label">Days in Week</label>
                             <div class="col-md-12">
                             <input type="text" placeholder="Wednesday-Friday"  class="form-control input-md" wire:model="days">
                             @error('days') <p class="text-danger">{{$message}}</p> @enderror


                             </div>
                         </div>
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label">Hospital</label>
                             <div class="col-md-12">
                               <select class="form-control input-md" wire:model="hospital_id">
                                 <option value="">None</option>
                                 @foreach($hospitals as $hospital)
                                 <option class="text-dark" value="{{$hospital->id}}">{{$hospital->hospital}},{{$hospital->city}}, {{$hospital->country}}</option>
                                 @endforeach
                               </select>
                             @error('hospital') <p class="text-danger">{{$message}}</p> @enderror


                             </div>
                         </div>
                         <div class="form-group">
                             <label for="" class="col-md-4 control-label"></label>
                             <div class="col-md-4">
                             <button type="submit"  class="btn btn-info">Submit</button>

                             </div>
                         </div>

                     </form>
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