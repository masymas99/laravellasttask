<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TrackController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';


Route::resource('students', StudentController::class);


Route::resource('tracks', TrackController::class);
Route::resource('courses', CourseController::class);
