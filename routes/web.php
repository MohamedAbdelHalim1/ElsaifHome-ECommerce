<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Frontend\UserAuthController;
use App\Http\Controllers\Auth\Backend\StuffAuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\StuffController;
use App\Http\Controllers\Backend\UserController;

use App\Http\Controllers\Frontend\HomeController;


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



Route::get('register', [UserAuthController::class, 'showRegisterForm'])->name('user.register');
Route::post('register', [UserAuthController::class, 'register']);
Route::get('/', [UserAuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/', [UserAuthController::class, 'login']);
Route::post('user/logout', [UserAuthController::class, 'logout'])->name('user.logout');


Route::get('stuff/login', [StuffAuthController::class, 'showLoginForm'])->name('stuff.login');
Route::post('stuff/login', [StuffAuthController::class, 'login']);
Route::post('stuff/logout', [StuffAuthController::class, 'logout'])->name('stuff.logout');


// Routes for regular users (using 'web' guard)
Route::middleware('auth:web')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Routes for staff members (using 'stuff' guard)
Route::middleware('auth:stuff')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'get_profile'])->name('profile');
    Route::post('profile', [AdminController::class, 'update_profile'])->name('profile.update');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('users', UserController::class);
    Route::resource('stuff', StuffController::class);

});