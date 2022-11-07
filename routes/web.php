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
// AUTENTICAÇÃO


Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('loginUser');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'autenticacao'])->name('autenticacao');


Route::get('/register/create', [\App\Http\Controllers\LoginController::class, 'createUser'])->name('registerUser');

Route::post('/register/create', [\App\Http\Controllers\LoginController::class, 'storeUser']);



Route::middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('dashboard');
});
