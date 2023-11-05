<div class="main-content">
        <section class="section">
          
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Orders</h4>
                  <div class="row">
                   
                   <div class="col-12">
                       <a href="{{route('admin.perscription')}}" class="btn btn-success pull-right">Go Back To Dashboard</a>

                  </div>
               </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                  <table >
                    @if(Session::has('order_msg'))
                    <div class="alert alert-success">{{Session::get('order_msg')}}</div>
                    @endif
                        <thead>
                     
                             <tr>
                             <th class="p-1 text-center">
                                    #
                                 </th >
                                 <th class="p-1 text-center">
                                    Perscription ID
                                 </th >
                                 <th class="p-1 text-center">
                                     User ID
                                 </th >
                                 <th class="p-1 text-center">
                                     Perscription Image
                                 </th >
                                 <th class="p-1 text-center">
                                   First Name

                                 </th>
                                 <th class="p-1 text-center">
                                 Last Name

                                 </th>
                                 <th class="p-1 text-center">
                                 Mobile

                                 </th>
                                 <th class="p-1 text-center">
                                 Email

                                 </th>
                                 <th class="p-1 text-center">Address</th>
                                 <th class="p-1 text-center">City</th>
                                 <th class="p-1 text-center">Province</th>
                                 <th class="p-1 text-center">Country</th>

                                 <th class="p-1 text-center">
                                 Status

                                 </th>
                                 <th class="p-1 text-center">
                                   Upload Date

                                 </th>
                                 
                                 <th class="p-1 text-center" colspan="2">
                                   Action

                                 </th>
                                 <th class="p-1 text-center" >
                                   Info

                                 </th>
                                 
                             </tr>
                         <thead>
                             @php
                              $i=1;
                             @endphp
                             @foreach($uploads as $upload)
                             <tr>
                             <td class="p-1 text-center">{{$i++}}</td>
                                 <td class="p-1 text-center">{{$upload->id}}</td>
                                 <td class="p-1 text-center">{{$upload->user_id}}</td>
                                 <td class="p-1 text-center">  
                                 @php
                                        $images=explode(',',$upload->images);
                                        @endphp
                                        @foreach($images as $image)
                                       @if($image)
                                            <a href="{{asset('images/perscription')}}/{{$image}}"  data-rel="lightcase:myCollection">
                                                <img src="{{asset('images/perscription')}}/{{$image}}" style="width:100px;height60px;" class="p-1"   alt="{{$upload->firstname}}">
                                            </a>
                                            @endif
                                        @endforeach
                                        </td>
                                 <td class="p-1 text-center">{{$upload->firstname}}</td>
                                 <td class="p-1 text-center">{{$upload->lastname}}</td>
                                 <td class="p-1 text-center">{{$upload->mobile}}</td>
                                 <td class="p-1 text-center">{{$upload->email}}</td>
                                 <td class="p-1 text-center">{{$upload->line1}} {{$upload->line2}}</td>
                                 <td class="p-1 text-center">{{$upload->city}}</td>
                                 <td class="p-1 text-center">{{$upload->province}}</td>
                                 <td class="p-1 text-center">{{$upload->country}}</td>
                                 <td class="p-2 text-center">
                                 
                                   <div class="dropdown">
                                     <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                     {{$upload->status}}
                                       <span class="caret"></span>
                                     </button>
                                     <ul class="dropdown-menu">
                                     <li class="text-center"><a href="#" wire:click.prevent="updatePerscriptionStatus({{$upload->id}},'assign')">Assign</a></li>
                                     <li class="text-center"><a href="#" wire:click.prevent="updatePerscriptionStatus({{$upload->id}},'dispatch')">Dispatch</a></li>
                                       <li class="text-center"><a href="#" wire:click.prevent="updatePerscriptionStatus({{$upload->id}},'delivered')">Delivered</a></li>
                                       <li class="text-center"><a href="#" wire:click.prevent="updatePerscriptionStatus({{$upload->id}},'canceled')">Canceled</a></li>
                                     </ul>
                                    </div>
                                 </td>
                                 <td class="p-1 text-center">{{$upload->created_at}}</td>
                                 <td class="p-1 text-center">
                                 <div class="dropdown">
                                     <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                     Available Phacrmacy
                                       <span class="caret"></span>
                                     </button>
                                     <ul class="dropdown-menu">
                                       @php 
                                       $k=1;
                                       @endphp
                                     @foreach($pharmacists as $pharmacist)
                                     <li class="text-center"><a href="#" wire:click.prevent="updatePharmacistStatus({{$upload->id}},{{$pharmacist->id}},'assign')">{{$k++}} . {{$pharmacist->pharmacy_name}}, {{$pharmacist->pharmacy_address}}, {{$pharmacist->city}}</a></li>
                                     @endforeach
                                    
                                     </ul>

                                    </div>
                               </td>
                             <td class="p-1 text-center"><a href="{{route('admin.perscriptiondetail',['perscription_id'=>$upload->id])}}" ><i class="fa fa-edit fa-2x text-info"></i></a></td>
                             </tr>
                             @endforeach
                         
                     </table>
                     
                    {{$uploads->links("pagination::bootstrap-4")}}
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
