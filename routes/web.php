<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\enrollmentsController;


Route::get('/students', [studentsController::class, 'index']);
Route::get('/courses', [coursesController::class, 'index']);
Route::get('/enrollments', [enrollmentsController::class, 'index']);