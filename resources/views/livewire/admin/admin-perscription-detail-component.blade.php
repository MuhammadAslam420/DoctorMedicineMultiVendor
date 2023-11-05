<div id="main">
<div class="main-content">
        <section class="section">
         <div class="container">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Upload Perscription</h4>
                      <div class="row">
                      
                      <div class="col-12">
                          <a href="{{route('admin.perscription')}}" class="btn btn-success pull-right">All Perscription</a>

                      </div>
                  </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12">
                        <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                    
                                <table class="table">
                                    <thead>
                                        
                                        <th class="cart-product-image">Perscription Id</th>
                                        <th class="cart-product-info">Perscription Status</th>
                                        <th class="cart-product-info">Perscription Date</th>
                                        @if($upload->status =='delivered')
                                        <th class="cart-product-info">Items Delivery Date</th>
                                        @elseif($upload->status == 'canceled')
                                        <th class="cart-product-info">Item Canceled Date</th>
                                        @endif
                                    </thead> 

                                    
                                    <tbody>
                                        
                                        <tr>
                                        
                                          <td>{{$upload->id}}</td>
                                          <td>{{$upload->status}}</td>
                                          <td>{{$upload->created_at}}</td>
                                          @if($upload->status =='delivered')
                                          <td>Perscription Item Delivered</td>
                                          @elseif($upload->status == 'canceled')
                                          <td>Perscription Canceled</td>
                                          @endif
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
                        
                                    <table class="table">
                                        <thead>
                                            
                                            <th class="cart-product-image">Perscription Images</th>
                                            
                                        </thead> 

                                        
                                        <tbody>
                                          
                                            <tr>
                                              
                                                <td class="cart-product-image">
                                                @php
                                                $images=explode(',',$upload->images);
                                                @endphp
                                                @foreach($images as $image)
                                              @if($image)
                                                    <a href="{{asset('images/perscription')}}/{{$image}}"  data-rel="lightcase:myCollection">
                                                        <img src="{{asset('images/perscription')}}/{{$image}}" style="width:450px;height:450px;" class="p-1"   alt="{{$upload->firstname}}">
                                                    </a>
                                                    @endif
                                                @endforeach                                        </td>
                                              
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
            
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Perscription Items customer Personal Information </h4>
                    
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                          <table class="table">
                              <tr>
                                  <th>First Name</th>
                                  <td>{{$upload->firstname}}</td>
                                  <th>Last Name</th>
                                  <td>{{$upload->lastname}}</td>
                              </tr>
                              <tr>
                                  <th>Mobile</th>
                                  <td>{{$upload->mobile}}</td>
                                  <th>Email</th>
                                  <td>{{$upload->email}}</td>
                              </tr>
                              <tr>
                                  <th>Line 1</th>
                                  <td>{{$upload->line1}}</td>
                                  <th>Line2</th>
                                  <td>{{$upload->line2}}</td>
                              </tr>
                              <tr>
                                  <th>City</th>
                                  <td>{{$upload->city}}</td>
                                  <th>Province/State</th>
                                  <td>{{$upload->province}}</td>
                              </tr>
                              <tr>
                                  <th>ZipCode</th>
                                  <td>{{$upload->zipcode}}</td>
                                  <th>Country</th>
                                  <td>{{$upload->country}}</td>
                              </tr>
                          </table>
                      
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
            
            </div>
         </div>
         >
        </section>
         
      </div>
      </div>