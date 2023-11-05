<div class="main-content">
        <section class="section">
    <div class="container" style="padding:30px 0;">
    <div class="card">
        <div class="card-header">
            Profile
        </div>
        <div class="card-body">
            @if(Session::has('message'))
              <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
            <form enctype="multipart/form-data" wire:submit.prevent=" updateProfile">
                <div class="row">
                <div class="col-md-4">
                    @if($newimage)
                    <img src="{{$newimage->temporaryUrl()}}" width=100% >
                    @elseif($image)
                    <img src="{{asset('images/users')}}/{{$image}}" width=100% >
                    @else
                    <img src="{{asset('images/users/user.png')}}" width=100%  >
                    @endif
                    <input type="file" class="form-control" wire:model="newimage"/>
                    </div>
                    <div class="col-md-8">
                    <p><b>Name</b><input type="text" class="form-control input-md" placeholder="Name" wire:model="name"></p>
                
                    <p><b>Email</b> {{$email}}</p>
                    
                    <p><b>Mobile</b><input type="text" class="form-control input-md" placeholder="mobile" wire:model="mobile"></p>
                    <p><b>Address Line1: </b> <input type="text" class="form-control input-md" placeholder="Address Line1" wire:model="line1"></p>
                    <p><b>Address Line2: </b> <input type="text" class="form-control input-md" placeholder="Address line2" wire:model="line2"></p>
                    <p><b>City: </b> <input type="text" class="form-control input-md" placeholder="City" wire:model="city"></p>
                    <p><b>Province: </b> <input type="text" class="form-control input-md" placeholder="Province" wire:model="province"></p>
                    <p><b>Country: </b> <input type="text" class="form-control input-md" placeholder="Country" wire:model="country"></p>
                    <p><b>ZipCode: </b> <input type="text" class="form-control input-md" placeholder="ZipCode" wire:model="zipcode"></p>
                    <button type="submit" class="btn btn-warning pull-right">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>
</section>
</div>
