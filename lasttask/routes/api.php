<?php

use App\Http\Controllers\Api\StudentController as ApiStudentController;
use App\Http\Controllers\Api\TrackController as ApiTrackController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('tracks', ApiTrackController::class);
Route::apiResource('students', ApiStudentController::class);
