<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainigCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseTeacherController;
use App\Http\Controllers\FormacionController;

Route::get('/areas', [AreaController::class, 'index']);

Route::get('/areas', [AreaController::class, 'index'])->name('api.v1.areas.index');
Route::get('/areas/create', [AreaController::class, 'create'])->name('api.v1.area.create');
Route::post('/areas', [AreaController::class, 'store'])->name('api.v1.areas.store');
Route::get('/areas/{area}', [AreaController::class, 'show'])->name('api.v1.areas.show');
Route::put('/areas/{area}', [AreaController::class, 'update'])->name('api.v1.areas.update');
Route::delete('/areas/{area}', [AreaController::class, 'destroy'])->name('api.v1.areas.destroy');

Route::get('/training-centers', [TrainigCenterController::class, 'index'])->name('api.v1.trainig-center.index');
Route::post('/training-centers', [TrainigCenterController::class, 'store'])->name('api.v1.trainig-center.store');
Route::get('/training-centers/{trainigCenter}', [TrainigCenterController::class, 'show'])->name('api.v1.trainig-center.show');
Route::put('/training-centers/{trainigCenter}', [TrainigCenterController::class, 'update'])->name('api.v1.trainig-center.update');
Route::delete('/training-centers/{trainigCenter}', [TrainigCenterController::class, 'destroy'])->name('api.v1.trainig-center.destroy');

Route::get('/computers', [ComputerController::class, 'index'])->name('api.v1.computer.index');
Route::post('/computers', [ComputerController::class, 'store'])->name('api.v1.computer.store');
Route::get('computers/{computer}', [ComputerController::class, 'show'])->name('api.v1.computer.show');
Route::put('computers/{computer}', [ComputerController::class, 'update'])->name('api.v1.computer.update');
Route::delete('computers/{computers}', [ComputerController::class, 'destroy'])->name('api.v1.computer.destroy');

Route::get('/apprentices', [ApprenticeController::class, 'index'])->name('api.v1.apprentice.index');
Route::post('/apprentices', [ApprenticeController::class, 'store'])->name('api.v1.apprentice.store');
Route::get('/apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('api.v1.apprentice.show');
Route::put('/apprentices/{apprentice}', [ApprenticeController::class, 'update'])->name('api.v1.apprentice.update');
Route::delete('/apprentices/{apprentice}', [ApprenticeController::class, 'destroy'])->name('api.v1.apprentice.destroy');

Route::get('/courses', [CourseController::class, 'index'])->name('api.v1.course.index');
Route::post('/courses', [CourseController::class, 'store'])->name('api.v1.course.store');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('api.v1.course.show');
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('api.v1.course.update');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('api.v1.course.destroy');

Route::get('/teachers', [TeacherController::class, 'index'])->name('api.v1.teacher.index');
Route::post('/teachers', [TeacherController::class, 'store'])->name('api.v1.teacher.store');
Route::get('/teachers/{teacher}', [TeacherController::class, 'show'])->name('api.v1.teacher.show');
Route::put('/teachers/{teacher}', [TeacherController::class, 'update'])->name('api.v1.teacher.update');
Route::delete('/teachers/{teacher}', [TeacherController::class, 'destroy'])->name('api.v1.teacher.destroy');

Route::get('/course-teachers', [CourseTeacherController::class, 'index'])->name('api.v1.course-teachers.index');;
Route::get('/course-teachers/options', [CourseTeacherController::class, 'options'])->name('api.v1.course-teachers.options');
Route::post('/course-teachers', [CourseTeacherController::class, 'store'])->name('api.v1.course-teachers.store');
Route::get('/course-teachers/{courseTeacher}', [CourseTeacherController::class, 'show'])->name('api.v1.course-teachers.show');
Route::put('/course-teachers/{courseTeacher}', [CourseTeacherController::class, 'update'])->name('api.v1.course-teachers.update');
Route::delete('/course-teachers/{courseTeacher}', [CourseTeacherController::class, 'destroy'])->name('api.v1.course-teachers.destroy');

Route::get('/formaciones', [FormacionController::class, 'index']);
Route::post('/formaciones', [FormacionController::class, 'store']); // <-- ¡Esta es la que te falta en la API!
Route::get('/formaciones/{id}/evaluar', [FormacionController::class, 'evaluarAspirantes']);
