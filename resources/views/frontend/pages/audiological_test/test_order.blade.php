@extends('frontend.layout.app')
@section('title','Buy Now')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Buy Now</h1>
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

                    <div class="border shadow p-5">
                        <nav class="p-3 mb-2 border border-dark">
                            <ul>
                                <li>আপনার কোর্স টি নির্বাচন করুন।</li>
                                <li>আপনি এটি কেনার জন্য কোন মেথড এ পেমেন্ট করবেন সেটি নির্বাচন করুন। </li>
                                <li>বিকাশ , রকেট বা নগদ এ পেমেন্ট করুন। </li>
                                <li> বিকাশঃ ০১৭******** , রকেটঃ ০১৮******** , নগদঃ ০১৭******** </li>
                                <div class="alert alert-danger">
                                    <li>প্রথমে একটি পেমেন্ট মেথড সিলেক্ট করুন এমন সবার আগে পেমেন্ট কনফরম করুন। আপনার Trangaction Id টি অবশ্য ইনপুট দিন।</li>
                                </div>
                            </ul>
                        </nav>


                        <form class="border border-dark p-3" action="{{ route('test-order') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Traning Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="" readonly value="{{ $test->title }}" class="form-control @error('title') is-invalid @enderror">
                                    <input type="hidden" name="test_id" readonly value="{{ $test->id }}" class="form-control @error('tranings_id') is-invalid @enderror">
                                    <input type="hidden" name="user_id" readonly value="{{ $user->id }}" class="form-control @error('tranings_id') is-invalid @enderror">
                                    @error('test_id')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Test Price</label>
                                <div class="col-sm-10">
                                    <input type="number" value="{{$test->price}}" readonly class="form-control @error('price') is-invalid @enderror">
                                    @error('price')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pay <small>(Tk)</small> <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" name="pay_balance" required value="{{ old('pay_balance') }}" class="form-control @error('pay_balence') is-invalid @enderror" placeholder="Pay Balance">
                                    @error('pay_balance')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Payment Method <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select required class="form-control" name="payment_method" id="">
                                        <option value="bkash"><span class="text-info">bKash</span></option>
                                        <option value="rocket"><span class="text-info">Rocket</span></option>
                                        <option value="nagod"><span class="text-info">Nagod</span></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sended Number <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" name="sended_number" required value="{{ old('sended_number') }}" class="form-control @error('sended_number') is-invalid @enderror" placeholder="Sended Number">
                                    @error('sended_number')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Transaction Id <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="transaction_id" required value="{{ old('transaction_id') }}" class="form-control @error('transaction_id') is-invalid @enderror" placeholder="Transaction Id">
                                    @error('transaction_id')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea name="message" class="form-control" id="message" rows="4">{{  old('message') }}</textarea>
                                    @error('message')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
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
    <!-- Testimonial End -->

@endsection
