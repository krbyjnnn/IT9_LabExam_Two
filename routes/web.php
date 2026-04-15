<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rice Management
    Route::get('/rices', [RiceController::class, 'index'])->name('rices.index');
    Route::post('/rices', [RiceController::class, 'store']);
    Route::get('/rices/{id}/edit', [RiceController::class, 'edit']);
    Route::put('/rices/{id}', [RiceController::class, 'update']);
    Route::delete('/rices/{id}', [RiceController::class, 'destroy']);

    // Order Management
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/orders', [OrderController::class, 'store']);
    Route::get('/orders/create', [OrderController::class, 'create']);

    // Payment Management
    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::post('/payments/{id}/pay', [PaymentController::class, 'updateStatus']);
});

require __DIR__.'/auth.php';