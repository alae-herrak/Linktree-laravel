<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/register', [AuthController::class, 'registerForm']);
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get("/profile", [ProfileController::class, 'index']);
    Route::patch('/profile-info', [ProfileController::class, 'update_info']);
    Route::patch('/profile-password', [ProfileController::class, 'update_password']);
    Route::delete('/profile-delete', [ProfileController::class, 'destroy']);
    Route::get('/', function () {
        return view('master');
    });
});
