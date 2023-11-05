<div class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>All Orders Details</h2>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
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
                                     <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'dispatch')">Dispatch</a></li>
                                     <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'onaway')">On A way</a></li>
                                       <li class="text-center"><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a></li>
                                       
                                     </ul>
                                    </div></td>
                                           
                                            <td>
                                                <a href="{{route('deliveryboy.orderdetail',['order_id'=>$order->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-info btn-info"></i></a>
                                                
                                   
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
