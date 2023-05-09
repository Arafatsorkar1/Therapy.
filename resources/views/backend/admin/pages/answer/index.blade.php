@extends('backend.admin.layout.app')
@section('title','All Answers')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Answers</a></li>
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
                                <h4 class="card-title d-inline">All Answers <span class="badge badge-pill badge-info">{{ $answers->count() }}</span></h4>
                                <a href="{{ route('admin.answer.create') }}" class="btn btn-primary float-right text-white">Add Answer</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>#SL</th>
                                            <th>Sub Category</th>
                                            <th>Answer Name</th>
                                            <th>Answer mark</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($answers as $key => $answer)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>`
                                            <td>{{ optional($answer->subCategory)->name }}</td>
                                            <td>{{optional($answer)->name}}</td>
                                            <td>{{optional($answer)->mark}}</td>
                                            <td>
                                                @if(optional($answer)->status == 1)
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
                                                <a href="{{route('admin.answer.edit',$answer->id)}}" class="btn btn-success btn-sm text-white">Edit</a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$answer->id}})">Delete</a>
                                                <form id="deleteForm{{$answer->id}}" action="{{ route('admin.answer.destroy',$answer->id) }}" method="post">
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
                                        <th>Sub Category</th>
                                        <th>Answer Name</th>
                                        <th>Answer mark</th>
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
