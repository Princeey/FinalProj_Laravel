<?php

namespace App\Http\Controllers;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function view(){
    $enrollments = Enrollment::orderBy('id')->get();

        return view('Enrollment.index',['enrollments' => $enrollments]);
    }
    public function create()
    {
        return view ('Enrollment.create');   
    }
   
    public function store(Request $request){
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required',
            'enrollment_date' => 'required',
        ]);
    
        Enrollment::create([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'enrollment_date' => $request->enrollment_date,
        ]);
    
        return redirect('/enrollment')->with('message', 'A new enrollment has been added.');
    }
    
    public function edit(Enrollment $enrollment)
    {
        return view('Enrollment.edit', compact('enrollment')); 
    }
    
    public function update(Enrollment $enrollment, Request $request)
    {
        $request->validate([
            'student_id' => 'integer',
            'course_id' => 'integer',
            'enrollment_date' => 'date'
        ]);
    
        $enrollment->update($request->all());
        return redirect('/enrollment')->with('message', "$enrollment->student_id has been updated successfully");
    }
     
    public function delete(Enrollment $enrollment)
    {
        $enrollment->delete();
    
        return redirect('/enrollment')->with('message', "$enrollment->student_id has been deleted successfully");
    }
}
