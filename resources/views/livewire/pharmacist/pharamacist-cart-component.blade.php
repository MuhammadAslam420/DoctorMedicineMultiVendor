<div class="main-content">
    <section class="section">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                        <div class="card-title">Pharmacist Shop</div>
                    </div>
                    <div class="card-body">
                    <div class="float-right"><a href="{{route('pharmacist.shop')}}" class="btn btn-primary float-right">My Pharmacy</a></div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Remove</th>
                                    <th>Product Name</th>
                                    <th>Product Quantity</th>
                                    <th>Product Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach(Cart::instance('cart')->content() as $item)
                            <tr class="m-2 p-2">
                              <td ><a href="#" class="btn btn-danger" title="" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="fa fa-trash"></i></td>
                              <td class="m-2 p-2">{{$item->model->name}}</td>  
                              <td class="m-2 p-2"> 
                                  <div class="d-flex inline-flex">
                                  <div class="d-flex inline-flex">
                            <input type="text"class="form-control"name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
                            <a class="btn btn-success" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"><i class="fa fa-plus"></i></a>
                            <a class="btn btn-danger" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"><i class="fa fa-minus"></i></a>
                        </div>
                                  </div>
                              </td>
                              <td class="m-2 p-2">{{$item->subtotal}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                
                                <p class="summary-info"><span class="title">Tax: </span><b class="index">Rs.{{Cart::tax()}}</b></p>
							    <p class="summary-info"><span class="title">Shipping: </span><b class="index">Free Shipping</b></p>
							    <p class="summary-info total-info "><span class="title">Total: </span><b class="index">Rs.{{Cart::total()}}</b></p>
                                
                            </tfoot>
                        </table>
                        <a class="btn btn-primary float-right" href="#" wire:click.prevent="placeOrder">Check out</a>
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
