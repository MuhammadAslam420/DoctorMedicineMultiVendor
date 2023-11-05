<div>
    <div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
        <div class="custom-container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">My Appointment Detail</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="my-account-area pt-75 pb-75">
        <div class="container">
            @if(Session::has('can_msg'))
            <div class="alert alert-danger">{{Session::get('can_msg')}}</div>
            @endif
            <div claass="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    Order Details
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('user.appointments')}}" class="btn btn-info btn-medium  pull-right">My
                                        Appointment</a>
                                    @if($appointment->meeting_status =='schedule')
                                    <a href="#" wire:click.prevent="cancelappointment" style="margin:0 20px;"
                                        class="btn btn-danger btn-medium pull-right">Canceled Meeting </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @php
                        $onlinemeetings=DB::table('onlinemeetings')->where('appointment_id','=',$appointment_id)->first();
                        @endphp
                        <div class="panel-body">
                            <table class="table">
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
                                @if($appointment->meeting_status ==='held')
                                <tr>
                                    <th>Appointment Held Date</th>
                                    <td>{{$onlinemeetings->start_at}}</td>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Meeting Info
                        </div>

                    <div class="card-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Meeting Topic: {{$onlinemeetings->topic}}</h3>
                            <ul class="products-cart" style="display:flex;flex-direction:row;">
                                MeetingId:&nbsp;{{$onlinemeetings->meeting_id}}&nbsp;

                                <li class="pr-cart-item" style="display:flex;flex-direction:row;">

                                    <div class="product-name">
                                    Password:&nbsp;{{$onlinemeetings->password}}&nbsp;
                                    </div>
                                    <div class="price-field produtc-price">
                                        Fees:&nbsp;<p class="price">Rs.{{$appointment->checkup_fees}}&nbsp;</p>
                                    </div>
                                    <div class="quantity">
                                        Tax:&nbsp;<h4>{{$appointment->tax}}&nbsp;</h4>
                                    </div>
                                    <div class="price-field sub-total">
                                        Subtotal:&nbsp;<p class="price">Rs.{{$appointment->subtotal}}&nbsp;</p>
                                    </div>


                                </li>
                                @php
                                $images=explode(',',$appointment->document)
                                @endphp

                               <div style="display:flex;flex-direction:row;">
                                Patient History Reports:
                                <br>
                                @foreach($images as $image)
                                <li class="pr-cart-item" style="display:flex;flex-direction:row;">
                                    @if($image)
                                    &nbsp;<img src="{{asset('images/patients')}}/{{$image}}" width="90" alt="" >&nbsp;
                                    @endif

                                </li>
                                @endforeach
                               </div>
                            </ul>

                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Appointment Summary</h4>
                                <p class="summary-info"><span class="title">Subtotal : </span><b
                                        class="index">Rs.{{$appointment->checkup_fees}}</b></p>
                                <p class="summary-info"><span class="title">Tax</span><b
                                        class="index">Rs.{{$appointment->tax}}</b></p>
                                <p class="summary-info"><span class="title">Total</span><b
                                        class="index">Rs.{{$appointment->subtotal}}</b></p>


                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Doctor Info
                        </div>

                    <div class="card-body">
                        @php
                        $doctor=DB::table('doctors')->where('id','=',$onlinemeetings->doctor_id)->first();
                        @endphp
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">{{$doctor->firstname}}</h3>
                            <ul class="products-cart" style="display:flex;flex-dirction:row;">
                                {{$doctor->city}}&nbsp;
                                <li class="pr-cart-item" style="display:flex;flex-dirction:row;">

                                    <div class="product-name">
                                        {{$doctor->state}}, {{$doctor->country}}&nbsp;
                                    </div>
                                    <div class="price-field produtc-price">
                                        <p class="price">Rs.{{$appointment->checkup_fees}}</p>&nbsp;
                                    </div>
                                    <div class="quantity">
                                        <h4>{{$appointment->tax}}</h4>&nbsp;
                                    </div>
                                    <div class="price-field sub-total">
                                        <p class="price">Rs.{{$appointment->subtotal}}</p>&nbsp;
                                    </div>


                                </li>

                            </ul>

                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Appointment Summary</h4>
                                <p class="summary-info"><span class="title">Subtotal : </span><b
                                        class="index">Rs.{{$appointment->checkup_fees}}</b></p>
                                <p class="summary-info"><span class="title">Tax</span><b
                                        class="index">Rs.{{$appointment->tax}}</b></p>
                                <p class="summary-info"><span class="title">Total</span><b
                                        class="index">Rs.{{$appointment->subtotal}}</b></p>


                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Billing Details</h2>

                        </div>
                        <div class="card-body">
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
                                    <td>{{$appointment->line1}} {{$appointment->line2}}</td>

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
                    <div class="card">
                        <div class="card-header">
                            <h2>Transaction Details</h2>

                        </div>
                        <div class="card-body">
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
