<div class="main-content">
        <section class="section">
          
         
         <div class="container">
         <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                 <div class="card-title">
                 <h4>Appointment detail</h4>
                 </div>
             
                 </div>
                 <div class="card-body">
                  <div class="row">
                <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                 
                            <table class="table">
                              @if(Session::has('aperscription_msg'))
                              <div class="alert alert-success">{{Session::get('aperscription_msg')}}</div>
                              @endif
                                <thead>
                                    
                                    <th class="cart-product-image">Appointment Id</th>
                                    <th class="cart-product-info">Appointment Type</th>
                                    <th class="cart-product-info">Appointment Status</th>
                                    <th class="cart-product-info">Appointment Date</th>

                                </thead> 

                                
                                <tbody>
                                    
                                    <tr>
                                    
                                       <td>{{$appointment->id}}</td>
                                       <td>{{$appointment->meeting_type}}</td>
                                       <td>{{$appointment->meeting_status}}</td>
                                       <td>{{$appointment->created_at}}</td>       
                                    </tr>
                                  
                                   
                                </tbody>
                               
                            </table>
                        
                        </div>
                       
                    </div>
                </div>
                </div>
                </div>
                  
                

               
                <div class="row">
                <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                 
                            <table class="table" >
                                <tbody>
                                    
                                    <tr>
                                      <th class="cart-product-image">Patient uploaded Document History</th>
                                      @php
                                      $images=explode(',',$appointment->document);
                                      @endphp
                                      @foreach($images as $image)
                                        <td class="cart-product-image">
                                          @if($image)
                                          <a href="{{asset('images/patients')}}/{{$image}}"  data-rel="lightcase:myCollection">
                                            <img src="{{asset('images/patients')}}/{{$image}}" alt="{{$appointment->firstname}}" style="width:75px; height:45px;">
                                           </a>
                                          @endif
                                        </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th class="cart-product-info ">Patient Name</th>
                                        <td class="cart-product-info ">
                                            {{$appointment->firstname}} {{$appointment->lastname}}
                                        </td>
                                    </tr>
                                    <tr>
                                      <th class="cart-product-info ">Appointment Status</th>
                                        
                                        <td class=""> {{$appointment->meeting_status}}</td>
                                    </tr>  
                                   
                                        <tr><th class="cart-product-info ">Patient ID</th>
                                        <td class=""> {{$appointment->user_id}}</td></tr>
                                        <tr><th class="cart-product-price ">Patient Email</th>
                                        <td class="cart-product-price ">{{$appointment->email}} </td></tr>
                                        <tr><th class="cart-product-price ">Patient Mobile</th>
                                        <td class="cart-product-price ">{{$appointment->mobile}} </td></tr>
                                       <tr><th class="cart-product-price ">Patient Address</th>
                                        <td class="cart-product-quantity ">
                                        <div class="quantity d-flex" style="margin-top:15px;">
                                       <div class="quantity-input d-md-inline ">
                                        {{$appointment->line1}} {{$appointment->line2}}
                                       </div>

                                          </div>
							
                                        </td></tr>
                                        <tr><th class="cart-product-quantity ">Doctor Suggestion</th>
                                        @if($appointment->meeting_type =='online')
                                        
                                        <td> 
                                       @if($appointment->onlinemeeting->doctor_perscription)
                                       <a href="{{asset('images/patients')}}/{{$appointment->onlinemeeting->doctor_perscription}}"  data-rel="lightcase:myCollection">                                          
                                           <img src="{{asset('images/patients')}}/{{$appointment->onlinemeeting->doctor_perscription}}" alt="{{$appointment->firstname}}" style="width:75px; height:45px;">
                                         </a>
                                         @else
                                         No Prescription Suggest by Doctor Yet
                                         @endif
                                         </td>
                                        
                                        @else
                                        <td>Clinic Checkup</td>
                                        @endif
                                        </tr>
                                        <tr><th class="cart-product-quantity ">Patient City</th>
                                        <td class="cart-product-subtotal ">{{$appointment->city}}</td></tr>
                                        <tr><th class="cart-product-subtotal ">Patient Province</th>
                                        <td class="cart-product-subtotal ">{{$appointment->province}}</td></tr>
                                        <tr><th class="cart-product-subtotal ">Patient Zipcode</th>
                                        <td class="cart-product-subtotal ">{{$appointment->zipcode}}</td></tr>
                                        <tr><th class="cart-product-subtotal ">Patient Country</th>
                                        <td class="cart-product-subtotal ">{{$appointment->country}}</td>
                                    </tr>
                                 
                                   
                                </tbody>
                               
                            </table>
                            <div class="summary">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Checkup_fees</td>
                                        <td>Rs.{{$appointment->checkup_fees}}</td>
                                    </tr>
                                    <tr>
                                    
                                    
                                    <td>Total Amount</td>
                                    <td>Rs.{{$appointment->subtotal}}</td>
                                </tr>
                                    
                                  <tr>
                                      <th>Change Status of meeting Schedule to Held after Online Meeeting</th>
                                      <td>
                                        {{$appointment->meeting_status}}
                                      </td>
                                  </tr>
                                   
                                </tbody>
                            </table>
                            </div>
                        </div>
                       
                    </div>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          
        
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Payment Transactions Status</h4>
                 
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
                    <tr><th>Transaction Mode</th>
                    <td>{{$appointment->transaction1->mode}}</td>
                    </tr>
                     <tr>
                    <th>Transaction Status</th>
                    <td>{{$appointment->transaction1->status}}</td>
                    </tr>
                    <tr>
                    <th>Transaction Date</th>
                    <td>{{$appointment->transaction1->created_at}}</td>
                    </tr>
                  </table>
                     
                  </div>
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
