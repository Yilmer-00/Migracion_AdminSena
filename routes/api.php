<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainigCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ApprenticeController;

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

