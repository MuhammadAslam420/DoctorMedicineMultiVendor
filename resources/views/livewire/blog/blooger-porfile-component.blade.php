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
              @if($user->blog->image)
              <img src="{{asset('images/users')}}/{{$user->blog->image}}" width=100% >
              @else
              <img src="{{asset('images/users/user.png')}}" width=100%  >
              @endif
            </div>
            <div class="col-md-8">
              <p><b>Name</b> {{$user->name}}</p>
         
            <p><b>Email</b> {{$user->email}}</p>
            
            <p><b>Mobile</b> {{$user->phone}}</p>
            
            <p><b>Type</b> {{$user->utype}}</p>
            <p><b>Address Line1: </b> {{$user->blog->line1}}</p>
            <p><b>Address Line2: </b> {{$user->blog->line2}}</p>
            <p><b>City: </b> {{$user->blog->city}}</p>
            <p><b>Province: </b> {{$user->blog->province}}</p>
            <p><b>Country: </b> {{$user->blog->country}}</p>
            <p><b>ZipCode: </b> {{$user->blog->zipcode}}</p>
            <a href="{{route('blogger.editprofile')}}" class="btn btn-info pull-right">Update Profile</a>
            </div>
          </div>
        </div>
    </div>

    </div>
</section>
</div>
