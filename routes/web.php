<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\quiz\quizcontroller;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/q', function () {
//     return view('questninsert');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Attendence
Route::get("/home", [AttendanceController::class, 'index']);
Route::post('/ss', [AttendanceController::class ,'attend']);
Route::get('/myattendance', [AttendanceController::class ,'myattendance']);
Route::get('/requestleave', [AttendanceController::class ,'attendance']);
Route::post('/leave', [AttendanceController::class ,'requestleave']);
Route::get('/myleave', [AttendanceController::class ,'myleave']);
Route::get('/registereduser', [AttendanceController::class ,'registereduser']);


//category 
// Route::get("/testquiz", [quizcontroller::class, 'readque']);
// Route::get("/readque", [quizcontroller::class, 'readque']);


Route::get("/q", [quizcontroller::class, 'que']);
Route::post("/queins", [quizcontroller::class, 'queins']);

Route::get("/studentquiz", [quizcontroller::class, 'studentquiz']);
 Route::post("/que", [quizcontroller::class, 'ques']);
 
//  Route::get('/exam', [studentController::class, 'student_exam']);
//  Route::post('/add_new_question', [studentController::class, 'add_new_question']);

 Route::get('/joinxm', [studentController::class, 'joinxm']);
 Route::post('/submit_que', [studentController::class, 'submit_que']);