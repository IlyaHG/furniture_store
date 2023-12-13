<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;

Route::middleware('auth')->group(function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/my_account', [UserController::class, 'showMyAccountForm'])->name('my_account');

    Route::get('/my_account/settings', [UserController::class, 'showMySettingsForm'])->name('my_settings');

    Route::get('/my_account/my_addresses', [UserController::class, 'showMyAddressesForm'])->name('my_addresses');

    Route::get('/wishlist', [UserController::class, 'showWishListForm'])->name('wishlist');

    Route::post('/edit_process',[UserController::class, 'editUserInfo'])->name('edit_process');

});

//Route::middleware('guest')->group(function() {
Route::get('/products', [IndexController::class, 'showProductsForm'])->name('products');

Route::get('/products/sofas', [IndexController::class, 'showProductsForm'])->name('sofas');

Route::get('/home', [IndexController::class, 'showHomeForm'])->name('home');

Route::get('/login&register', [AuthController::class, 'showAuthForm'])->name('login');

Route::post('/login_process', [AuthController::class, 'loginOrRegister'])->name('login_process');

Route::get('/about_us', [IndexController::class, 'showAboutUsForm'])->name('about_us');



Route::get('/forgot-password',[AuthController::class, 'forgot'])
    ->name('password.request');

Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])
    ->name('password.email');

Route::get('/reset-password/{token}', [AuthController::class ,'reset'])
    ->name('password.reset');

Route::post('/reset-password', [AuthController::class, 'resetPassword'])
    ->name('password.update');


// Socialite
Route::get('/auth/socialite/redirect',[AuthController::class ,'github'])
    ->name('socialite.github');

Route::get('/auth/socialite/github/callback', [AuthController::class ,'githubCallback'])
    ->name('socialite.callback');


//});


