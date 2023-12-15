<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
     public function view()
    {
        $grade = Grade::orderBy('id')->get();

        return view('Grade.index',['grades' => $grade]);
    }
    public function create()
    {
        return view ('Grade.create');   
    }

    public function store(Request $request)
    {
        $request->validate([
            'enrollment_id' => 'required',
            'grade' => 'required',
            'exam_date' => 'required'
        ]);
    
        $grade = Grade::create([
            'enrollment_id' => $request->enrollment_id,
            'grade' => $request->grade,
            'exam_date' => $request->exam_date
        ]);
    
        return redirect('/grade')->with('message', 'A new Grade has been added')->with('newGrade', $grade);
    }
    public function edit(Grade $grade)
    {
        return view('Grade.edit', compact('grade')); 
    }
    
    public function update(Grade $grade, Request $request)
    {
        $request->validate([
            'enrollment_id' => 'string',
            'grade' => 'string',
            'exam_date' => 'date'
        ]);
    
        $grade->update($request->all());
        return redirect('/grade')->with('message', "$grade->enrollment_id has been updated successfully");
    }
    
    public function delete(Grade $grade)
    {
        $grade->delete();
    
        return redirect('/grade')->with('message', "$grade->enrollment_id has been deleted successfully");
    }
}
