@extends('layouts.backend.app')

@section('title')
<title>Add Banners | Admin</title>
@endsection

@section('css')
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Banner</h4>

                    <div class="page-title-right"> 
                        <a href="{{route('admin.banners')}}" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
                    </div>

                </div>
            </div>
        </div> 
        <!-- [ breadcrumb ] end -->

        <div class="row">
            <div class="col-xl-12">
                <form class="custom-form" method="post" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row"> 
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header"> 
                                    <h4 class="card-title mb-0">Banner Information</h4> 
                                </div>
                                <div class="card-body">  
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name" class="form-label fw-bold">Banner Name <sup class="text-danger fs-5">*</sup> :</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Banner..."/>
                                                @error('name')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> 

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="url" class="form-label fw-bold">Banner Link <sup class="text-danger fs-5">*</sup> :</label>
                                                <input type="text" id="url" name="url" class="form-control" placeholder="Enter Your Custom Link..."/>
                                                @error('url')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> 

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="description" class="form-label fw-bold">Description:</label> 
                                                <textarea name="description" id="editor1"></textarea>
                                                @error('description')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>   

                                    </div> 
                                </div>
                                <!-- <div class="card-footer"></div> -->
                            </div>
                            <!-- end card -->
                        </div> 
                        
                        <div class="col-lg-4">
                            <!-- [ Advance Configuration ] Start -->
                            <div class="card">
                                <div class="card-header"> 
                                    <h4 class="card-title mb-0">Advance Configuration</h4> 
                                </div>
                                <div class="card-body">  
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group d-flex justify-content-between align-items-center">
                                                <label for="name" class="form-label fw-bold">Published <sup class="text-danger fs-5">*</sup> :</label>
                                                <div class="square-switch">
                                                    <input type="checkbox" id="square-switch1" switch="status" name="status" checked/>
                                                    <label for="square-switch1" data-on-label="Yes"
                                                        data-off-label="No"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <!-- <div class="card-footer"></div> -->
                            </div> 

                            <div class="card">
                                <div class="card-header"> 
                                    <h4 class="card-title mb-0">Banner Banner</h4> 
                                </div>
                                <div class="card-body">  
                                    <div class="row"> 
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label fw-bold">Desktop Banner:</label>
                                                <input type="file" id="input-file-now" name="desktop" class="dropify" />
                                                <small class="text-muted"><b>Eg::</b> image size - 1920x550. </small>
                                                @error('desktop')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>  
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label fw-bold">Mobile Banner:</label>
                                                <input type="file" id="input-file-now" name="mobile" class="dropify" />
                                                <small class="text-muted"><b>Eg::</b> image size - 800x800. </small>
                                                @error('mobile')
                                                    <div class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>    
                                    </div> 
                                </div>
                            </div>
                            <!-- end card -->
                        </div> 

                        <div class="col-lg-12">
                            <div class="card action-btn text-end">
                                <div class="card-body p-2">
                                    <button type="reset" class="btn btn-warning waves-effect waves-light">Clear</button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </form>
            </div> <!-- end col --> 
        </div> <!-- end row -->
    </div>
</div>
@endsection