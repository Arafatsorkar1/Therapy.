@extends('backend.admin.layout.app')
@section('title','All Traning')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Traning</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <h4 class="card-title d-inline">All Traning <span class="badge badge-pill badge-info">{{ $tranings->count() }}</span></h4>
                                <a href="{{ route('admin.traning.create') }}" class="btn btn-success shadow float-right text-white">Add Traning</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Category name</th>
                                        <th>Traning Title</th>
                                        <th>Price</th>
                                        <th>View</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tranings as $key => $traning)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>`
                                            <td>{{optional($traning->traningCategory)->name}}</td>
                                            <td>
                                                <img src="{{ asset($traning->image) }}" class=" rounded-circle mr-3" style="width: 30px;height: 30px;" alt="">
                                                {{ optional($traning)->title }}
                                            </td>

                                            <td>{{ optional($traning)->price }}</td>
                                            <td>{{ optional($traning)->view_count }}</td>
                                            <td>
                                                @if(optional($traning)->status == 1)
                                                    <a href="">
                                                        <span class="badge badge-success text-white badge-pill">Published</span>
                                                    </a>
                                                @else
                                                    <a href="">
                                                        <span class="badge badge-danger text-white badge-pill">Unpublished</span>
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.traning.edit',$traning->id)}}" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$traning->id}})">Delete</a>
                                                <form id="deleteForm{{$traning->id}}" action="{{ route('admin.traning.destroy',$traning->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Category name</th>
                                        <th>Traning Title</th>
                                        <th>Price</th>
                                        <th>View</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
