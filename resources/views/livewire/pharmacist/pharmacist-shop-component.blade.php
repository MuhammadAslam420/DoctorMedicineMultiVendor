<div class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">

                                <div class="card-title">{{Auth::user()->name}} Product</div>
                                
                               <h5 class="pull-right"> <a href="{{route('pharmacist.dashboard')}}" class="btn btn-primary ml-4">Go Back To Dashbaord</a></h5>
                            </div>
                        
                        <div class="card-body">
                            @if(Session::has('success_msg'))
                            <div class="alert alert-success">{{Session::get('success_msg')}}</div>
                            @endif
                        <div class="form-group pull-right">
                <input type="text" class="search form-control" placeholder="What you looking for?">
            </div>
                            <table class="table" id="userTbl">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Manufacturor Name</th>
                                        <th>Price(per/unit)</th>
                                        <th>Weight(ml/mg)</th>
                                        <th>Quantity</th>
                                        <th>Expiry Date</th>
                                        <th>Add Item To Order</th>
                    
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                     $i=1;
                                    @endphp
                                    @foreach($pharmacist->pharmacistProduct as $product)
       
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->manufacture_name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->weight}} </td>
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->expiry_date}}</td>
                                            <td class="d-flex inline-flex">
                                                
                                                <input class="form-control" type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" wire:model="qty" >
                                                <a href="#" class="btn btn-primary" style="height:40px;" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})"><i class="fa fa-shopping-cart"></i></a>                                           
                                            </td>
                                        </tr>
                                         
                                      
                                    @endforeach
                                </tbody>
                            </table>
                          
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
@push('scripts')
<script>
$(document).ready(function(){
	$('.search').on('keyup',function(){
		var searchTerm = $(this).val().toLowerCase();
		$('#userTbl tbody tr').each(function(){
			var lineStr = $(this).text().toLowerCase();
			if(lineStr.indexOf(searchTerm) === -1){
				$(this).hide();
			}else{
				$(this).show();
			}
		});
	});
});
</script>
@endpush