<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeApiController extends Controller
{
    public function index()
    {
        $grades = Grade::orderBy('id')->get();

        return response()->json(['grades' => $grades]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'enrollment_id' => 'required',
            'grade' => 'required',
            'exam_date' => 'required|date'
        ]);

        $grade = Grade::create([
            'enrollment_id' => $request->enrollment_id,
            'grade' => $request->grade,
            'exam_date' => $request->exam_date
        ]);

        return response()->json(['message' => 'A new Grade has been added', 'grade' => $grade], 201);
    }

    public function show(Grade $grade)
    {
        return response()->json(['grade' => $grade]);
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'enrollment_id' => 'string',
            'grade' => 'string',
            'exam_date' => 'date'
        ]);

        $grade->update($request->all());
        return response()->json(['message' => "$grade->enrollment_id has been updated successfully"]);
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();

        return response()->json(['message' => "$grade->enrollment_id has been deleted successfully"]);
    }
}
