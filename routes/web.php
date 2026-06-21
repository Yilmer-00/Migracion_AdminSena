<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainigCenterController;
use App\Http\Controllers\ComputerController;

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseTeacherController;
use App\Http\Controllers\ApprenticeController;


//categoory
Route::get('category/create',[CategoryController::class,'create']);
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');

// Areas
Route::get('/area/create', [AreaController::class, 'create']);
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

// Training Centers
Route::get('/trainig-center/create', [TrainigCenterController::class, 'create']);
Route::post('/trainig-center/store', [TrainigCenterController::class, 'store'])->name('trainig-center.store');

// Computers
Route::get('/computer/create', [ComputerController::class, 'create']);
Route::post('/computer/store', [ComputerController::class, 'store'])->name('computer.store');

// Teachers
Route::get('/teacher/create', [TeacherController::class, 'create']);
Route::post('/teacher/store', [TeacherController::class, 'store'])->name('teacher.store');

// Courses
// Fíjate en el segundo parámetro 'registro'
Route::get('course/registro', [CourseController::class, 'registro'])->name('course.registro');
Route::post('course/admin', [CourseController::class, 'dato'])->name('course.admin');

// Course-Teacher Assignments
Route::get('course_teacher/registro', [CourseTeacherController::class, 'registro'])->name('course_teacher.registro');
Route::post('course_teacher/admin', [CourseTeacherController::class, 'dato'])->name('course_teacher.admin');

// Apprentices
Route::get('/apprentice/create', [ApprenticeController::class, 'create']);
Route::post('/apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');