<div class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    Inventory Details
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Product SKU</th>
                                            <th>Product Quantity</th>
                                            <th>Product Quanitity Sell</th>
                                            <th>Remainng Quantity</th>
                                            <th>product Price</th>
                                            <th>Product Sale Price</th>
                                            <th>Product Purchase Price</th>
                                            <th>Revenue Earn</th>
                                            <th>Profit Earn</th>
                                            <th>Expiry Date</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                      @php
                                        $i=1;
                                        @endphp
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->SKU}}</td>
                                            <td class="text-info">{{$order->quantity}}</td>
                                            <td class="text-success">
                                                @php
                                                $inventory=DB::table('order_items')->where('product_id',$order->id)->sum('quantity');
                                                @endphp
                                                {{$inventory}}
                                            </td>
                                            <td class="text-warning">{{$order->quantity - $inventory}}</td>
                                            <td class="text-warning">{{$order->regular_price}}</td>
                                            <td class="text-warning">{{$order->sale_price}}</td>
                                            <td class="text-warning">{{$order->purchase_price}}</td>
                                            <td class="text-warning">
                                            @php
                                                $amout=DB::table('order_items')->where('product_id',$order->id)->select(DB::raw('sum((price)*(quantity))as total'))->get()[0]->total;
                                                @endphp
                                                {{$amout}}</td>
                                                <td class="text-warning">
                                                {{$amout- ($order->purchase_price * $inventory)}}</td>
                                            <td class="text-danger">{{$order->expiry_date}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$orders->links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section> <div class="settingSidebar">
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
