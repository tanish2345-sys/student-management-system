<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\FeeController;


Route::get('/', function(){ return redirect()->route('students.index'); });


Route::resource('students', StudentController::class);
Route::resource('attendances', AttendanceController::class)->except(['show']);
Route::resource('marks', MarkController::class)->except(['show']);
Route::resource('fees', FeeController::class)->except(['show']);