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
Route::get('area/{area}/edit', [AreaController::class, 'edit'])->name('area.edit');
Route::put('area/{area}', [AreaController::class, 'update'])->name('area.update');

// Training Centers
Route::get('/trainig-center/list', [TrainigCenterController::class, 'index'])->name('trainig-center.index');
Route::get('/trainig-center/create', [TrainigCenterController::class, 'create'])->name('trainig-center.create');
Route::post('/trainig-center/store', [TrainigCenterController::class, 'store'])->name('trainig-center.store');
Route::get('trainig-center/{trainigCenter}', [TrainigCenterController::class, 'show'])->name('trainig-center.show');
route::get('trainig-center/{trainigCenter}/edit', [TrainigCenterController::class, 'edit'])->name('trainig-center.edit');
route::put('trainig-center/{trainigCenter}', [TrainigCenterController::class, 'update'])->name('trainig-center.update');

// Computers
Route::get('/computer/list', [ComputerController::class, 'index'])->name('computer.index');
Route::get('/computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('/computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::get('computer/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.edit');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');

// Teachers
Route::get('/teacher/list', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');
Route::get('teacher/{teacher}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');

// Courses

Route::get('course/registro', [CourseController::class, 'registro'])->name('course.registro');
Route::post('course/admin', [CourseController::class, 'dato'])->name('course.admin');
Route::get('/course/list', [CourseController::class, 'index'])->name('course.index');
Route::get('course/{course}', [CourseController::class, 'show'])->name('course.show');
Route::get('course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('course/{course}', [CourseController::class, 'update'])->name('course.update');

// Course-Teacher Assignments
Route::get('course_teacher/list', [CourseTeacherController::class, 'index'])->name('course_teacher.index');
Route::get('course_teacher/registro', [CourseTeacherController::class, 'registro'])->name('course_teacher.registro');
Route::post('course_teacher/admin', [CourseTeacherController::class, 'dato'])->name('course_teacher.admin');
Route::get('course_teacher/{courseTeacher}', [CourseTeacherController::class, 'show'])->name('course_teacher.show');
Route::get('course_teacher/{courseTeacher}/edit', [CourseTeacherController::class, 'edit'])->name('course_teacher.edit');
Route::put('course_teacher/{courseTeacher}', [CourseTeacherController::class, 'update'])->name('course_teacher.update');

// Apprentices
Route::get('/apprentice/list', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('/apprentice/create', [ApprenticeController::class, 'registro'])->name('apprentice.registro');
Route::post('/apprentice/store', [ApprenticeController::class, 'dato'])->name('apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentice.show');
Route::get('apprentice/{apprentice}/edit', [ApprenticeController::class, 'edit'])->name('apprentice.edit');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('apprentice.update');

//Home

Route::view('/home', 'home.create');