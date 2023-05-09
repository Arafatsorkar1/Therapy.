@extends('backend.user.layouts.app')
@section('userContent')
    <div class="col-md-9">
        <div class="card rounded-0 border">
            <div class="card-body">
                <table style="width: 100%;" class="table table-striped">
                    <tr>single
                        <th>#SL</th>
                        <th>Assessment Title</th>
                        <th>Total Mark</th>
                        <th>Status</th>
                    </tr>
                    @foreach(auth()->user()->assessmentOrders as $assessment )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $assessment->category->name }}</td>
                            <td>
                                @if(optional($assessment)->status == 1)
                                    {{ $assessment->total_mark }}
                                @else
                                    <small>আপনি টাকা না পেমেন্ট করার কারনে প্রাপ্ত নাম্বার টি দেখতে পাচ্ছেন না</small>
                                @endif
                            </td>
                            <td>
                                @if(optional($assessment)->status == 1)
                                    <a href="">
                                        <span class="badge badge-success text-white badge-pill">Success</span>
                                    </a>
                                @else
                                    <a href="">
                                        <span class="badge badge-danger text-white badge-pill">Pending</span>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
