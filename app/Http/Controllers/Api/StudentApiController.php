<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id')->get();

        return response()->json(['students' => $students]);
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

        return response()->json(['message' => 'Student has been added', 'student' => $student], 201);
    }

    public function show(Student $student)
    {
        return response()->json(['student' => $student]);
    }

    public function update(Student $student, Request $request)
    {
        $request->validate([
            'student_name' => 'string',
            'student_address' => 'string',
            'student_email' => 'email'
        ]);

        $student->update($request->all());
        return response()->json(['message' => "$student->student_name has been updated successfully"]);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json(['message' => "$student->student_name has been deleted successfully"]);
    }
}
