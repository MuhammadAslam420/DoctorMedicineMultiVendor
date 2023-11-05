<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                   
                        <div class="col-12">
                           <h4>{{Auth::user()->name}} Please Update Your Profile</h4>
                    

                         </div>
                 </div>
                

                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card-body p-0">
                  <div class="ml-5 mr-5 justify-content-center">
                  <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updatesupplier">
                
                                   
                                 
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Full Name</label>
                                   <div class="col-md-12">
                                   <input type="text" class="form-control input-md" placeholder="Name" wire:model="name">                                       @error('firstname')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
     
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Mobile</label>
                                   <div class="col-md-12">
                                   <input type="text" class="form-control input-md" placeholder="mobile" wire:model="mobile">
                                       @error('mobile')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
   
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Company Name</label>
                                   <div class="col-md-12" wire:ignore>
                                   <input type="text" class="form-control input-md" placeholder="Address Line1" wire:model="company_name">                                       @error('about_self')<p class="text-danger">{{$message}}</p>@enderror
                                       
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Registration Number</label>
                                   <div class="col-md-12" wire:ignore>
                                   <input type="text" class="form-control input-md" placeholder="Address Line1" wire:model="registration_no">                                       @error('experience')<p class="text-danger">{{$message}}</p>@enderror
                                       
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Company Address</label>
                                   <div class="col-md-12" wire:ignore>
                                   <input type="text" class="form-control input-md" placeholder="Address Line1" wire:model="company_address">                                       @error('degree')<p class="text-danger">{{$message}}</p>@enderror
                                       
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Email</label>
                                   <div class="col-md-12">
                                       <p class="text-bold">{{$email}}</p>
                                   </div>
                               </div>
                             
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">City</label>
                                   <div class="col-md-12">
                                   <input type="text" class="form-control input-md" placeholder="City" wire:model="city"/>

                                       @error('city')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">State</label>
                                   <div class="col-md-12">
                                   <input type="text" class="form-control input-md" placeholder="State" wire:model="province"/>

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Country</label>
                                   <div class="col-md-12">
                                   <input type="text" class="form-control input-md" placeholder="Country" wire:model="country"/>

                                      @error('country')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
                               <div class="col-md-4">
                                @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width=100% >
                                @elseif($image)
                                <img src="{{asset('images/supplier')}}/{{$image}}" width=100% >
                                @else
                                <img src="{{asset('images/supplier/user.png')}}" width=100%  >
                                @endif
                                     <input type="file" class="form-control" wire:model="newimage"/>
                                   </div>
                               <div class="form-group">
                                   
                                   <div class="col-md-12">
                                      <button type="submit" class="btn btn-info pull-right">Add</button>
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
      @push('scripts')
<script>
    $(function(){
        tinymce.init({
            selector:'#about_self',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                     var sd_data=$('#about_self').val();
                     @this.set('about_self',sd_data);
                });
            }
        });
        tinymce.init({
            selector:'#experience',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                     var d_data=$('#experience').val();
                     @this.set('experience',d_data);
                });
            }
        });
    });
</script>
@endpush