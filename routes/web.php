<?php

use App\Http\Controllers\UserController;
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



//});


