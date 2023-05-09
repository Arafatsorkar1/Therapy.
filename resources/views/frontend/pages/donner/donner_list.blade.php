@extends('frontend.layout.app')
@section('title','Donner List')
@section('content')

    <!-- Page Header Start -->
    <div class="py-3 container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Donner List</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home') }}">Home</a></h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container py-২">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="bg-dark text-white text-uppercase">
                                        <th>#SL</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $donners = \App\Models\Donner::where('status',1)->paginate(20);
                                    @endphp
                                    @foreach($donners as $donner)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $donner->name ?? '' }}</td>
                                            <td>{{ $donner->phone ?? '' }}</td>
                                            <td>{{ $donner->donate_date ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if($donners->links())
                            <div class="card-footer">
                                {!! $donners->links() !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
