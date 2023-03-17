@extends('layouts.backend.app')

@section('title')
<title>Seller | Admin</title>
@endsection

@section('css')
@endsection

@section('content')
<div class="page-content">
	<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit User</h4>

                    <div class="page-title-right">
                        <!-- <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">All Users</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol> -->
                        <a href="users.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
                    </div>

                </div>
            </div>
        </div> 
        <!-- [ breadcrumb ] end -->

        <div class="row">
            <div class="col-xl-12">
                <form class="custom-form" method="post" action="{{ route('admin.unverified-seller.update', $user->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                    <div class="card border">
                        <div class="card-header d-flex justify-content-between align-items-center"> 
                            <h4 class="card-title mb-0">Seller Information</h4>  
                        </div>
                        <div class="card-body">  
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="profile-image">
                                        <img class="rounded-circle" src="../assets/admin/images/users/avatar-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Name:</label>
                                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Full Name" value="{{$user->name}}" required />
                                                @error('name')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email Id:</label>
                                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" value="{{$user->email}}" required />
                                                @error('email')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="mobile" class="form-label">Mobile Number:</label>
                                                <input type="text" id="mobile" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="Enter Your Mobile no." value="{{$user->mobile}}" required/>
                                                @error('mobile')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="dob" class="form-label">DOB:</label>
                                                <input type="date" id="dob" name="dob" class="form-control @error('dob') is-invalid @enderror" placeholder="Enter Your Date" value="{{$user->dob}}" required/>
                                                @error('dob')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="gender" class="form-label">Gender:</label>
                                                <select class="form-select form-control form-control-sm @error('gender') is-invalid @enderror" name="gender">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select> 
                                                @error('gender')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">User Verify:</label>
                                                <div class="square-switch">
                                                    <input type="checkbox" id="square-switch3" name="email_verified_at" switch="bool" {{ $user->email_verified_at != null ? 'checked' : '' }} />
                                                    <label for="square-switch3" data-on-label="Yes"
                                                        data-off-label="No"></label>
                                                    @error('email_verified_at')
	                                                    <div class="text-danger">
	                                                        <strong>{{ $message }}</strong>
	                                                    </div>
	                                                @enderror
                                                </div>   
                                            </div>
                                        </div>  
                                    </div> 
                                </div>
                            </div> 
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                        </div>
                    </div>
                    <!-- end card --> 
                    
                    <div class="card border">
                        <div class="card-header"> 
                            <h4 class="card-title mb-0">Change Password</h4> 
                        </div>
                        <div class="card-body">  
                            <div class="row"> 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">New Password:</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="password">
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                        @error('password')
                                            <div class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Confirm Password:</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="password_confirmation">
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                        </div>
                    </div>
                </form>
                <!-- end card -->
            </div> 
        </div>
        <!-- end row -->
    </div>    
</div>
@endsection