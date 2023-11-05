<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
            
   <div class="container" style="padding:30px 0;">
   <div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="card-header">
                   Settings

               </div>
               <div class="card-body">
                   @if(Session::has('setting_msg'))
                   <div class="alert alert-success" role="alert">{{Session::get('setting_msg')}}</div>
                   @endif
                   <form class="form form-horizontal" wire:submit.prevent="saveSetting">
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Email</label>
                           <div class="col-md-12">
                               <input type="email" placeholder="email" class="form-control input-md" wire:model="email"/>
                               @error('email') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Phone</label>
                           <div class="col-md-12">
                               <input type="text" placeholder="phone" class="form-control input-md" wire:model="phone"/>
                               @error('phone') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Phone2</label>
                           <div class="col-md-12">
                               <input type="text" placeholder="Phone2" class="form-control input-md" wire:model="phone2"/>
                               @error('phone2') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Address</label>
                           <div class="col-md-12">
                               <input type="text" placeholder="address" class="form-control input-md" wire:model="address"/>
                               @error('address') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Map</label>
                           <div class="col-md-12">
                               <input type="text" placeholder="address" class="form-control input-md" wire:model="map"/>
                               @error('map') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">facebook</label>
                           <div class="col-md-12">
                               <input type="text" placeholder="Facebook" class="form-control input-md" wire:model="facebook"/>
                               @error('facebook') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Twitter</label>
                           <div class="col-md-12">
                               <input type="text" placeholder="twitter" class="form-control input-md" wire:model="twitter"/>
                               @error('twitter') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Pinterest</label>
                           <div class="col-md-12">
                               <input type="text" placeholder="pinterest" class="form-control input-md" wire:model="pinterest"/>
                               @error('pinterest') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control">Instagram</label>
                           <div class="col-md-12">
                               <input type="text" placeholder="instagram" class="form-control input-md" wire:model="instagram"/>
                               @error('instagram') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                           </div>
                           <div class="form-group">
                           <label for="" class="col-md-4 label-control">Youtube</label>
                           <div class="col-md-12">
                               <input type="text" placeholder="address" class="form-control input-md" wire:model="youtube"/>
                               @error('youtube') <div class="alert alert-danger" >{{$message}}</div> @enderror
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="" class="col-md-4 label-control"></label>
                           <div class="col-md-12">
                               <button type="submit"  class="btn btn-info" >Save</button>
                           </div>
                       </div>
                       
                   </form>

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