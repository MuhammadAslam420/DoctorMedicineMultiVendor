<div id="main">

    <div class="container " style="padding:30px 0;">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">
                            <h1>All Online Doctor Appointments</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Appointment ID</th>
                                    <th>Doctor Name</th>
                                    <th>Meeting ID</th>
                                    <th>Topic</th>
                                    <th>Start Date</th>
                                    <th>Duration</th>
                                    <th>Password</th>
                                    <th>Join Url</th>
                                    <th>Meeting Created at</th>
                                    <th>Meeting Status</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($onlines as $online)
                                <tr>
                                    <td>{{$online->id}}</td>
                                    @php
                                    $doctor=DB::table('doctors')->where('id','=',$online->doctor_id)->first();
                                    @endphp
                                    <td>{{$doctor->firstname}}</td>
                                    <td>{{$online->meeting_id}}</td>
                                    <td>{{$online->topic}}</td>
                                    <td>{{$online->start_at}}</td>
                                    <td>{{$online->duration}}</td>
                                    <td>{{$online->password}}</td>
                                    @if($online->appointment->meeting_status === 'schedule')
                                    <td><a href="https://us05web.zoom.us/wc/6931639507/start"
                                            class="btn btn-success">Join Meeting</a></td>
                                    @else
                                    <td>
                                        <p class="text-danger">Meeting Already Held</p>
                                    </td>
                                    @endif
                                    <td>{{$online->created_at}}</td>
                                    <td>{{$online->appointment->meeting_status}}</td>
                                    @if($online->appointment->meeting_status ='held' && $online->rstatus !=1)
                                    <td><a href="{{route('user.onlinereviews',['onlinemeeting_id'=>$online->id])}}"
                                            class="btn btn-primary">Add Reviews</a></td>
                                    @elseif($online->appointment->meeting_status ='held' && $online->rstatus =1)
                                    <td>
                                        <p class="text-danger">ThankYou For Feed Back</p>
                                    </td>
                                    @else
                                    <td>
                                        <p class="text-danger">After Meeting You Can Allow To Add Reviews</p>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $onlines->links("pagination::bootstrap-4")}}

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
