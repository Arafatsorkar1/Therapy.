@extends('backend.admin.layout.app')
@section('title','All Question')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Question</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Questions- ({{ $questions->count() }})</h4>
                            <a href="{{ route('admin.question.create') }}" class="btn btn-primary btn-sm text-white float-right">Add Question</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Q Title</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($questions as $key => $question)
                                            <tr>
                                                <td>#{{ $loop->iteration }}</td>
                                                <td>{{ optional($question)->title }}</td>
                                                <td>{{ optional($question->subCategory->category)->name }}</td>
                                                <td>{{ optional($question->subCategory)->name }}</td>
                                                <td>
                                                    @if(optional($question)->status == 1)
                                                        <span class="badge badge-success text-white badge-pill">Published</span>
                                                    @else
                                                        <span class="badge badge-danger text-white badge-pill">Unpublished</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.question.edit',$question->id) }}" class="btn btn-success btn-sm text-white">Edit</a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType({{$question->id}})">Delete</a>
                                                    <form id="deleteForm{{$question->id}}" action="{{ route('admin.question.destroy',$question->id) }}" method="post">
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
                                        <th>Q Title</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
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
