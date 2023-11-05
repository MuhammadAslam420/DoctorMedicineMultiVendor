<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Edit Product</h4>
                  <div class="row">
                   
                   <div class="col-12">
                       <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">All HomePage Slider</a>

                  </div>
               </div>
                </div>
                <div class="panel-body">
                @if(Session::has('message'))
                <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card-body">
                <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateSlide">
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Title</label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control input-md" placeholder="Title" wire:model="title"  />
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Subtitle</label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control input-md" placeholder="Subtitle" wire:model="subtitle"/>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Price</label>
                                   <div class="col-md-12">
                                       <textarea  class="form-control" placeholder="price" wire:model="price"></textarea>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Link</label>
                                   <div class="col-md-12">
                                       <textarea  class="form-control" placeholder="link" wire:model="link"></textarea>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Image</label>
                                   <div class="col-md-12">
                                       <input type="file" class="input-file" wire:model="newimage"/>
                                      @if($newimage)
                                      <img src="{{$newimage->temporaryurl()}}" width="120">
                                      @else
                                      <img src="{{asset('images/slider')}}/{{$image}}" width="120">
                                      @endif
                                      
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Status</label>
                                   <div class="col-md-12">
                                       <select name="" id="" class="form-control" wire:model="status">
                                           <option value="0">Inactive</option>
                                           <option value="1">Active</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group">
                                   
                                   <div class="col-md-12">
                                      <button type="submit" class="btn btn-info pull-right">Update</button>
                                   </div>
                               </div>

                           </form>

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
