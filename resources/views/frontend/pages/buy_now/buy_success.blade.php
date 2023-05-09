@extends('frontend.layout.app')
@section('title','Buy Now')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body text-center">
                            <h3>Your Traning Order Successfully.. Your Order id is <span class="text-info">{{ $order->order_id }}</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
