@extends('frontend.layout.app')
@section('title','Free Service')
@section('content')

    <!-- Page Header Start -->
    <div class="py-3 container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Free Service</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home') }}">Home</a></h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Testimonial Start -->
    <div class="section">
        <div class="container-fluid">
            <form action="{{ route('free-service.store') }}" method="post" enctype="multipart/form-data" class="row">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h1 class="font-weight-bold text-uppercase">{{ get_setting('institute_name') }}</h1>
                                <h4 class="text-capitalize">{{ get_setting('institute_slogan') }}</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="" style="width: 150px;height: 150px;overflow: hidden;">
                                        <img style="width: 100%;height: 100%;object-fit: contain;" src="{{ get_setting('website_logo') ? asset(get_setting('website_logo')) : asset('images/default.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mt-3 display-4 bg-warning p-2 text-center font-weight-bold">Admission Form</h1>
                                </div>
                                <div class="col-md-3">
                                    <div class="" style="width: 171px;height: 208px;overflow: hidden;box-shadow: 0 0 3px 1px;border: 1px solid #e9e9e9;">
                                        <img src="{{ $user->image ? asset($user->image) : asset('/images/default.jpg') }}" style="width: 100%;height: 100%;object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <span class="mx-2 d-inline-block p-2 bg-info rounded-md font-weight-bold text-white mb-3">Client Id : {{$c_unique_id}}</span>
                                    <h5>Branch Name : {{ get_setting('branch_name') }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border border-dark">
                                        <div class="card-header">
                                            <h5>A.Personal Profile : </h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Client's : </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" value="" name="client" class="form-control @error('client') is-invalid @enderror">
                                                                <input type="hidden" value="{{$c_unique_id}}" name="c_unique_id" class="form-control @error('client') is-invalid @enderror">
                                                                <input type="hidden" value="{{$user->id}}" name="users_id" class="form-control @error('client') is-invalid @enderror">
                                                                @error('client')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Admission Date : </label>
                                                            <div class="col-sm-9">
                                                                <input type="date" value="" name="admission_date" class="form-control @error('admission_date') is-invalid @enderror">
                                                                @error('admission_date')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Contract No : </label>
                                                            <div class="col-sm-9">
                                                                <input type="number" value="" name="contract_no" class="form-control @error('contract_no') is-invalid @enderror">
                                                                @error('contract_no')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Profesion : </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" value="" name="profesion" class="form-control @error('Profesion') is-invalid @enderror">
                                                                @error('Profesion')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Gender : </label>
                                                            <div class="col-sm-9">
                                                                <select name="gender" id="" class="form-control">
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                                @error('profession')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Blood Group : </label>
                                                            <div class="col-sm-9">
                                                                <select name="blood_group" id="" class="form-control">
                                                                    <option value="a_positive">A RhD positive (A+)</option>
                                                                    <option value="a_negative">A RhD negative (A-)</option>
                                                                    <option value="b_positive">B RhD positive (B+)</option>
                                                                    <option value="b_negative">B RhD negative (B-)</option>
                                                                    <option value="o_positive">O RhD positive (O+)</option>
                                                                    <option value="o_negative">O RhD negative (O-)</option>
                                                                    <option value="ab_positive">AB RhD positive (AB+)</option>
                                                                    <option value="ab_negative">AB RhD negative (AB-)</option>
                                                                </select>
                                                                @error('blood_group')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Father's / Husband's Name :  </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" value="" name="father_name" class="form-control @error('father_name') is-invalid @enderror">
                                                                @error('father_name')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Contract No :  </label>
                                                            <div class="col-sm-9">
                                                                <input type="number" value="" name="father_contract" class="form-control @error('father_contract') is-invalid @enderror">
                                                                @error('father_contract')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Mother's Name :  </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" value="" name="mother_name" class="form-control @error('mother_name') is-invalid @enderror">
                                                                @error('mother_name')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Contract No :  </label>
                                                            <div class="col-sm-9">
                                                                <input type="number" value="" name="mother_contract" class="form-control @error('mother_contract') is-invalid @enderror">
                                                                @error('mother_contract')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Guardian Name :  </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" value="" name="guardian_name" class="form-control @error('guardian_name') is-invalid @enderror">
                                                                @error('guardian_name')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Contract No :  </label>
                                                            <div class="col-sm-9">
                                                                <input type="number" value="" name="guardian_contract" class="form-control @error('guardian_contract') is-invalid @enderror">
                                                                @error('guardian_contract')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Address & Cont. No :  </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" value="" name="address_cont_no" class="form-control @error('guardian_name') is-invalid @enderror">
                                                                @error('guardian_name')
                                                                <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>B. Diagnosis : </h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="b_diagnosis" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>C. Type Of Disability : </h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <input name="c_type_of_disability" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>D. Major Complain : </h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <input name="d_major_complain" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5>E. Major Complain : </h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <input name="e_major_complain" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">1.General History/When did condition started: </label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="" name="general_history" class="form-control @error('general_history') is-invalid @enderror">
                                                    @error('general_history')
                                                    <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">2.Family History : </label>
                                                <div class="col-sm-9">
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <th>Is there any other disabled person ? </th>
                                                            <td>
                                                                <select name="family_history" id="" class="form-control">
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Home environment: </th>
                                                            <td>
                                                                <input type="text" name="home_environment" class="form-control">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>1st Cousin Marriage : </th>
                                                            <td>
                                                                <select name="1st_cousin_marriage" id="" class="form-control">
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Educational Qualification of parents : </th>
                                                            <td>
                                                                <select name="educational_qualification_of_parents" id="" class="form-control">
                                                                    <option value="yes">F-</option>
                                                                    <option value="no">M-</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>No . of Children : </th>
                                                            <td>
                                                                <input type="text" name="no_children" class="form-control">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">3.Mother health condition during pregnancy / or any other complication at present : </label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="" name="mother_health_condition" class="form-control @error('general_history') is-invalid @enderror">
                                                    @error('general_history')
                                                    <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">4.Immunization up-to-date mother: </label>
                                                <div class="col-sm-9">
                                                    <select name="immunization_mother" id="" class="form-control">
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                    @error('general_history')
                                                    <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">5.Immunization up-to-date child : </label>
                                                <div class="col-sm-9">
                                                    <select name="immunization_up_to_date_child" id="" class="form-control">
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                    @error('general_history')
                                                    <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">6.Previous Treatment History : </label>
                                                <div class="col-md-9">
                                                <input type="text" class="form-control" name="previous_treatment_history">
                                                    @error('previous_treatment_history')
                                                    <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button class="float-right btn btn-dark">Submit Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
