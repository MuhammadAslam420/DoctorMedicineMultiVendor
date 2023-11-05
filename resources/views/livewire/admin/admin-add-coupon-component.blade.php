<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                   
                        <div class="col-12">
                           <h4>Add Coupon</h4>
                     
                   
                     
                         <a href="{{route('admin.coupon')}}" class="btn btn-success pull-right">Admin Coupons</a>

                   </div>
                 </div>
                

                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card-body p-0">
                  <div class="ml-5 mr-5 justify-content-center">
                  <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addcoupon">
                
                                   
                                 
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Coupon Code/Name</label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control input-md" placeholder="coupon Name" wire:model="code"/>
                                       @error('coupon')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
     
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">coupon Type</label>
                                   <div class="col-md-12">
                                       <select class="form-control" wire:model="type">
                                           <option value="fixed">Fixed</option>
                                           <option value="percent">Percent</option>
                                       </select>
                                   </div>
                               </div>
   
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Value</label>
                                   <div class="col-md-12" wire:ignore>
                                       <input  class="form-control" id="value" placeholder="value" wire:model="value">
                                       @error('value')<p class="text-danger">{{$message}}</p>@enderror
                                       
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Cart Value</label>
                                   <div class="col-md-12" wire:ignore>
                                       <input  class="form-control" id="cart_value" placeholder="cart value" wire:model="cart_value">
                                       @error('cart_value')<p class="text-danger">{{$message}}</p>@enderror
                                       
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Expiory Date</label>
                                   <div class="col-md-12" wire:ignore>
                                       <input  class="form-control" id="expiry-date" placeholder="YY-MM-DD" wire:model="expirey_date">
                                       @error('expirey_date')<p class="text-danger">{{$message}}</p>@enderror
                                       
                                   </div>
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
          $('#expiry-date').datetimepicker({
            format :'Y-MM-DD'
          })
          .on('dp.change',function(ev){
            var data=$('#expiry-date').val();
            @this.set('expirey_date',data);
          });
        });
        </script>
        @endpush