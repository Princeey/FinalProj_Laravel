<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentApiController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::orderBy('id')->get();

        return response()->json(['enrollments' => $enrollments]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|integer',
            'course_id' => 'required|integer',
            'enrollment_date' => 'required|date',
        ]);

        Enrollment::create([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'enrollment_date' => $request->enrollment_date,
        ]);

        return response()->json(['message' => 'A new enrollment has been added.'], 201);
    }

    public function show(Enrollment $enrollment)
    {
        return response()->json(['enrollment' => $enrollment]);
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'student_id' => 'integer',
            'course_id' => 'integer',
            'enrollment_date' => 'date'
        ]);

        $enrollment->update($request->all());
        return response()->json(['message' => "$enrollment->student_id has been updated successfully"]);
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();

        return response()->json(['message' => "$enrollment->student_id has been deleted successfully"]);
    }
}
