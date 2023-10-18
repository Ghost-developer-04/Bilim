<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Classroom;
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

Route::get('', [HomeController::class, 'index'])->name('home');

Route::resource('registrations', RegistrationController::class);
Route::resource('lessons', LessonController::class);
Route::resource('students', StudentController::class);
Route::resource('course', CourseController::class);
Route::resource('season', SeasonController::class)
    ->except(['index', 'show']);
Route::resource('session', SessionController::class)
    ->except(['index', 'show']);
Route::resource('location', LocationController::class);
Route::resource('classroom', Classroom::class)
    ->except(['index', 'show']);
Route::resource('teacher', TeacherController::class);