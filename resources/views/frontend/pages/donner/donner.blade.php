@extends('frontend.layout.app')
@section('title','Donner List')
@section('content')

    <!-- Page Header Start -->
    <div class="py-3 container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Donner</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home') }}">Home</a></h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Testimonial Start -->
    <div class="container-fluid mt-3">
        <div class="container py-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border border-dark">
                        <div class="card-body">
                            {!! get_setting('donner_content') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
