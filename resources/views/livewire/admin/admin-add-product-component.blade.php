<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                   
                        <div class="col-12">
                           <h4>Add Product</h4>
                     
                   
                     
                         <a href="{{route('admin.product')}}" class="btn btn-success pull-right">Admin Products</a>

                   </div>
                 </div>
                

                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card-body p-0">
                  <div class="ml-5 mr-5 justify-content-center">
                  <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                                 
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Product Name</label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control input-md" placeholder="Product Name" wire:model="name" wire:keyup="generateslug"/>
                                       @error('name')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
     
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Product Slug</label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control input-md" placeholder="Product Slug" wire:model="slug"/>
                                   </div>
                               </div>
   
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Usage Precautions</label>
                                   <div class="col-md-12" wire:ignore>
                                       <textarea  class="form-control" id="short_description" placeholder="Usage Precautions" wire:model="short_description"></textarea>
                                       @error('short_description')<p class="text-danger">{{$message}}</p>@enderror
                                       
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Description</label>
                                   <div class="col-md-12" wire:ignore>
                                       <textarea  class="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                                       @error('description')<p class="text-danger">{{$message}}</p>@enderror
                                       
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Regular Price</label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control input-md" placeholder="Regular Price" wire:model="regular_price"/>
                                       @error('regular_price')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Sale price</label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control input-md" placeholder="Sale price" wire:model="sale_price"/>
                                       
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">SKU</label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control input-md" placeholder="SKU" wire:model="SKU"/>
                                       @error('SKU')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Stock</label>
                                   <div class="col-md-12">
                                       <select name="" id="" class="form-control" wire:model="stock_status">
                                     
                                           <option value="instock">InStock</option>
                                           <option value="outofstock">Out of Stock</option>
                                       </select>
                                       @error('stock_status')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Featured</label>
                                   <div class="col-md-12">
                                       <select name="" id="" class="form-control" wire:model="featured">
                                           <option value="0">No</option>
                                           <option value="1">Yes</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Quantity</label>
                                   <div class="col-md-12">
                                       <input type="text" class="form-control input-md" placeholder="Quantity" wire:model="quantity">
                                       @error('quantity')<p class="text-danger">{{$message}}</p>@enderror
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Product Image</label>
                                   <div class="col-md-12">
                                       <input type="file" class="input-file" wire:model="image"/>
                                       @error('image')<p class="text-danger">{{$message}}</p>@enderror
                                       @if($image)
                                       <img src="{{$image->temporaryurl()}}" width="120"/>
                                       @endif
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Product Gallery</label>
                                   <div class="col-md-12">
                                       <input type="file" class="input-file" multiple  wire:model="images"/>
                                       @error('images')<p class="text-danger">{{$message}}</p>@enderror
                                       @if($images)
                                       @foreach($images as $image)
                                       <img src="{{$image->temporaryurl()}}" width="120"/>
                                       @endforeach
                                       @endif
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Category</label>
                                   <div class="col-md-12">
                                       <select  class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                           <option value="">Select Category</option>
                                           @foreach($categories as $category)
                                           <option value="{{$category->id}}">{{$category->name}}</option>
                                           @endforeach
                                           
                                       </select>
                                       @error('category_id')<p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="" class="col-md-4 control-label">Sub Category</label>
                                   <div class="col-md-12">
                                       <select  class="form-control" wire:model="scategory_id">
                                           <option value="0">Select SubCategory</option>
                                           @foreach($scategories as $scategory)
                                           <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                           @endforeach
                                           
                                       </select>
                                       @error('scategory_id')<p class="text-danger">{{$message}}</p>@enderror

                                   </div>
                               </div>
                               <div class="form-group">
                                   
                                   <div class="col-md-12">
                                      <button type="submit" class="btn btn-info pull-right">Add</button>
                                   </div>
                               </div>

                           </form>
                
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
    $(function(){
        tinymce.init({
            selector:'#short_description',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                     var sd_data=$('#short_description').val();
                     @this.set('short_description',sd_data);
                });
            }
        });
        tinymce.init({
            selector:'#description',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                     var d_data=$('#description').val();
                     @this.set('description',d_data);
                });
            }
        });
    });
</script>
@endpush