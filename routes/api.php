<?php

use App\Http\Controllers\Api\StudentApiController;
use App\Http\Controllers\Api\CourseApiController;
use App\Http\Controllers\Api\EnrollmentApiController;
use App\Http\Controllers\Api\GradeApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Student
Route::get('/students', [StudentApiController::class, 'index']);
Route::post('/students', [StudentApiController::class, 'store']);
Route::get('/students/{student}', [StudentApiController::class, 'show']);
Route::put('/students/{student}', [StudentApiController::class, 'update']);
Route::delete('/students/{student}', [StudentApiController::class, 'destroy']);

//Course
Route::get('/courses', [CourseApiController::class, 'index']);
Route::post('/courses', [CourseApiController::class, 'store']);
Route::get('/courses/{course}', [CourseApiController::class, 'show']);
Route::put('/courses/{course}', [CourseApiController::class, 'update']);
Route::delete('/courses/{course}', [CourseApiController::class, 'destroy']);

//Enrollments
Route::get('/enrollments', [EnrollmentApiController::class, 'index']);
Route::post('/enrollments', [EnrollmentApiController::class, 'store']);
Route::get('/enrollments/{enrollment}', [EnrollmentApiController::class, 'show']);
Route::put('/enrollments/{enrollment}', [EnrollmentApiController::class, 'update']);
Route::delete('/enrollments/{enrollment}', [EnrollmentApiController::class, 'destroy']);

//Grade
Route::get('/grades', [GradeApiController::class, 'index']);
Route::post('/grades', [GradeApiController::class, 'store']);
Route::get('/grades/{grade}', [GradeApiController::class, 'show']);
Route::put('/grades/{grade}', [GradeApiController::class, 'update']);
Route::delete('/grades/{grade}', [GradeApiController::class, 'destroy']);





