<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fa fa-home mr-5"></i>Home</a>
                <span></span> Pages <span></span> My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-md-3">
                          <div class="card">

                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fa fa-settings-sliders mr-10"></i>Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fa fa-shopping-bag mr-10"></i>Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="download-tab" data-bs-toggle="tab" href="#download" role="tab" aria-controls="download" aria-selected="false"><i class="fa fa-stethoscope mr-10"></i>Appointments</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-edit-tab" data-bs-toggle="tab" href="#address-edit" role="tab" aria-controls="address-edit" aria-selected="true"><i class="fa fa-clipboard mr-10"></i>My Medicine</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-info-tab" data-bs-toggle="tab" href="#account-info" role="tab" aria-controls="account-info" aria-selected="true"><i class="fa fa-user-o mr-10"></i>Online Appointents</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                            <!-- My Account Tab Menu End -->
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-12">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                                        <div class="myaccount-content">
                                            <div class="card">
                                                <div class="row m-2">
                                                    <div class="col-md-12">
                                                        <h3>All Orders Statistics</h3>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Total Cost</h5>

                                                                            <h3 class="mb-3 font-18">Rs.{{$totalcost}}
                                                                            </h3>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Total Purchase</h5>

                                                                            <h3 class="mb-3 font-18">{{$totalpurchase}}
                                                                            </h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Total Delivered</h5>

                                                                            <h3 class="mb-3 font-18">{{$totaldelivered}}
                                                                            </h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Total Cancel</h5>

                                                                            <h3 class="mb-3 font-18">{{$totalcancel}}
                                                                            </h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="row m-2">

                                                    <div class="col-md-12">
                                                        <h3>All Online Doctor Appointment Statistics</h3>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                        <div class="card  p-1">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Appointment Cost</h5>

                                                                            <h3 class="mb-3 font-18">
                                                                                Rs.{{$totalcostAppointment}}</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                        <div class="card  p-1">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Appointment Book</h5>

                                                                            <h3 class="mb-3 font-18">
                                                                                {{$totalpurchaseAppointment}}</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                        <div class="card   p-1">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Appointment Held</h5>

                                                                            <h3 class="mb-3 font-18">
                                                                                {{$totaldeliveredAppointment}}</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                        <div class="card  p-1">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Appointment Cancel</h5>

                                                                            <h3 class="mb-3 font-18">
                                                                                {{$totalcancelAppointment}}</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="row m-2">

                                                    <div class="col-md-12">
                                                        <h3>All Clinic Appointment Statistics</h3>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                        <div class="card  p-1">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Checkup Cost</h5>

                                                                            <h3 class="mb-3 font-18">
                                                                                Rs.{{$totalcostAppointmentp}}</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                        <div class="card  p-1">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Checkup Book</h5>

                                                                            <h3 class="mb-3 font-18">
                                                                                {{$totalpurchaseAppointmentp}}</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                        <div class="card   p-1">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Checkup Held</h5>

                                                                            <h3 class="mb-3 font-18">
                                                                                {{$totaldeliveredAppointmentp}}</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                                                        <div class="card  p-1">
                                                            <div class="card-header">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="row ">
                                                                        <div class="card-body">
                                                                            <h5 class="font-15">Checkup Cancel</h5>

                                                                            <h3 class="mb-3 font-18">
                                                                                {{$totalcancelAppointmentp}}</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>All Orders Table</h4>
                                                            <div class="card-header-form">

                                                                <input type="text" id="myInput" onkeyup="myFunction()"
                                                                    placeholder="Search for Date">

                                                            </div>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped" id="myTable">
                                                                    <tr>

                                                                        <th>Order_Id</th>
                                                                        <th>Subtotal</th>
                                                                        <th>Discount</th>
                                                                        <th>Tax</th>
                                                                        <th>Total</th>
                                                                        <th>ZipCode</th>
                                                                        <th>Status</th>
                                                                        <th> Order Date</th>
                                                                        <th>Detail</th>

                                                                    </tr>

                                                                    @foreach($orders as $order)
                                                                    <tr>
                                                                        <td>{{$order->id}}</td>
                                                                        <td>Rs.{{$order->subtotal}}</td>
                                                                        <td>Rs.{{$order->discount}}</td>
                                                                        <td>Rs.{{$order->tax}}</td>
                                                                        <td>Rs.{{$order->total}}</td>
                                                                        <td>{{$order->zipcode}}</td>
                                                                        <td>{{$order->status}}</td>
                                                                        <td>{{$order->created_at}}</td>
                                                                        <td><a
                                                                                href="{{route('user.orderdetails',['order_id'=>$order->id])}}"><i
                                                                                    class="fa fa-plus-circle fa-2x text-info"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach



                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <h4>All Clinic Checkup Booking Table</h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped" id="myTable">
                                                                <tr>

                                                                    <th>Appointment</th>
                                                                    <th>Subtotal</th>
                                                                    <th>Tax</th>
                                                                    <th>Total</th>
                                                                    <th>Meeting Type</th>
                                                                    <th>Meeting Status</th>
                                                                    <th>booking Date</th>
                                                                    <th>Detail</th>

                                                                </tr>

                                                                @foreach($appointmentsp as $appointment)
                                                                <tr>
                                                                    <td>{{$appointment->id}}</td>
                                                                    <td>Rs.{{$appointment->checkup_fees}}</td>
                                                                    <td>Rs.{{$appointment->tax}}</td>
                                                                    <td>Rs.{{$appointment->subtotal}}</td>
                                                                    <td>{{$appointment->meeting_type}}</td>
                                                                    <td>{{$appointment->meeting_status}}</td>
                                                                    <td>{{$appointment->created_at}}</td>
                                                                    <td><a href="{{route('user.checkupdetails',['appointment_id'=>$appointment->id])}}"
                                                                            class="btn btn-primary btn-sm">Detail</a>
                                                                    </td>
                                                                </tr>
                                                                @endforeach



                                                            </table>
                                                            {{$appointmentsp->links("pagination::bootstrap-4")}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content myaccount-address">
                                            <div class="col-12">
                                                <div class="card panel-info">
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <h4>All Perscription Table</h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="table-responsive">
                                                            <table class="table table-responsive">
                                                                <thead>
                                                                    <tr>

                                                                        <th>ID</th>
                                                                        <th colspan="2">Perscription</th>

                                                                        <th>City</th>
                                                                        <th>Province</th>
                                                                        <th>Country</th>
                                                                        <th>Upload Date</th>
                                                                        <th>Action</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($perscriptions as $perscription)
                                                                    <tr>
                                                                        <td>{{$perscription->id}}</td>
                                                                        @php
                                                                        $images=explode(',',$perscription->images);
                                                                        @endphp
                                                                        <td colspan="2">
                                                                            @foreach($images as $image)
                                                                            @if($image)
                                                                            <img src="{{asset('images/perscription')}}/{{$image}}"
                                                                                style="width:75px; height:75px;"
                                                                                alt="" />
                                                                            @endif
                                                                            @endforeach
                                                                        </td>

                                                                        <td>{{$perscription->city}}</td>
                                                                        <td>{{$perscription->province}}</td>
                                                                        <td>{{$perscription->country}}</td>

                                                                        <td>{{$perscription->created_at}}</td>
                                                                        <td><a href="#"
                                                                                class="btn btn-primary">Detail</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>





                                                            </table>
                                                            {{$perscriptions->links("pagination::bootstrap-4")}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <h4>All Online Appointments Table</h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped" id="myTable">
                                                                <tr>

                                                                    <th>Appointment</th>
                                                                    <th>Subtotal</th>
                                                                    <th>Tax</th>
                                                                    <th>Total</th>
                                                                    <th>Meeting Type</th>
                                                                    <th>Meeting Status</th>
                                                                    <th>booking Date</th>
                                                                    <th>Detail</th>

                                                                </tr>

                                                                @foreach($appointments as $appointment)
                                                                <tr>
                                                                    <td>{{$appointment->id}}</td>
                                                                    <td>Rs.{{$appointment->checkup_fees}}</td>
                                                                    <td>Rs.{{$appointment->tax}}</td>
                                                                    <td>Rs.{{$appointment->subtotal}}</td>

                                                                    <td>{{$appointment->meeting_type}}</td>
                                                                    <td>{{$appointment->meeting_status}}</td>
                                                                    <td>{{$appointment->created_at}}</td>
                                                                    <td><a href="{{route('user.appointmentdetail',['appointment_id'=>$appointment->id])}}"
                                                                            class="btn btn-primary btn-sm">Detail</a>
                                                                    </td>
                                                                </tr>
                                                                @endforeach



                                                            </table>
                                                            {{$appointments->links("pagination::bootstrap-4")}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
</main>
@push('scripts')
<script>
    function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[11];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
@endpush
