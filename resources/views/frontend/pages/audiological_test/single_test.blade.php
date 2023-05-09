@extends('frontend.layout.app')
@section('title',$test->title)
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Audiological Test</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home') }}">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Audiological Test</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card h-100">
                        <img class="img-fluid" style="height: 250px;width: 100%;object-fit: cover;" src="{{ asset($test->image ?? 'images/default.jpg') }}" alt="">
                        <div class="card-body">
                            <h3><a href="Javascript:void(0);" class="text-dark">{{ $test->title ?? ''}}</a></h3>
                            <small>Created By : <b>{{ $test->user->name }}</b> At : {{ $test->created_at->diffForHumans() ?? '' }}</small>
                            <a href="Javascript:void(0);"><p class="font-weight-bold"> Price : {{ $test->price ?? 0 }}</p></a>
                            <p>{!! $test->description ?? '' !!}</p>
                            @auth
                                <a href="{{ route('order-test',$test->slug) }}" class="btn btn-success">Order The Test...</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-success">Login First For Order...</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @foreach($latest_test as $test)
                        <a href="{{ route('single-test',$test->slug) }}" class="row">
                            <div class="col-md-12">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="" style="height: 100px;overflow: hidden;">
                                                <img src="{{ $test->image ? asset($test->image) : asset('images/default.jpg') }}" class="fit-image img-fluid rounded-start" alt="{{ $test->slug ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-title font-weight-bold">{{ Str::limit($test->title,20) ?? ''}}</p>
                                                <p class="card-text"><small class="text-body-secondary">Created At {{ $test->created_at->diffForHumans() ?? '' }}</small></p>
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
    </section>
    <!-- Contact End -->
@endsection
