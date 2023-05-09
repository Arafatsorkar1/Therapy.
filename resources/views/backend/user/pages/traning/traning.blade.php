@extends('backend.user.layouts.app')
@section('userContent')
    <div class="col-md-9">
        <div class="card rounded-0 border">
            <div class="card-body">
                <table style="width: 100%;" class="table table-striped">
                    <tr>
                        <th>#SL</th>
                        <th>Order Id</th>
                        <th>Traning Title</th>
                        <th>Traning Price</th>
                        <th>Pay</th>
                        <th>Status</th>
                    </tr>
                    @foreach(auth()->user()->traningOrders as $order )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->order_id }}</td>
                            <td>{{ $order->traning->title }}</td>
                            <td>{{ $order->traning->price }}</td>
                            <td>{{ $order->pay_balance }}</td>
                            <td>
                                @if(optional($order)->status == 1)
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
{{--@forelse(auth()->user()->traningOrders as $order)--}}
{{--    <tr>--}}
{{--        <td>#{{ $loop->iteration }}</td>--}}
{{--    </tr>--}}
{{--    @empty--}}
{{--    @include('backend.user.includes.not_found')--}}
{{--    @endforelse--}}
{{--    </tbody>--}}
