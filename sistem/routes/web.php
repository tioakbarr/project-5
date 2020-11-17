<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('base', [HomeController::class, 'showBase']);

Route::get('dasboard', [HomeController::class, 'showDasboard']);

Route::get('data', [HomeController::class, 'showData']);

Route::get('header', [HomeController::class, 'showHeader']);




Route::get('kategori', [HomeController::class, 'showKateori']);

Route::get('user', [HomeController::class, 'showUser']);

Route::get('product', [ProductController::class, 'index']);

Route::get('product/create', [ProductController::class, 'create']);

Route::post('product', [ProductController::class, 'store']);

Route::get('product/{product}', [ProductController::class, 'show']);

Route::get('product/{product}/edit', [ProductController::class, 'edit']);

Route::put('product/{product}', [ProductController::class, 'update']);

Route::delete('product/{product}', [ProductController::class, 'destroy']);



Route::get('user', [UserController::class, 'index']);

Route::get('user/create', [UserController::class, 'create']);

Route::post('user', [UserController::class, 'store']);

Route::get('user/{user}', [UserController::class, 'show']);

Route::get('user/{user}/edit', [UserController::class, 'edit']);

Route::put('user/{user}', [UserController::class, 'update']);

Route::delete('user/{user}', [UserController::class, 'destroy']);


Route::get('login', [AuthController::class, 'showLogin']);

Route::post('login', [AuthController::class, 'loginProccess']);

