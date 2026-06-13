<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainigCenterController;
use App\Http\Controllers\ComputerController;



//categoory
Route::get('category/create',[CategoryController::class,'create']);
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');

// Areas
Route::get('area/create', [AreaController::class, 'create']);
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

// Training Centers
Route::get('trainig-center/create', [TrainigCenterController::class, 'create']);
Route::post('trainig-center/store', [TrainigCenterController::class, 'store'])->name('trainig-center.store');

// Computers
Route::get('computer/create', [ComputerController::class, 'create']);
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');

