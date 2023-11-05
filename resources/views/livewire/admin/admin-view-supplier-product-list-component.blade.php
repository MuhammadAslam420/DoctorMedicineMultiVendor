<div class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                              <div class="card-title">
                                  <h2>{{$user->name}} Product List</h2>
                                  <a href="{{route('admin.supplierlist')}}" class="btn btn-primary">Go Back</a>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-4">
                                   <div class="card bg-primary">
                                       <div class="card-body p-2 m-0">
                                       @if($user->supplier->image)
                                      <img src="{{asset('images/supplier')}}/{{$user->supplier->image}}" alt="{{$user->supplier->company_name}}" style="width:175px;height:65px;">
                                      @else
                                      <img src="{{asset('images/supplier/user.png')}}" alt="{{$user->supplier->company_name}}" style="width:120px;height:90px;">
                                      @endif
                                       </div>
                                   </div>
                                      
                                  </div>
                                  <div class="col-md-4">
                                      <div class="card bg-primary">
                                          <div class="card-body p-2 m-0 text-center">
                                             <p>BusinessName</p>
                                              {{$user->supplier->company_name}}

                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="card bg-primary">
                                          <div class="card-body p-2 m-0 text-center">
                                             <p>Company Address</p>
                                              {{$user->supplier->company_address}}

                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-md-2">
                                      <div class="card bg-primary">
                                          <div class="card-body p-2 m-0 text-center">
                                             <p>registration No</p>
                                              {{$user->supplier->registration_no}}

                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                      <div class="card bg-primary">
                                          <div class="card-body p-2 m-0 text-center">
                                             <p>City</p>
                                              {{$user->supplier->city}}

                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                      <div class="card bg-primary">
                                          <div class="card-body p-2 m-0 text-center">
                                             <p>Province</p>
                                              {{$user->supplier->province}}

                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                      <div class="card bg-primary">
                                          <div class="card-body p-2 m-0 text-center">
                                             <p>Country</p>
                                              {{$user->supplier->country}}

                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                      <div class="card bg-primary">
                                          <div class="card-body p-2 m-0 text-center">
                                             <p>Email</p>
                                              {{$user->email}}

                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                      <div class="card bg-primary">
                                          <div class="card-body p-2 m-0 text-center">
                                             <p>Mobile</p>
                                              {{$user->phone}}

                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                               
                                      <div class="col-md-3 ">
                                          <div class="card bg-info">
                                              <div class="card-header">
                                                  <div class="card-title">
                                                      Total No's Order
                                                      
                                                  </div>
                                              </div>
                                              <div class="card-body">
                                              <p>{{$orderitems}}</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="card bg-info">
                                              <div class="card-header">
                                                  <div class="card-title">
                                                      Total No's Sale
                                                  </div>
                                              </div>
                                              <div class="card-body">
                                              <p>{{$orderitemtotals}}</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="card bg-info">
                                              <div class="card-header">
                                                  <div class="card-title">
                                                      Total Admin Commission
                                                  </div>
                                              </div>
                                              <div class="card-body">
                                              <p>{{$orderitemtotals *(10/100)}}</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="card bg-info">
                                              <div class="card-header">
                                                  <div class="card-title">
                                                    No's Product Quantity Sale
                                                  </div>
                                              </div>
                                              <div class="card-body">
                                            <p>{{$orderitemcount}}</p>
                                              </div>
                                          </div>
                                      </div>
                                    
                                 
                              </div>
                              <table class="table">
                                 <thead class="bg-danger">
                                      <tr >
                                          <th class="text-white">No's Of Products Register</th>
                                          <td><h5 class="text-white">{{$totalproducts}}</h5></td>
                                          </tr>
                                          </thead>
                                  <br>
                                  <thead>
                                      <tr>
                                          
                                          <th>Product Owner ID</th>
                                          <th>Product ID</th>
                                          <th>Product Name</th>
                                          <th>Product Main Image</th>
                                          <th>Price</th>
                                          <th>Sale price</th>
                                          <th>SKU</th>
                                          <th>Stock</th>
                                          <th>Admin Approval</th>
                                          <th>Product Created</th>
                                          <th>Action</th>
                                      </tr>

                                  </thead>
                                  <tbody>
                                      @foreach($products as $product)
                                      <tr>
                                          <td>
                                              {{$product->user_id}}
                                          </td>
                                          <td>
                                              {{$product->id}}
                                          </td>
                                          <td>
                                              <img src="{{asset('images/product')}}/{{$product->image}}" alt="" style="width:100px;height:100px;">
                                          </td>
                                          <td>{{$product->name}}</td>
                                          <td>{{$product->regular_price}}</td>
                                          <td>{{$product->sale_price}}</td>
                                          <td>{{$product->SKU}}</td>
                                          <td>{{$product->stock}}</td>
                                          <td>{{$product->admin_approval}}</td>
                                          <td>{{$product->created_at}}</td>
                                          <td><a href="{{route('admin.supplierproductdetail',['product_id'=>$product->id])}}" class="btn btn-info">View Product Details</a></td>
                                      </tr>
                                      @endforeach
                                      {{$products->links("pagination::bootstrap-4")}}
                                  </tbody>
                              </table>
                              {{$products->links("pagination::bootstrap-4")}}
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
