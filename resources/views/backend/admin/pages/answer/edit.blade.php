@extends('backend.admin.layout.app')
@section('title','Edit answer')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit answer</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Answer Edit</h4>
                            <div class="basic-form">
                                <form action="{{ route('admin.answer.update',$answer->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Answer Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value="{{ $answer->name ?? old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Answer name">
                                            @error('name')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Answer Mark</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="mark" value="{{$answer->mark ?? old('mark') }}" class="form-control @error('mark') is-invalid @enderror" placeholder="Answer mark">
                                            @error('mark')
                                            <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-dark">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
