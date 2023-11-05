<div class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Product Detail</h2>
                                    <a href="{{route('admin.supplierproductlist',['user_id'=>$product->user_id])}}" class="btn btn-info float-right">Go Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table">
                                    <table>
                            
                                            <tr>
                                            <th>Product ID</th>
                                            <td>{{$product->id}}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Name</th>
                                            <td>{{$product->name}}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Slug</th>
                                            <td>{{$product->slug}}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Category</th>
                                            <td>{{$product->category->name}}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Sub-Category</th>
                                            @if($product->subcategory_id)
                                            <td>{{$product->subcategories->name}}</td>
                                            @else
                                            <td>No Subcateory Attach</td>
                                            @endif
                                            </tr>
                                            <tr>
                                            <th>Product Precautions</th>
                                            <td>{!! $product->short_description !!}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Description</th>
                                            <td>{!! $product->description !!}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Price</th>
                                            <td>{{$product->regular_price }}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Sale Price</th>
                                            <td>{{$product->sale_price }}</td>
                                            </tr>
                                            <tr>
                                            <th>Product SKU</th>
                                            <td>{{$product->SKU}}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Featured</th>
                                            <td>{{$product->featured}}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Stock</th>
                                            <td>{{$product->stock_status}}</td>
                                            </tr>
                                            <tr>
                                            <th>admin Approval</th>
                                            <td>{{$product->admin_approval}}</td>
                                            </tr>
                                            <tr>
                                            <th>Product Main Image</th>
                                            <td><img src="{{asset('images/product')}}/{{$product->image}}" alt="" style="width:150px;height:120px;"></td>
                                            </tr>
                                            <tr>
                                            @php
                                                $images=explode(',',$product->images);
                                                @endphp
                                                <th>Product Gallery</th>
                                                @foreach($images as $image)
                                                    <td><img src="{{asset('images/product')}}/{{$image}}" alt="" style="width:150px;height:120px;"></td>
                                                    
                                                @endforeach
                                        </tr>
                                        <tr>
                                            <th>Product Created At</th>
                                            <td>{{$product->created_at}}</td>
                                            </tr>

                                    </table>
                                </div>
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
