@extends('frontend.layout.app')
@section('title',$therapy->title)
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">LANGUAGE THERAPY</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home') }}">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Language Therapy</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card h-100">
                        <img class="img-fluid" style="height: 250px;width: 100%;object-fit: cover;" src="{{$therapy->image? asset($therapy->image):asset('images/default.jpg') }}" alt="{{ $therapy->slug ?? '' }}">
                        <div class="card-body">
                            <h3><a href="Javascript:void(0);" class="text-dark">{{ $test->title ?? ''}}</a></h3>
                            <small>Created By : <b>{{ $therapy->user->name }}</b> At : {{ $therapy->created_at->diffForHumans() ?? '' }}</small>
                            <a href="Javascript:void(0);"><p class="font-weight-bold"> Price : {{ $therapy->price ?? 0 }}</p></a>
                            <p>{!! $therapy->description ?? '' !!}</p>
                            @auth
                                <a href="{{ route('order-therapy',$therapy->slug) }}" class="btn btn-success">Order The Therapy...</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-success">Login First For Order...</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5>All Therapic Category</h5>
                        </div>
                        <div class="card-body">
                            @foreach($categories as $category)
                                <div class="text-center" style="border: 1px solid #e9e9e9; border-radius: 50px; margin-bottom: 8px;">
                                    <a href="{{ route('therapy',$category->slug) }}">{{ $category->name }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Latest 10 Therapy</h5>
                        </div>
                        <div class="card-body">
                            @foreach($latest_therapies as $therapy)
                                <a href="{{ route('single-test',$therapy->slug) }}" class="row">
                                    <div class="col-md-12">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <div class="" style="height: 100px;overflow: hidden;">
                                                        <img src="{{ $therapy->image ? asset($therapy->image) : asset('images/default.jpg') }}" class="fit-image img-fluid rounded-start" alt="{{ $therapy->slug ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-title font-weight-bold">{{ Str::limit($therapy->title,20) ?? ''}}</p>
                                                        <p class="card-text"><small class="text-body-secondary">Created At {{ $therapy->created_at->diffForHumans() ?? '' }}</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
@endsection
