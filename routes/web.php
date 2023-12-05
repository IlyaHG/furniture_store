<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
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


Route::middleware('auth')->group(function(){

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/my_account/{id}', [IndexController::class, 'showMyAccountForm'])->name('my_account');

});

Route::middleware('guest')->group(function() {

    Route::get('/home', [IndexController::class, 'showHomeForm'])->name('home');
    Route::get('/login&register', [AuthController::class, 'showAuthForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'loginOrRegister'])->name('login_process');

});


