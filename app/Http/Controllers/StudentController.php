<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all()->paginate(20);

        return view('dashboard', compact($students));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { //dd($request);die;
        $request->validate([
            'stu_name' => 'required',
            'stu_id' => 'required',
            'stu_primaryid' => 'required',
            'stu_primaryidtype' => 'required',
            'stu_gender' => 'required',
            'stu_email' => 'required',
            'stu_phonenum' => 'required',
            'stu_enrollmentdate' => 'required',
            'stu_address' => 'required'
        ]);

        Student::create($request->all());


        return redirect()->route('dashboard')
                        ->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view("students.show", compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view("students.edit", compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect('dashboard')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('dashboard')->with('success', "Student has been deleted successfully");
    }
}
