<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Tambahkan route untuk divisions dan employees
Route::middleware(['auth'])->group(function () {
    Route::resource('divisions', DivisionController::class);
    Route::resource('employees', EmployeeController::class);
});

require __DIR__.'/auth.php';