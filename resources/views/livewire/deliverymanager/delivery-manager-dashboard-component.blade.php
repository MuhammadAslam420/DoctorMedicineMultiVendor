<div class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                   <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="{{route('deliverymanager.allorders')}}" style="text-decoration:none;">
                    <div class="card">
                        <div class="card-header bg-info">
                        <div class="card-title">
                        <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total Number's of Order's</p>
                        </div>
                        </div>
                        <div class="card-statistic-4">
                        <div class="align-items-center justify-content-center">
                            <div class="row ">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content text-center">
                                
                                
                                <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$allorders}}</p>
                                
                                </div>
                            </div>
                        
                            </div>
                        </div>
                        </div>
                    </div>
                    </a>
                   </div>
                   <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="{{route('deliverymanager.alldeliveredorders')}}" style="text-decoration:none;">
                    <div class="card">
                        <div class="card-header bg-info">
                        <div class="card-title">
                        <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Total  Delivered Order's</p>
                        </div>
                        </div>
                        <div class="card-statistic-4">
                        <div class="align-items-center justify-content-center">
                            <div class="row ">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content text-center">
                                
                                
                                <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$deliveredOrders}}</p>
                                
                                </div>
                            </div>
                        
                            </div>
                        </div>
                        </div>
                    </div>
                    </a>
                   </div>
                   <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="{{route('deliverymanager.allpendingorders')}}" style="text-decoration:none;">
                    <div class="card">
                        <div class="card-header bg-info">
                        <div class="card-title">
                        <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Number Of Pending Order's</p>
                        </div>
                        </div>
                        <div class="card-statistic-4">
                        <div class="align-items-center justify-content-center">
                            <div class="row ">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content text-center">
                                
                                
                                <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$pendingOrders}}</p>
                                
                                </div>
                            </div>
                        
                            </div>
                        </div>
                        </div>
                    </div>
                    </a>
                   </div>
                   <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="{{route('deliverymanager.allprocessorders')}}" style="text-decoration:none;">
                    <div class="card">
                        <div class="card-header bg-info">
                        <div class="card-title">
                        <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">In Process Order's</p>
                        </div>
                        </div>
                        <div class="card-statistic-4">
                        <div class="align-items-center justify-content-center">
                            <div class="row ">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content text-center">
                                
                                
                                <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$processOrders}}</p>
                                
                                </div>
                            </div>
                        
                            </div>
                        </div>
                        </div>
                    </div>
                    </a>
                   </div>
                   <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="{{route('deliverymanager.alldispatchorders')}}" style="text-decoration:none;">
                    <div class="card">
                        <div class="card-header bg-info">
                        <div class="card-title">
                        <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Number Of Dispcth Order's</p>
                        </div>
                        </div>
                        <div class="card-statistic-4">
                        <div class="align-items-center justify-content-center">
                            <div class="row ">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content text-center">
                                
                                
                                <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$dispatchOrders}}</p>
                                
                                </div>
                            </div>
                        
                            </div>
                        </div>
                        </div>
                    </div>
                    </a>
                   </div>
                   <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="{{route('admin.deliveredorders')}}" style="text-decoration:none;">
                    <div class="card">
                        <div class="card-header bg-info">
                        <div class="card-title">
                        <p style="font-weight:500;font-size:15px;font-family:Rubik;color:white;">Number Of Cancel Order's</p>
                        </div>
                        </div>
                        <div class="card-statistic-4">
                        <div class="align-items-center justify-content-center">
                            <div class="row ">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content text-center">
                                
                                
                                <p style="font-weight:700;font-size:16px;font-family:Rubik;">{{$cancelOrders}}</p>
                                
                                </div>
                            </div>
                        
                            </div>
                        </div>
                        </div>
                    </div>
                    </a>
                   </div>
                 


         
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>All Orders Details</h2>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive">
                                    @if(Session::has('order_msg'))
                                    <div class="alert alert-success">{{Session::get('order_msg')}}</div>
                                    @endif
                                    @if(Session::has('order_masg'))
                                    <div class="alert alert-success">{{Session::get('order_masg')}}</div>
                                    @endif
                                    <thead>
                                        <tr>
                                            <th>
                                                Order Id
                                            </th>
                                            <th>
                                                Buyer Id
                                            </th>
                                            <th>
                                               Buyer Name
                                            </th>
                                            
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Subtotal
                                            </th>
                                            <th>
                                               Discount
                                            </th>
                                            <th>
                                               Tax
                                            </th>
                                            <th>
                                               Total
                                            </th>
                                            <th>
                                               Status
                                            </th>
                                            <th>Available Delivery</th>
                                            <th colspan="2">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->user_id}}</td>
                                            <td>{{$order->firstname}} {{$order->lastname}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->subtotal}}</td>
                                            <td>{{$order->discount}}</td>
                                            <td>{{$order->tax}}</td>
                                            <td>{{$order->total}}</td>
                                            
                                            <td><div class="dropdown">
                                     <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                     {{$order->status}}
                                       <span class="caret"></span>
                                     </button>
                                     <ul class="dropdown-menu">
                                     <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'process')">Process</a></li>
                                       <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a></li>
                                       <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a></li>
                                     </ul>
                                    </div></td>
                                            <td><div class="dropdown">
                                     <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                       Available DeliveryBoy
                                       <span class="caret"></span>
                                     </button>
                                     <ul class="dropdown-menu">
                                         @foreach($users as $user)
                                     <li class="text-center"><a href="#" wire:click.prevent="update({{$order->id}},{{$user->id}})">{{$user->id}}-{{$user->name}}</a></li>
                                     @endforeach
                                     </ul>
                                    </div></td>
                                            <td>
                                                <a href="{{route('deliverymanager.orderdetail',['order_id'=>$order->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                                
                                   
                                            </td>

                                        </tr>
                                        @endforeach
                                        
                     </tbody>
                     
                    
                                </table>
                                {{$orders->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                    </div>
                </div>
               </div>
        </section>
</div>
