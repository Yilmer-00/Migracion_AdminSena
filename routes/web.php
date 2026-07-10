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
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');

// Areas
Route::get('/areas', [AreaController::class, 'index'])->name('area.index');
Route::get('/area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

// Training Centers
Route::get('/trainig-center/create', [TrainigCenterController::class, 'create'])->name('trainig-center.create');
Route::post('/trainig-center/store', [TrainigCenterController::class, 'store'])->name('trainig-center.store');

// Computers
Route::get('/computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('/computer/store', [ComputerController::class, 'store'])->name('computer.store');

// Teachers
Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher/store', [TeacherController::class, 'store'])->name('teacher.store');

// Courses

Route::get('course/registro', [CourseController::class, 'registro'])->name('course.registro');
Route::post('course/admin', [CourseController::class, 'dato'])->name('course.admin');
Route::get('/course', [CourseController::class, 'index'])->name('course.index');

// Course-Teacher Assignments
Route::get('course_teacher/registro', [CourseTeacherController::class, 'registro'])->name('course_teacher.registro');
Route::post('course_teacher/admin', [CourseTeacherController::class, 'dato'])->name('course_teacher.admin');

// Apprentices
Route::get('/apprentice', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('/apprentice/create', [ApprenticeController::class, 'registro'])->name('apprentice.registro');

Route::post('/apprentice/store', [ApprenticeController::class, 'dato'])->name('apprentice.store');

