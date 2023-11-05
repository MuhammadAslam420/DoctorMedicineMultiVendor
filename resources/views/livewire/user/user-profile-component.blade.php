<div>
    <div class="container" style="padding:30px 0;">
    <div class="card">
        <div class="card-header">
            Profile
        </div>
        <div class="card-body">
          <div class="row">
          <div class="col-md-4">
              @if($user->profile->image)
              <img src="{{asset('images/users')}}/{{$user->profile->image}}" width=100% >
              @else
              <img src="{{asset('images/users/user.png')}}" width=100%  >
              @endif
            </div>
            <div class="col-md-8">
              <p><b>Name</b> {{$user->name}}</p>
         
            <p><b>Email</b> {{$user->email}}</p>
            
            <p><b>Mobile</b> {{$user->phone}}</p>
            
            <p><b>Type</b> {{$user->utype}}</p>
            <p><b>Address Line1: </b> {{$user->profile->line1}}</p>
            <p><b>Address Line2: </b> {{$user->profile->line2}}</p>
            <p><b>City: </b> {{$user->profile->city}}</p>
            <p><b>Province: </b> {{$user->profile->province}}</p>
            <p><b>Country: </b> {{$user->profile->country}}</p>
            <p><b>ZipCode: </b> {{$user->profile->zipcode}}</p>
            <a href="{{route('user.editprofile')}}" class="btn btn-info pull-right">Update Profile</a>
            </div>
          </div>
        </div>
    </div>

    </div>
</div>
