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

//Areas
Route::get('/areas/list', [AreaController::class, 'index'])->name('area.index');
Route::get('/area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('area.show');

// Training Centers
Route::get('/trainig-center/list', [TrainigCenterController::class, 'index'])->name('trainig-center.index');
Route::get('/trainig-center/create', [TrainigCenterController::class, 'create'])->name('trainig-center.create');
Route::post('/trainig-center/store', [TrainigCenterController::class, 'store'])->name('trainig-center.store');
Route::get('trainig-center/{trainigCenter}', [TrainigCenterController::class, 'show'])->name('trainig-center.show');

// Computers
Route::get('/computer/list', [ComputerController::class, 'index'])->name('computer.index');
Route::get('/computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('/computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');

// Teachers
Route::get('/teacher/list', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');

// Courses

Route::get('course/registro', [CourseController::class, 'registro'])->name('course.registro');
Route::post('course/admin', [CourseController::class, 'dato'])->name('course.admin');
Route::get('/course/list', [CourseController::class, 'index'])->name('course.index');
Route::get('course/{course}', [CourseController::class, 'show'])->name('course.show');

// Course-Teacher Assignments
Route::get('course_teacher/list', [CourseTeacherController::class, 'index'])->name('course_teacher.index');
Route::get('course_teacher/registro', [CourseTeacherController::class, 'registro'])->name('course_teacher.registro');
Route::post('course_teacher/admin', [CourseTeacherController::class, 'dato'])->name('course_teacher.admin');
Route::get('course_teacher/{courseTeacher}', [CourseTeacherController::class, 'show'])->name('course_teacher.show');

// Apprentices
Route::get('/apprentice/list', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('/apprentice/create', [ApprenticeController::class, 'registro'])->name('apprentice.registro');
Route::post('/apprentice/store', [ApprenticeController::class, 'dato'])->name('apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentice.show');
Route::get('apprentice/{apprentice}/edit', [ApprenticeController::class, 'edit'])->name('apprentice.edit');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('apprentice.update');
