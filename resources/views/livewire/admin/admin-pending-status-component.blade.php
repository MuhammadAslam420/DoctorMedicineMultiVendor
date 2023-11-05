<div class="main-content">
        <section class="section">
          <div class="container">
           <div class="row">
          
              <div class="card">
                <div class="card-header">
                            <div class="car-title">
                            <h4>Today Orders</h4>
                            
                            </div>
                </div>         
                     <div class="card-body">
                     <table id="example" class="table table-responsive">
                     @if(Session::has('order_msg'))
                          <div class="alert alert-success" role="alert">{{Session::get('order_msg')}}</div>
                          @endif
                          <thead>
                              <tr>
                                  <th>Order ID</th>
                                  <th>Buyer</th>
                                  <th>Total</th>
                                  <th>Email</th>
                                  <th>Mobile</th>
                                  <th>City</th>
                                  <th>Country</th>
                                  <th>Status</th>
                                  <th>Order Date</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($orderspending as $order)
                              <tr>
                                  <td>{{$order->id}}</td>
                                  <td>{{$order->firstname}} {{$order->lastname}}</td>
                                  <td>{{$order->total}}</td>
                                  <td>{{$order->email}}</td>
                                  <td>{{$order->mobile}}</td>
                                  <td>{{$order->city}}</td>
                                  <td>{{$order->country}}</td>
                                  <td>
                                    <div class="dropdown">
                                      <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                      {{$order->status}}
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                      <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'ordered')">Ordered</a></li>
                                      <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'process')">Process</a></li>
                                      <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'dispatch')">Dispatch</a></li>
                                      <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'onaway')">On A Way</a></li>
                                      <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a></li>
                                      <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a></li>

                                      </ul>
                                      </div>
                                  </td>
                                  <td>{{$order->created_at}}</td>
                                  <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class='btn btn-primary'>Detail</a></td>
                              </tr>
                              @endforeach
                          </tbody>
                       
                      </table>
                      {{$orderspending->links("pagination::bootstrap-4")}}
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

     
   
