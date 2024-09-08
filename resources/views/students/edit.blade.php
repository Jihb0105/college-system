@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-title" style="background-color: #808080">
                    <h3 class="fw-bold mb-0 ms-4 fs-3">Edit Detail</h3>
                </div>           
                <div class="card-body">
                    <div class="row ms-3 me-3">
                        <div class="col-md-12">
                            <form action="{{ route('students.update', $student->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label for="stu_name" class="col-md-3 col-form-label fw-bold">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="stu_name" id="stu_name" class="text-capitalize form-control @error('stu_name') is-invalid @enderror" value="{{ $student->stu_name }}">
                                        @error('stu_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="stu_id" class="col-md-3 col-form-label fw-bold">Student ID</label>
                                    <div class="col-md-9">
                                        <input type="text" name="stu_id" id="stu_id" rows="5" class=" text-capitalize form-control @error('stu_id') is-invalid @enderror" value='{{ $student->stu_id }}'>
                                        @error('stu_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="stu_primaryid" class="col-md-3 col-form-label fw-bold">Identity Card</label>
                                    <div class="col-md-9">
                                        <input type="text" name="stu_primaryid" id="stu_primaryid" class="text-capitalize form-control @error('stu_primaryid') is-invalid @enderror" value="{{ $student->stu_primaryid }}">
                                        @error('stu_primaryid')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="stu_primaryidtype" class="col-md-3 col-form-label fw-bold">Identity Type</label>
                                    <div class="col-md-9">
                                    <input type="text" name="stu_primaryidtype" id="stu_primaryidtype" rows="5" class=" text-capitalize form-control @error('stu_primaryidtype') is-invalid @enderror" value='{{ $student->stu_primaryidtype }}'>
                                        @error('stu_primaryidtype')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="stu_gender" class="col-md-3 col-form-label fw-bold">Gender</label>
                                    <div class="col-md-9">
                                        <input type="text" name="stu_gender" id="stu_gender" class="text-capitalize form-control @error('stu_gender') is-invalid @enderror" value="{{ $student->stu_gender }}">
                                        @error('stu_gender')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="stu_email" class="col-md-3 col-form-label fw-bold">Email</label>
                                    <div class="col-md-9">
                                        <input type='text' name="stu_email" id="stu_email" rows="5" class=" text-capitalize form-control @error('stu_email') is-invalid @enderror" value='{{ $student->stu_email }}'>
                                        @error('stu_email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="stu_phonenum" class="col-md-3 col-form-label fw-bold">Contact Information</label>
                                    <div class="col-md-9">
                                        <input type="text" name="stu_phonenum" id="stu_phonenum" class="text-capitalize form-control @error('stu_phonenum') is-invalid @enderror" value="{{ $student->stu_phonenum }}">
                                        @error('stu_phonenum')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="stu_enrollmentdate" class="col-md-3 col-form-label fw-bold">Enrollment Date</label>
                                    <div class="col-md-9">
                                        <input type='date' name="stu_enrollmentdate" id="stu_enrollmentdate" rows="5" class=" text-capitalize form-control @error('stu_enrollmentdate') is-invalid @enderror" value='{{ $student->stu_enrollmentdate }}'>
                                        @error('stu_enrollmentdate')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="stu_address" class="col-md-3 col-form-label fw-bold">Address</label>
                                    <div class="col-md-9">
                                        <textarea name="stu_address" id="stu_address" rows="5" class=" text-capitalize form-control @error('stu_address') is-invalid @enderror">{{ $student->stu_address }}</textarea>
                                        @error('stu_address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <hr style="background-color: black">

                                <div class="form-group row mb-0 mt-3">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary me-3" style="background-color: #009DA6; border-color:#009DA6">Update Student</button>
                                        <a href="{{route('dashboard')}}" class="btn btn-outline-secondary">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection