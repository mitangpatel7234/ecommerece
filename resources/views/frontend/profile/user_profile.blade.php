@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br> 
          <img class="card-img-top" style="border-radius: 50%" src="{{ (!empty($user->profile_photo_path))?
       url('upload/user_images/'.$user->profile_photo_path):
       url('upload/no_image.jpg') }}" height="100%" width="100%"><br><br>   
       <ul class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-samll btn-block">Home </a>
        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-samll btn-block">Profile Update </a>
        <a href="{{ route('change.password') }}" class="btn btn-primary btn-samll btn-block">Change Password </a>
        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-samll btn-block">Logout </a>

       </ul>
            </div><!-- col-md-2-->
            
            <div class="col-md-2">

            </div><!-- col-md-2-->

            <div class="col-md-6">

            <div class="card">
         <h3 class="text-center"><span class="text-danger">Hi...</span><strong> {{ Auth::user()->name }}</strong>
       Update Your Profile
        </h3>
        <div class="card-body">
        <form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
        @csrf  

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Name <span></span></label>
		    <input type="text"  class="form-control " name="name" value="{{ $user->name }}" >
		</div>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email <span></span></label>
		    <input type="email"  class="form-control " name="email" value="{{ $user->email }}" >
		</div>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Phone No <span></span></label>
		    <input type="text"  class="form-control " name="phone" value="{{ $user->phone }}" >
		</div>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">User Image <span></span></label>
		    <input type="file"  class="form-control " name="profile_photo_path"   >
		</div>

        <div class="form-group">
		   
		    <button type="submit" class="btn btn-danger">Update Profile</button>
		</div>

        
      

        </form>  

        </div>
            </div>

            </div><!-- col-md-2-->

        </div> <!--end row-->

    </div>

</div>


@endsection