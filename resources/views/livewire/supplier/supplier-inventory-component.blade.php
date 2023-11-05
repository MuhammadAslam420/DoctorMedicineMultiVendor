<div class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                  {{Auth::user()->name}}  Inventory Details
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
                                            <th>Expiry Date</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                      @php
                                        $i=1;
                                        @endphp
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->SKU}}</td>
                                            <td class="text-info">{{$product->quantity}}</td>
                                            <td class="text-success">
                                                @php
                                                $inventory=DB::table('order_items')->where('product_id',$product->id)->sum('quantity');
                                                @endphp
                                                {{$inventory}}
                                            </td>
                                            <td class="text-warning">{{$product->quantity - $inventory}}</td>
                                            <td class="text-danger">{{$product->expiry_date}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$products->links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
</div>
