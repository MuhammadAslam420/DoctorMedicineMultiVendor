<div class="main-content">
        <section class="section">
          
         
         <div class="container">
         <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Order Items</h4>
                  <div class="row">
                   
                   <div class="col-12">
                       <a href="{{route('admin.orders')}}" class="btn btn-success pull-right">All Orders</a>

                  </div>
               </div>
                 </div>
                 <div class="card-body">
                  <div class="row">
                <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                 
                            <table class="table">
                                <thead>
                                    
                                    <th class="cart-product-image">Order Id</th>
                                    <th class="cart-product-info">Order Status</th>
                                    <th class="cart-product-info">Order Date</th>
                                    @if($order->status =='delivered')
                                    <th class="cart-product-info">Order Delivery Date</th>
                                    @elseif($order->status == 'canceled')
                                    <th class="cart-product-info">Order Canceled Date</th>
                                    @else
                                    <th>Order Status</th>
                                    @endif
                                </thead> 

                                
                                <tbody>
                                    
                                    <tr>
                                    
                                       <td>{{$order->id}}</td>
                                       <td>{{$order->status}}</td>
                                       <td>{{$order->created_at}}</td>
                                       @if($order->status =='delivered')
                                       <td>{{$order->delivered_date}}</td>
                                       @elseif($order->status == 'canceled')
                                       <td>{{$order->canceled_date}}</td>
                                       @else
                                       <td>{{$order->status}}</td>
                                       @endif
                                    </tr>
                                  
                                   
                                </tbody>
                               
                            </table>
                        
                        </div>
                       
                    </div>
                </div>
                </div>
                </div>
                  
                

               
                <div class="row">
                <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                 
                            <table class="table">
                                <thead>
                                    
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Product Name</th>
                                    <th class="cart-product-info">Order Status</th>
                                    <th class="cart-product-info">Delivery Date</th>
                                    <th class="cart-product-info">Supplier ID</th>

                                    <th class="cart-product-price">Price/unit</th>
                                    <th class="cart-product-price">Admin Commission</th>
                                    <th class="cart-product-price">Supplier Earn</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead> 

                                
                                <tbody>
                                    @foreach($order->orderItem as $item)
                                    <tr>
                                       
                                        <td class="cart-product-image">
                                            <a href="{{route('product.details',['slug'=>$item->product->slug])}}"><img src="{{asset('images/product')}}/{{$item->product->image}}" alt="{{$item->product->name}}" style="width:75px; height:45px;"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <p><a href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a></p>
                                        </td>
                                        <td>{{$order->status}}</td>
                                        @if($order->delivered_date)
                                        <td>{{$order->delivered_date}}</td>
                                        @else
                                        <td>Product is Yet Not Delivered</td>
                                        @endif
                                        <td> {{$item->supplier_id}}</td>
                                        @if($item->supplier_id == 1)
                                        <td>Own Product</td>
                                        <td>Own Product</td>
                                        <td>Own Product</td>
                                        @else
                                        <td class="cart-product-price">${{$item->price}}</td>
                                        <td class="cart-product-price"> ${{($item->price * 10/100)* $item->quantity }} </td>
                                        <td class="cart-product-price"><p>${{($item->price - $item->price * 10/100)* $item->quantity }} </td>
                                        @endif
                                        <td class="cart-product-quantity">
                                        <div class="quantity d-flex" style="margin-top:15px;">
                                       <div class="quantity-input d-md-inline">
                                                <p>{{$item->quantity}}</p>
                                       </div>

                                          </div>
							
                                        </td>
                                        <td class="cart-product-subtotal">${{$item->price * $item->quantity}}</td>
                                    </tr>
                                   <!-- @if($item->supplier_id !=1)
                                   <tr>
                                       <th>Assign Product</th>
                                       <td class="cart-product-image">
                                           <select name="supplier_id" id="" wire:model="" class="form-control">
                                             @foreach($suppliers as $supplier)
                                             <option value="{{$supplier->id}}">{{$supplier->company_name}}, {{$supplier->company_address}}, {{$supplier->city}}</option>
                                             @endforeach
                                           </select>
                                       </td>
                                   </tr>
                                   @endif -->
                                  @endforeach
                                   
                                </tbody>
                               
                            </table>
                            <div class="summary">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>${{$order->subtotal}}</td>
                                    </tr>
                                    <tr>
                                    
                                    
                                    <td>Discount</td>
                                    <td>${{$order->discount}}</td>
                                </tr>
                                    <tr>
                                    
                                    
                                        <td>Shipping and Handing</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td>${{$order->tax}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><strong>${{$order->total}}</strong></td>
                                    </tr>
                                   
                                   
                                </tbody>
                            </table>
                            </div>
                        </div>
                       
                    </div>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Order Items Billing Details</h4>
                 
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table">
                          <tr>
                              <th>First Name</th>
                              <td>{{$order->firstname}}</td>
                              <th>Last Name</th>
                              <td>{{$order->lastname}}</td>
                          </tr>
                          <tr>
                              <th>Mobile</th>
                              <td>{{$order->mobile}}</td>
                              <th>Email</th>
                              <td>{{$order->email}}</td>
                          </tr>
                          <tr>
                              <th>Line 1</th>
                              <td>{{$order->line1}}</td>
                              <th>Line2</th>
                              <td>{{$order->line2}}</td>
                          </tr>
                          <tr>
                              <th>City</th>
                              <td>{{$order->city}}</td>
                              <th>Province/State</th>
                              <td>{{$order->province}}</td>
                          </tr>
                          <tr>
                              <th>ZipCode</th>
                              <td>{{$order->zipcode}}</td>
                              <th>Country</th>
                              <td>{{$order->country}}</td>
                          </tr>
                      </table>
                  
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
          @if($order->is_shipping_different)
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Order Items Shipping Details</h4>
                 
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
                          <tr>
                              <th>First Name</th>
                              <td>{{$order->shipping->firstname}}</td>
                              <th>Last Name</th>
                              <td>{{$order->shipping->lastname}}</td>
                          </tr>
                          <tr>
                              <th>Mobile</th>
                              <td>{{$order->shipping->mobile}}</td>
                              <th>Email</th>
                              <td>{{$order->shipping->email}}</td>
                          </tr>
                          <tr>
                              <th>Line 1</th>
                              <td>{{$order->shipping->line1}}</td>
                              <th>Line2</th>
                              <td>{{$order->shipping->line2}}</td>
                          </tr>
                          <tr>
                              <th>City</th>
                              <td>{{$order->shipping->city}}</td>
                              <th>Province/State</th>
                              <td>{{$order->shipping->province}}</td>
                          </tr>
                          <tr>
                              <th>ZipCode</th>
                              <td>{{$order->shipping->zipcode}}</td>
                              <th>Country</th>
                              <td>{{$order->shipping->country}}</td>
                          </tr>
                      </table>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Transactions</h4>
                 
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
                    <tr><th>Transaction Mode</th>
                    <td>{{$order->transaction->mode}}</td>
                    </tr>
                     <tr>
                    <th>Transaction Status</th>
                    <td>{{$order->transaction->status}}</td>
                    </tr>
                    <tr>
                    <th>Transaction Date</th>
                    <td>{{$order->transaction->created_at}}</td>
                    </tr>
                  </table>
                     
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
