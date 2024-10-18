<?php

use App\Http\Controllers\FrontendCrontroller;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicessectionController;
use App\Http\Controllers\SubservicesController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [FrontendCrontroller::class, 'index'])->name('welcome');

// Hero Section
Route::get('/heros', [HeroController::class, 'index'])->name('hero.index');
Route::get('/hero/create', [HeroController::class, 'create'])->name('hero.create');
Route::post('/hero/store', [HeroController::class, 'store'])->name('hero.store');
Route::get('/hero/edit/{id}', [HeroController::class, 'edit'])->name('hero.edit');
Route::put('/hero/update/{id}', [HeroController::class, 'update'])->name('hero.update');
Route::post('/hero/delete/{id}', [HeroController::class, 'destroy'])->name('hero.delete');


// services Section
Route::get('/services', [ServicessectionController::class, 'index'])->name('services.index');
Route::get('/service/create', [ServicessectionController::class, 'create'])->name('service.create');
Route::post('/service/store', [ServicessectionController::class, 'store'])->name('service.store');
Route::get('/service/edit/{id}', [ServicessectionController::class, 'edit'])->name('service.edit');
Route::put('/service/update/{id}', [ServicessectionController::class, 'update'])->name('service.update');
Route::post('/service/delete/{id}', [ServicessectionController::class, 'destroy'])->name('service.delete');

// Hero Sub Services Section
Route::get('/subservices', [SubservicesController::class, 'index'])->name('subservices.index');
Route::get('/subservices/create', [SubservicesController::class, 'create'])->name('subservices.create');
Route::post('/subservices/store', [SubservicesController::class, 'store'])->name('subservices.store');
Route::get('/subservices/edit/{id}', [SubservicesController::class, 'edit'])->name('subservices.edit');
Route::put('/subservices/update/{id}', [SubservicesController::class, 'update'])->name('subservices.update');
Route::post('/subservices/delete/{id}', [SubservicesController::class, 'destroy'])->name('subservices.delete');
require __DIR__ . '/auth.php';
