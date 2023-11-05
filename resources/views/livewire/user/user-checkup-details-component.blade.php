<div>
 <div class="container" style="padding:30px  0;">
 @if(Session::has('can_msg'))
 <div class="alert alert-danger">{{Session::get('can_msg')}}</div>
 @endif
 <div claass="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heading">
                 <div class="row">
                  <div class="col-md-6">
                  Appointment Details
                  </div>
                  <div class="col-md-6">
                  <a href="{{route('user.appointments')}}" class="btn btn-info btn-medium  pull-right">My Appointment</a>
                 @if($appointment->meeting_status =='schedule')
                  <a href="#" wire:click.prevent="cancelappointment" style="margin:0 20px;"class="btn btn-danger btn-medium pull-right">Canceled Meeting </a>
                @endif  
                </div>
                 </div>
             </div>
            
             <div class="panel-body">
                 <table  class="table">
                     <tr>
                         <th>Appointment Id</th>
                         <td>{{$appointment->id}}</td>
                     </tr>
                     <tr>
                         <th>Appointment Date</th>
                         <td>{{$appointment->created_at}}</td>
                     </tr>
                     <tr>
                         <th>Appointment Status</th>
                         <td>{{$appointment->meeting_status}}</td>
                     </tr>
                     <tr>
                         <th>Appointment Type</th>
                         <td>{{$appointment->meeting_type}}</td>
                     </tr>
                     @if($appointment->meeting_status ==='held')
                     <tr>
                         <th>Appointment Held Date</th>
                         <td>{{$appointment->appointment_datetime}}</td>
                         @elseif($appointment->status === 'canceled')
                         <th>Order Canceled date</th>
                         <td>{{$appointment->canceled_date}}</td>
                         
                         @endif
                     </tr>

                 </table>

             </div>

         </div>
     </div>
 </div>
<div class="container">
<div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heading">
           Meeting Info
           </div>
             </div>
             <div class="panel-body">
             <div class="wrap-iten-in-cart">
					<h3 class="box-title">Medical History Images</h3>
                    @php
                    $images=explode(',',$appointment->document)
                    @endphp
					<ul class="products-cart">
					@foreach($images as $image)
						<li class="pr-cart-item">
							@if($image)
						<img src="{{asset('images/patients')}}/{{$image}}" width="50%" alt="">
                        @endif
							
						</li> 
                        @endforeach
																			
						</ul>
						
					</div>
                    <div class="summary">
                    <div class="order-summary">
                    <h4 class="title-box">Appointment Summary</h4>
                    <p class="summary-info"><span class="title">Subtotal : </span><b class="index">Rs.{{$appointment->checkup_fees}}</b></p>
                    <p class="summary-info"><span class="title">Tax</span><b class="index">Rs.{{$appointment->tax}}</b></p>
                    <p class="summary-info"><span class="title">Total</span><b class="index">Rs.{{$appointment->subtotal}}</b></p>


                       </div>
                    </div>
             </div>
         </div>

     </div>

 </div>
 <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heading">
           Doctor Info
           </div>
             </div>
             <div class="panel-body">
                 @php
                 $doctor=DB::table('doctors')->where('id','=',$appointment->doctor_id)->first();
                 @endphp
             <div class="wrap-iten-in-cart">
					<h3 class="box-title">{{$doctor->firstname}}</h3>
					<ul class="products-cart">
						{{$doctor->city}}
						<li class="pr-cart-item">
							
							<div class="product-name">
                                {{$doctor->state}}, {{$doctor->country}}
							</div>
							<div class="price-field produtc-price"><p class="price">Rs.{{$appointment->checkup_fees}}</p></div>
							<div class="quantity">
							<h4>{{$appointment->tax}}</h4>	
							</div>
							<div class="price-field sub-total"><p class="price">Rs.{{$appointment->subtotal}}</p></div>
                        
							
						</li> 
																			
						</ul>
						
					</div>
                    <div class="summary">
                    <div class="order-summary">
                    <h4 class="title-box">Appointment Summary</h4>
                    <p class="summary-info"><span class="title">Subtotal : </span><b class="index">Rs.{{$appointment->checkup_fees}}</b></p>
                    <p class="summary-info"><span class="title">Tax</span><b class="index">Rs.{{$appointment->tax}}</b></p>
                    <p class="summary-info"><span class="title">Total</span><b class="index">Rs.{{$appointment->subtotal}}</b></p>


                       </div>
                    </div>
             </div>
         </div>

     </div>

 </div>
 <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h2>Billing Details</h2>

             </div>
             <div class="panel-body">
                 <table class="table">
                     
                         <tr>
                             <th>First Name</th>
                             <td>{{$appointment->firstname}}</td>
                             
                             <th>Last Name</th>
                             <td>{{$appointment->lastname}}</td>
                             </tr>
                             <tr>
                             <th>Email </th>
                             <td>{{$appointment->email}}</td>
                            
                             <th>Mobile</th>
                             <td>{{$appointment->mobile}}</td>
                             </tr>
                             <tr>
                             <th>Address</th>
                             <td>{{$appointment->line1}}  {{$appointment->line2}}</td>
                            
                             <th>City</th>
                             <td>{{$appointment->city}}</td>
                             </tr>
                             <tr>
                             <th>Province</th>
                             <td>{{$appointment->province}}</td>
                            
                             <th>Cooutry</th>
                             <td>{{$appointment->country}}</td>
                           </tr>
                             <tr>
                             <th>ZipCode</th>
                             <td>{{$appointment->zipcode}}</td>

                         </tr>
                
                 </table>

             </div>
         </div>

     </div>

 </div>

 <div class="row">
     <div class="col-md-12">
         <div class="panel panel-default">
             <div class="panel-heading">
            <h2>Transaction Details</h2>

             </div>
             <div class="panel-body">
             <table class="table">
                     
                     <tr>
                         @php
                         $transaction1=DB::table('transaction1s')->where('appointment_id','=',$appointment->id)->first();
                         @endphp
                         <th>Transaction Mode</th>
                         <td>{{$transaction1->mode}}</td>
                         </tr>
                         <tr>
                         <th>Status</th>
                         <td>{{$transaction1->status}}</td>
                         </tr>

                         <th>Transaction Date</th>
                         <td>{{$transaction1->created_at}}</td>
                         </tr>
                         
                        
                        
            
             </table>

             </div>
         </div>

     </div>

 </div>
</div>

 </div>
</div>
