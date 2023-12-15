<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/student', [StudentController::class,'view'])->name('student');
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/create', [StudentController::class, 'store']);
Route::get('/student/{student}', [StudentController::class, 'edit'])->name('student');
Route::post('/student/{student}', [StudentController::class, 'update'])->name('student');
Route::delete('/student/delete/{student}', [StudentController::class, 'delete']);

Route::get('/course', [CourseController::class,'view'])->name('course');
Route::get('/course/create', [CourseController::class, 'create']);
Route::post('/course/create', [CourseController::class, 'store']);
Route::get('/course/{course}', [CourseController::class, 'edit'])->name('course');
Route::post('/course/{course}', [CourseController::class, 'update'])->name('course');
Route::delete('/course/delete/{course}', [CourseController::class, 'delete']);

Route::get('/enrollment', [EnrollmentController::class,'view'])->name('enrollment');
Route::get('/enrollment/create', [EnrollmentController::class, 'create']);
Route::post('/enrollment/create', [EnrollmentController::class, 'store']);
Route::get('/enrollment/{enrollment}', [EnrollmentController::class, 'edit'])->name('enrollment');
Route::post('/enrollment/{enrollment}', [EnrollmentController::class, 'update'])->name('enrollment');
Route::delete('/enrollment/delete/{enrollment}', [EnrollmentController::class, 'delete']);

Route::get('/grade', [GradeController::class,'view'])->name('grade');
Route::get('/grade/create', [GradeController::class, 'create']);
Route::post('/grade/create', [GradeController::class, 'store']);
Route::get('/grade/{grade}', [GradeController::class, 'edit'])->name('grade');
Route::post('/grade/{grade}', [GradeController::class, 'update'])->name('grade');
Route::delete('/grade/delete/{grade}', [GradeController::class, 'delete']);
