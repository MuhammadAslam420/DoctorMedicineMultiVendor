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
                       <a href="{{route('deliverymanager.dashboard')}}" class="btn btn-success pull-right">All Orders</a>

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
                                        <td>{{$order->delivered_date}}</td>
                                        <td> {{$item->product->user_id}}</td>
                                        <td class="cart-product-price">${{$item->price}}</td>
                                        <td class="cart-product-price"> ${{($item->price * 10/100)* $item->quantity }} </td>
                                        <td class="cart-product-price"><p>${{($item->price - $item->price * 10/100)* $item->quantity }} </td>
                                       
                                        <td class="cart-product-quantity">
                                        <div class="quantity d-flex" style="margin-top:15px;">
                                       <div class="quantity-input d-md-inline">
                                                <p>{{$item->quantity}}</p>
                                       </div>

                                          </div>
							
                                        </td>
                                        <td class="cart-product-subtotal">${{$item->price * $item->quantity}}</td>
                                    </tr>
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
        
      </div>
