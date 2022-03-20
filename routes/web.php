<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Registrasi\RegistrasiController;

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

Route::get('/', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/mitra-registrasi', [RegistrasiController::class, 'index']);
Route::get('/detail-mitra-registrasi', [RegistrasiController::class, 'detail']);
Route::get('/selesai', [LoginController::class, 'selesai']);