<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin-only', function () {
    return "Halo Admin!";
})->middleware('checkRole:Admin');

Route::get('/hrd-or-admin', function () {
    return "Halo HRD atau Admin!";
})->middleware('checkRole:Admin,HRD');

Route::get('/karyawan', function () {
    return "Halo Karyawan!";
})->middleware('checkRole:Karyawan');

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
