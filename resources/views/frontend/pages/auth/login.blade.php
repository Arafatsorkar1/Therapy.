@extends('frontend.layout.app')
@section('title','Contract')
@section('content')
    <!-- Page Header Start -->
    <div class="py-4 container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Login</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home') }}">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Login</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto shadow border">
                    <form action="{{ route('login') }}" method="post" class="card border-0 rounded-0">
                        @csrf
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="" class="col-md-2">Phone Number</label>
                                <div class="col-md-10">
                                    <input type="number" value="{{ old('phone') }}" name="phone" class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-2">Password</label>
                                <div class="col-md-10">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-2"></label>
                                <div class="col-md-10">
                                    <input type="submit" value="Login" class="btn btn-dark">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-2"></label>
                                <div class="col-md-10">
                                    <a href="{{ route('register') }}">If you don't have any account the register now</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
