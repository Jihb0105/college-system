<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <main>
                    <div class="container pt-6">
                        @if ($message = session('success'))
                            <div class="alert alert-success">{{ $message }}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-title" style="background-color: #808080">
                                        <div class="d-flex align-items-center">
                                            <h2 class="ms-2 fs-3"><b>Manage Students</b></h2>
                                            <div class="ml-auto">
                                                <a href="{{ route('students.create') }}"  style="background-color: #FF9C27" class="btn btn-success">Register New User</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body ms-5 me-5">
                                        <div class="d-flex justify-content-end">
                                            <div class="col-md-4">
                                                <form>
                                                    <div class="input-group mb-3 ms-3">
                                                        <input type="text" name="search" value="{{ request()->query('search') }}" id="search-input" class="form-control" placeholder="Search" aria-label="Search..." aria-describedby="button-addon2" style="border-radius: 10px 0 0 10px; border-style: solid hidden solid solid; border-color: grey">
                                                        <div class="input-group-append">
                                                        @if(request()->filled('search'))
                                                            <button id="btn-clear" class="btn btn-outline-secondary" type="button" onclick="document.getElementById('search-input').value = '', this.form.submit()">
                                                            <i class="fa fa-refresh"></i>
                                                            </button>
                                                        @endif
                                                        <button class="btn btn-outline-secondary " type="submit" id="button-addon2" style="border-radius: 0 10px 10px 0; border-style: solid solid solid hidden;">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th width="2%">#</th>
                                                <th width="20%">Name</th>
                                                <th width="20%">Student ID</th>
                                                <th width="0%">Enrollment Date</th>
                                                <th width="35%">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($students as $index=>$student)
                                                    <tr class="text-capitalize">
                                                        <th scope="row">{{ $index+1 }}</th>
                                                        <td>{{ $student->stu_name }}</td>
                                                        <td>{{ $student->stu_id }}</td>
                                                        <td>{{ $student->stu_enrollmentdate }}</td>
                                                        <td class='d-flex '>
                                                            <!-- <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a> -->
                                                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary me-1" style="background-color: #32de84; border: 1px solid #32de84; color: white;" title="Edit">Update Student</a>
                                                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" >
                                                                @csrf
                                                                @method('DELETE')
                                                                    <button type="submit" class="btn btn-primary" style="background-color: transparent; border: 1px solid #DC3545; color: #DC3545;">Delete Student</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table> 

                                        <div class="d-flex justify-content-center">
                                            {{ $students->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
