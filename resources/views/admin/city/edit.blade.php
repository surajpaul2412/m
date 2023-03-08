@extends('layouts.backend.app')

@section('title')
<title>City Edit | {{$city->name}}</title>
@endsection

@section('css')
@endsection

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Page</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="feather icon-home"></i></a></li>  
                            <li class="breadcrumb-item"><a href="{{route('admin.city')}}">Manage City</a></li>
                            <li class="breadcrumb-item"><a href="">Edit City</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-md-right"> 
                        <a href="{{route('admin.city')}}" class="btn btn-success" title="Back to List"><i class="fas fa-reply-all"></i> Back to list</a> 
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->  
        <div class="row"> 
            <div class="col-sm-12">
                <div class="card"> 
                    <form class="custom-form" method="post" action="{{ route('admin.city.update', $city->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="card-header"></div>
                        <div class="card-body">
                            <div class="row">   
                                <div class="col-sm-6">
                                    <div class="form-group fill">  
                                        <label class="control-label">City Name<span>*</span></label>
                                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Enter Name..." name="name" value="{{ $city->name }}" required/>
                                        @error('name')
                                            <div class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group fill">  
                                        <label class="control-label">Country Name<span>*</span></label>
                                        <select class="form-control form-control-sm js-example-basic-single" name="country_id" required>
                                            <option value="">--Select Country--</option>
                                            @foreach($country as $row)
                                            <option value="{{$row->id}}" {{ $row->id == $city->country->id ? 'selected' : '' }}>{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                            <div class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">  
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Display Image:</label>
                                                <input name="avatar" type="file" data-allowed-file-extensions="png jpg gif jpeg" class="dropify" data-max-file-size="2M" data-default-file="{{asset($city->avatar)}}" />
                                                <small class="text-muted"><b>Eg::</b> Upload image size - 800x600.</small>
                                                <input type="hidden" name="hidden_avatar" value="{{ $city->avatar }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Seal:</label>
                                                <select class="form-control" name="seal">
                                                    <option value="0">Ordinary</option>
                                                    <option value="1" {{ $city->seal == 1 ? 'selected' : '' }}>Popular</option>
                                                </select>
                                                @error('seal')
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
                        <div class="card-footer text-right"> 
                            <button type="" class="btn btn-warning">Cancel</button>
                            <button type="submit" class="btn btn-success m-0">Submit</button>
                        </div>  
                        
                    </form>  
                </div>
            </div> 
        </div>  
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection

@section('script')
<script>  
    $(document).ready(function(){ 
        $('.dropify').dropify(); 
    }); 
</script>
@endsection