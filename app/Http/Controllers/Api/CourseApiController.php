<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseApiController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id')->get();

        return response()->json(['courses' => $courses]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_description' => 'required',
            'course_credit' => 'required'
        ]);

        $course = Course::create([
            'course_name' => $request->course_name,
            'course_description' => $request->course_description,
            'course_credit' => $request->course_credit
        ]);

        return response()->json(['message' => 'Course has been added', 'course' => $course], 201);
    }

    public function show(Course $course)
    {
        return response()->json(['course' => $course]);
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_name' => 'string',
            'course_description' => 'string',
            'course_credit' => 'integer'
        ]);

        $course->update($request->all());
        return response()->json(['message' => "$course->course_name has been updated successfully"]);
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return response()->json(['message' => "$course->course_name has been deleted successfully"]);
    }
}
