<div id="main">


<div class="container " style="padding:30px 0;">

<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h1>All Orders details</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Order_Id</th>
                                        <th>Subtotal</th>
                                        <th>Discount</th>
                                        <th>Tax</th>
                                        <th>Total</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>  Mobile</th>
                                        <th>ZipCode</th>
                                        <th>Status</th>
                                        <th> Order Date</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>Rs.{{$order->subtotal}}</td>
                                        <td>Rs.{{$order->discount}}</td>
                                        <td>Rs.{{$order->tax}}</td>
                                        <td>Rs.{{$order->total}}</td>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->lastname}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->zipcode}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td><a href="{{route('user.orderdetails',['order_id'=>$order->id])}}" class="btn btn-danger btn-sm"><i class="fa fa-info"></i>Details</a>
                                       </td>

                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            {{ $orders->links("pagination::bootstrap-4")}}

                        </div>
                        </div>
                        </div>
                        </div>

</div>

</div>
