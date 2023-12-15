<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function view()
    {
        $student = Student::orderBy('id')->get();

        return view('Student.index',['students' => $student]);
    }
    public function create()
    {
        return view ('Student.create');   
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required',
            'student_address' => 'required',
            'student_email' => 'required|email'
        ]);
    
        $student = Student::create([
            'student_name' => $request->student_name,
            'student_address' => $request->student_address,
            'student_email' => $request->student_email
        ]);
    
        return redirect('/student')->with('message', 'Student has been added')->with('newStudent', $student);
    }
    
    
    public function edit(Student $student)
    {
        return view('Student.edit', compact('student'));
    }
    public function update(Student $student, Request $request)
    {
        $request->validate([
            'student_name' => 'string',
            'student_address' => 'string',
            'student_email' => 'email'
        ]);

        $student->update($request->all());
        return redirect('/student')->with('message', "$student->student_name has been updated successfully" );
    }    
    public function delete(Student $student)
    {
        $student->delete();

        return redirect('/student')->with('message', "$student->student_name has been deleted successfully");
    }


}
