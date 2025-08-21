<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\MotorcycleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Маршруты для категорий
Route::resource('categories', CategoryController::class);

// Маршруты для автомобилей
Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
Route::get('/vehicles/{vehicle}', [VehicleController::class, 'show'])->name('vehicles.show');
Route::get('/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');
Route::put('/vehicles/{vehicle}', [VehicleController::class, 'update'])->name('vehicles.update');
Route::delete('/vehicles/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');

// Маршруты для мотоциклов
Route::get('/motorcycles', [MotorcycleController::class, 'index'])->name('motorcycles.index');
Route::get('/motorcycles/create', [MotorcycleController::class, 'create'])->name('motorcycles.create');
Route::post('/motorcycles', [MotorcycleController::class, 'store'])->name('motorcycles.store');
Route::get('/motorcycles/{motorcycle}', [MotorcycleController::class, 'show'])->name('motorcycles.show');
Route::get('/motorcycles/{motorcycle}/edit', [MotorcycleController::class, 'edit'])->name('motorcycles.edit');
Route::put('/motorcycles/{motorcycle}', [MotorcycleController::class, 'update'])->name('motorcycles.update');
Route::delete('/motorcycles/{motorcycle}', [MotorcycleController::class, 'destroy'])->name('motorcycles.destroy');