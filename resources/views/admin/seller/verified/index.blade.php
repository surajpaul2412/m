@extends('layouts.backend.app')

@section('title')
<title>Seller | Admin</title>
@endsection

@section('css')
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">        
        <!-- [ breadcrumb ] start -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All sellers</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">All sellers</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div> 
        <!-- [ breadcrumb ] end -->

        <div class="row">
            <div class="col-12">
                <div class="card border"> 
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="col-1">Sr. No.</th>
                                    <th>Name</th>
                                    <th>Email Id</th>
                                    <th>Phone No.</th>
                                    <th>Registerd Date</th> 
                                    <th class="col-1 text-center">User Verify</th> 
                                    <th class="col-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@if($sellers->count())
                                @foreach($sellers as $index => $seller)
                                <tr>
                                    <td>#{{$index+1}}</td>
                                    <td>{{$seller->name}}</td>
                                    <td>{{$seller->email}}</td>
                                    <td>{{$seller->mobile}}</td>
                                    <td>{{$seller->created_at}}</td>
                                    <td class="text-center">
                                        @if($seller->email_verified_at == null)
                                        <a href="{{ route('admin.user.activate', $seller->id) }}" class="btn btn-danger btn-sm waves-effect waves-light"><i class="bx bxs-user-check font-size-18"></i></a>
                                        @else
                                        <a href="{{ route('admin.user.deactivate', $seller->id) }}" class="btn btn-success btn-sm waves-effect waves-light"><i class="bx bxs-user-check font-size-18"></i></a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.verified-seller.edit', $seller->id) }}" class="btn btn-soft-info btn-sm waves-effect waves-light" title="Edit"><i class="bx bx-pencil font-size-16"></i></a>

                                        <form method="POST" class="" action="{{ route('admin.user.destroy', $seller->id) }}">
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
        </div> <!-- end row -->
        
        
    </div>
    <!-- container-fluid -->
</div>
@endsection