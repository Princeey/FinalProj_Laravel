<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function view(){
    $courses = Course::orderBy('id')->get();

        return view('Course.index',['courses' => $courses]);
    }

    public function create()
    {
        return view ('Course.create');   
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
    
        return redirect('/course')->with('message', 'Course has been added')->with('newCourse', $course);
    }
    
    public function edit(Course $course)
    {
        return view('Course.edit', compact('course')); // Changed 'courses' to 'course'
    }
    
    public function update(Course $course, Request $request)
    {
        $request->validate([
            'course_name' => 'string',
            'course_description' => 'string',
            'course_credit' => 'integer'
        ]);
    
        $course->update($request->all());
        return redirect('/course')->with('message', "$course->course_name has been updated successfully");
    }
    
    public function delete(Course $course)
    {
        $course->delete();
    
        return redirect('/course')->with('message', "$course->course_name has been deleted successfully");
    }
    

}
