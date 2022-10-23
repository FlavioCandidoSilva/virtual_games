<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// INDEX

Route::get('/', [App\Http\Controllers\IndexController::class , 'index'])->name('home');

// AUTENTICAÇÃO

Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('login.login');
Route::post('/login', [LoginController::class, 'autenticar']);


Route::get('/register', [LoginController::class, 'create'])->name('register.register');
Route::post('/register', [LoginController::class, 'store']);
