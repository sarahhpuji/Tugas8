<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'prosesLogin']);
Route::get('loginAdmin', [AuthController::class, 'showLoginAdmin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);

Route::get('home', [HomeController::class, 'showHome']);
Route::get('blog', [HomeController::class, 'showBlog']);
Route::get('dashboard', [HomeController::class, 'showDashboard']);

Route::get('artikel', [ArtikelController::class, 'index']);
Route::get('artikel/create', [ArtikelController::class, 'create']);
Route::post('artikel', [ArtikelController::class, 'store']);
Route::get('artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
Route::put('artikel/{artikel}', [ArtikelController::class, 'update']);
Route::delete('artikel/{artikel}', [ArtikelController::class, 'destroy']);
Route::post('artikel/filter', [ArtikelController::class, 'filter']);

//user controller
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);
