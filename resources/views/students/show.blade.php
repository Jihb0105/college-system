@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-title" style="background-color: #808080;">
                    <h3 class="fw-bold mb-0 ms-4 fs-3">ID Type Detail</h3>
                </div>           
            <div class="card-body">
                <div class="row ms-3 me-3">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="stu_name" class="col-md-3 col-form-label fw-bold">Name</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted text-capitalize">{{ $student->stu_name }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stu_id" class="col-md-3 col-form-label fw-bold">Student ID</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted text-capitalize">{{ $student->stu_id }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stu_primaryid" class="col-md-3 col-form-label fw-bold">Identity Card</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted text-capitalize">{{ $student->stu_primaryid }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stu_primaryidtype" class="col-md-3 col-form-label fw-bold">Identity Card Type</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted text-capitalize">{{ $student->stu_primaryidtype }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stu_gender" class="col-md-3 col-form-label fw-bold">Gender</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted text-capitalize">{{ $student->stu_gender }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stu_email" class="col-md-3 col-form-label fw-bold">Email Address</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted text-capitalize">{{ $student->stu_email }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stu_phonenum" class="col-md-3 col-form-label fw-bold">Contact Information</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted text-capitalize">{{ $student->stu_phonenum }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stu_enrollmentdate" class="col-md-3 col-form-label fw-bold">Enrollment Date</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted text-capitalize">{{ $student->stu_enrollmentdate }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stu_address" class="col-md-3 col-form-label fw-bold">Address</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext text-muted text-capitalize">{{ $student->stu_address }}</p>
                            </div>
                        </div>
                        
                        <hr style="background-color: black">

                        <div class="form-group row mb-0 mt-3">
                            <div class=" d-flex justify-content-center">
                                <a href="{{ route('students.edit', $student->id) }}">
                                    <button type="submit" class="btn btn-primary me-3" style="background-color: #009DA6; border-color:#009DA6">Edit</button>
                                </a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-primary me-3" style="background-color: transparent; border: 1px solid #DC3545; color: #DC3545;">Delete</button>
                                </form>
                                <a href="{{route('dashboard')}}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div> 
@endsection