<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainigCenterController;
use App\Http\Controllers\ComputerController;
<<<<<<< HEAD
use App\Http\Controllers\ApprenticeController;
=======
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseTeacherController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AnnouncementController;


Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'API AdminSENA activa'
    ]);
});
>>>>>>> 0e6366ef5c3784fb2abb716b37aed81c738b85e9

Route::get('/areas', [AreaController::class, 'index']);

// Rutas de API para Áreas (sin create ni edit)
Route::get('/areas', [AreaController::class, 'index'])->name('api.v1.areas.index');
Route::get('/areas/create', [AreaController::class, 'create'])->name('api.v1.area.create');
Route::post('/areas', [AreaController::class, 'store'])->name('api.v1.areas.store');
Route::get('/areas/{area}', [AreaController::class, 'show'])->name('api.v1.areas.show');
Route::put('/areas/{area}', [AreaController::class, 'update'])->name('api.v1.areas.update');
Route::delete('/areas/{area}', [AreaController::class, 'destroy'])->name('api.v1.areas.destroy');

Route::get('/training-centers', [TrainigCenterController::class, 'index'])->name('api.v1.trainig-center.index');
Route::post('/training-centers', [TrainigCenterController::class, 'store'])->name('api.v1.trainig-center.store');
Route::get('training-center/{trainingCenter}', [TrainigCenterController::class, 'show'])->name('api.v1.trainig-center.show');
route::put('training-center/{trainingCenter}', [TrainigCenterController::class, 'update'])->name('api.v1.trainig-center.update');

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

<<<<<<< HEAD
=======
Route::get('/computer', [ComputerController::class, 'index'])->name('api.v1.computer.index');
Route::post('/computer', [ComputerController::class, 'store'])->name('api.v1.computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('api.v1.computer.show');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('api.v1.computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('api.v1.computer.destroy');

Route::get('/teacher', [TeacherController::class, 'index'])->name('api.v1.teacher.index');
Route::post('/teacher', [TeacherController::class, 'store'])->name('api.v1.teacher.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('api.v1.teacher.show');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('api.v1.teacher.update');
Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('api.v1.teacher.destroy');

Route::get('formaciones/{id}/evaluar', [FormacionController::class, 'evaluarAspirantes'])->name('formaciones.evaluar');
Route::put('aspirantes/{id}/aprobar', [FormacionController::class, 'aprobarAspirante'])->name('aspirantes.aprobar');
Route::put('aspirantes/{id}/rechazar', [FormacionController::class, 'rechazarAspirante'])->name('aspirantes.rechazar');
Route::apiResource('formaciones', FormacionController::class);

// 1. Rutas personalizadas (con los nombres de métodos actualizados)
Route::get('/course', [CourseController::class, 'options'])->name('api.v1.course.options'); // Para traer las áreas y centros al frontend
Route::post('/course', [CourseController::class, 'store'])->name('api.v1.course.store'); // Para guardar el curso con imagen

// 2. Rutas estándar de la API (puedes usar apiResource para simplificar todo esto)
Route::get('/course/list', [CourseController::class, 'index'])->name('api.v1.course.index');
Route::get('course/{course}', [CourseController::class, 'show'])->name('api.v1.course.show');
Route::put('course/{course}', [CourseController::class, 'update'])->name('api.v1.course.update');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('api.v1.course.destroy');

Route::get('course_teacher', [CourseTeacherController::class, 'index'])->name('api.v1.course_teacher.index');
Route::get('course_teacher/options', [CourseTeacherController::class, 'options'])->name('api.v1.course_teacher.options'); 
Route::post('course_teacher', [CourseTeacherController::class, 'store'])->name('api.v1.course_teacher.store'); 
Route::get('course_teacher/{courseTeacher}', [CourseTeacherController::class, 'show'])->name('api.v1.course_teacher.show');
Route::put('course_teacher/{courseTeacher}', [CourseTeacherController::class, 'update'])->name('api.v1.course_teacher.update');
Route::delete('course_teacher/{courseTeacher}', [CourseTeacherController::class, 'destroy'])->name('api.v1.course_teacher.destroy');

Route::get('/apprentice/list', [ApprenticeController::class, 'index'])->name('api.v1.apprentice.index');
Route::get('/apprentice/options', [ApprenticeController::class, 'options'])->name('api.v1.apprentice.options'); // Reemplazo de registro
Route::post('/apprentice/store', [ApprenticeController::class, 'store'])->name('api.v1.apprentice.store');     // Reemplazo de dato
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('api.v1.apprentice.show');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('api.v1.apprentice.update');
Route::delete('apprentice/{apprentice}', [ApprenticeController::class, 'destroy'])->name('api.v1.apprentice.destroy'); // Corregido el controlador

// Ruta para la postulación pública de aspirantes
Route::post('/aspirante/postular', [ApprenticeController::class, 'storePostulacion'])->name('api.v1.aspirante.postular');

// Otras rutas asociadas (Anuncios y gestión de aspirantes)
Route::apiResource('/announcements', AnnouncementController::class);
Route::put('aspirante/{id}/aprobar', [FormacionController::class, 'aprobarAspirante'])->name('api.v1.aspirante.aprobar');
Route::put('aspirante/{id}/rechazar', [FormacionController::class, 'rechazarAspirante'])->name('api.v1.aspirante.rechazar');
>>>>>>> 0e6366ef5c3784fb2abb716b37aed81c738b85e9
