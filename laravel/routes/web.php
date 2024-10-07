<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard/explore', [DashboardController::class, 'explore'])->name('dashboard.explore');
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/support', [SupportController::class, 'index'])->name('support.index');
});

// Product Routes
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/', [ProductController::class, 'store'])->name('product.store');
    Route::get('/{product}', [ProductController::class, 'show'])->name('product.show'); // using Route Model Binding
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('product.edit'); // using Route Model Binding
    Route::put('/{product}', [ProductController::class, 'update'])->name('product.update'); // using Route Model Binding
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.destroy'); // using Route Model Binding
});

require __DIR__.'/auth.php';
