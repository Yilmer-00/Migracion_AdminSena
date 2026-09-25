<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainigCenterController;
use App\Http\Controllers\ComputerController;

Route::get('/areas', [AreaController::class, 'index']);

// Rutas de API para Áreas (sin create ni edit)
Route::get('/areas', [AreaController::class, 'index'])->name('api.v1.areas.index');
Route::post('/areas', [AreaController::class, 'store'])->name('api.v1.areas.store');
Route::get('/areas/{area}', [AreaController::class, 'show'])->name('api.v1.areas.show');
Route::put('/areas/{area}', [AreaController::class, 'update'])->name('api.v1.areas.update');
Route::delete('/areas/{area}', [AreaController::class, 'destroy'])->name('api.v1.areas.destroy');

Route::get('/trainig-center', [TrainigCenterController::class, 'index'])->name('api.v1.trainig-center.index');
Route::post('/trainig-center', [TrainigCenterController::class, 'store'])->name('api.v1.trainig-center.store');
Route::get('trainig-center/{trainigCenter}', [TrainigCenterController::class, 'show'])->name('api.v1.trainig-center.show');
route::put('trainig-center/{trainigCenter}', [TrainigCenterController::class, 'update'])->name('api.v1.trainig-center.update');

Route::get('/computer', [ComputerController::class, 'index'])->name('api.v1.computer.index');
Route::post('/computer', [ComputerController::class, 'store'])->name('api.v1.computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('api.v1.computer.show');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('api.v1.computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('api.v1.computer.destroy');
