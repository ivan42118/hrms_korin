<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Hanya HRD & ADM yang boleh akses data karyawan
Route::middleware(['auth', 'role:HRD,ADM'])->group(function () {
    Route::resource('employees', EmployeeController::class);
});

// Hanya HRD yang boleh akses data divisi
Route::middleware(['auth', 'role:HRD'])->group(function () {
    Route::resource('divisions', DivisionController::class);
    Route::resource('employees', EmployeeController::class);
    Route::get('/rekap-absensi', [ReportController::class, 'index'])->name('rekap.index');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('attendances', AttendanceController::class);
});


require __DIR__.'/auth.php';
