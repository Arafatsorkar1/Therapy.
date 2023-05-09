@extends('backend.admin.layout.app')
@section('title','Subscribers')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Subscribers</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Subscribers- ({{ $subscribers->count() }})</h4>
{{--                            <a href="{{ route('admin.question.create') }}" class="btn btn-primary btn-sm text-white float-right">Add Question</a>--}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Email</th>
                                        <th>Subscribe At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subscribers as $key => $subscriber)
                                        <tr>
                                            <td>#{{ $loop->iteration }}</td>
                                            <td>{{ optional($subscriber)->email }}</td>
                                            <td>{{ optional($subscriber)->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="" class="btn btn-danger btn-sm text-white">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#SL</th>
                                            <th>Email</th>
                                            <th>Subscribe At</th>
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
