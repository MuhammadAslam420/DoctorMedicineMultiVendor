<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Coupons</h4>
                  <div class="row">
                   
                   <div class="col-12">
                       <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right">Add Coupon</a>

                  </div>
               </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                  <table >
                        <thead>
                             <tr>
                                 <th class="p-2 text-center">
                                     Id
                                 </th >
                                 <th class="p-2 text-center">
                                     Coupon Code
                                 </th >
                                 <th class="p-2 text-center">
                                    Type
                                 </th>
                                 <th class="p-2 text-center">
                                   Value
                                 </th>
                                 <th class="p-2 text-center">
                                    Cart Value
                                 </th>
                                 <th class="p-2 text-center">
                                    Expiry Date
                                 </th>
                                 <th class="p-2 text-center">
                                    Created At
                                 </th>
                                 <th class="p-2 text-center">
                                   Updated At

                                 </th>
                               
                                 <th class="p-2 text-center">
                                   Action

                                 </th>
                             </tr>
                         <thead>
                             @foreach($coupons as $coupon)
                             <tr>
                                 <td class="p-2 text-center">{{$coupon->id}}</td>
                                 <td class="p-2 text-center">{{$coupon->code}}</td>
                                 <td class="p-2 text-center">{{$coupon->type}}</td>
                                 @if($coupon->type=="fixed")
                                 <td class="p-2 text-center">$ {{$coupon->value}}</td>
                                 @else
                                 <td class="p-2 text-center">{{$coupon->value}} %</td>
                                 @endif
                                 <td class="p-2 text-center">{{$coupon->cart_value}}</td>
                                 <td class="p-2 text-center">{{$coupon->expirey_date}}</td>
                                 <td class="p-2 text-center">{{$coupon->created_at}}</td>
                                 <td class="p-2 text-center">{{$coupon->updated_at}}</td>
                                 <td class="p-2 text-center">
                                 <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}" ><i class="fa fa-edit fa-2x text-info"></i></a>
                                 <a href="#" onclick="confirm('Are You Sure, You want to delete the coupon!.') || event.stopImmediatePropagation()" wire:click.prevent="deletecoupon({{$coupon->id}})" ><i class= "fa fa-times fa-2x text-danger"></i></a></td>
                             </tr>
                             @endforeach
                         
                         {{$coupons->links("pagination::bootstrap-4")}}
                     </table>
                     
                    {{$coupons->links("pagination::bootstrap-4")}}
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
  
