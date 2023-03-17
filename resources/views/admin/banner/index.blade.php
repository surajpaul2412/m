@extends('layouts.backend.app')

@section('title')
<title>Banners | Admin</title>
@endsection

@section('css')
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Banner</h4>

                    <div class="page-title-right">
                        <!-- <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">All Banner</li>
                        </ol> -->
                        <a href="{{route('admin.banner.create')}}" class="btn btn-primary waves-effect waves-light"><i class="fas fa-plus"></i> Add New Banner</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card border"> 
                    <div class="card-body"> 

                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="col-1">#</th> 
                                    <th>Banner Name</th>  
                                    <th class="col-1">Published</th>
                                    <th class="col-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($banners->count())
                                @foreach($banners as $index => $banner)
                                <tr> 
                                    <td>#{{$index+1}}</td>
                                    <td class="text-wrap">{{$banner->name}}</td> 
                                    <td>
                                        <form method="POST" action="{{ route('admin.banner.toggle', $banner->id) }}">
                                            @csrf
                                            <button type="submit" class="square-switch btn btn-toggle">
                                                <input type="checkbox" id="square-switch3" switch="status" name="status" {{ $banner->status == 1 ? "checked" : "" }} />
                                                <label for="square-switch3" data-on-label="Yes" data-off-label="No"></label>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">  
                                        <a href="{{ route('admin.banner.edit', $banner->id) }}" class="btn btn-soft-info btn-sm waves-effect waves-light"><i class="bx bx-pencil font-size-16"></i></a>

                                        <form method="POST" class="" action="{{ route('admin.banner.destroy', $banner->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-soft-danger btn-sm waves-effect waves-light show_confirm" data-toggle="tooltip" title='Delete'><i class="bx bx-trash font-size-16"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div> <!-- end col -->

        </div>
    </div>
</div>
@endsection