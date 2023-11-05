<div class="main-content">
        <section class="section">
    <div class="container" style="padding:30px 0;">
    <div class="card">
        <div class="card-header">
            Profile
        </div>
        <div class="card-body">
          <div class="row">
          <div class="col-md-4">
              @if($user->manager->image)
              <img src="{{asset('images/users')}}/{{$user->manager->image}}" width=100% >
              @else
              <img src="{{asset('images/users/user.png')}}" width=100%  >
              @endif
            </div>
            <div class="col-md-8">
              <p><b>Name</b> {{$user->name}}</p>
         
            <p><b>Email</b> {{$user->email}}</p>
            
            <p><b>Mobile</b> {{$user->phone}}</p>
            
            <p><b>Type</b> {{$user->utype}}</p>
            <p><b>Address Line1: </b> {{$user->manager->line1}}</p>
            <p><b>Address Line2: </b> {{$user->manager->line2}}</p>
            <p><b>City: </b> {{$user->manager->city}}</p>
            <p><b>Province: </b> {{$user->manager->province}}</p>
            <p><b>Country: </b> {{$user->manager->country}}</p>
            <p><b>ZipCode: </b> {{$user->manager->zipcode}}</p>
            <a href="{{route('deliverymanager.editprofile')}}" class="btn btn-info pull-right">Update Profile</a>
            </div>
          </div>
        </div>
    </div>

    </div>
</section>
</div>
