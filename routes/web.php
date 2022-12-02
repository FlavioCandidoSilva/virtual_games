<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


// AUTENTICAÇÃO

Route::middleware(['auth'])->group(function () {

    Route::get('/', [App\Http\Controllers\ClientesController::class , 'index'])->name('home');
    Route::get('/sair', [App\Http\Controllers\LoginController::class , 'sair'])->name('sair');

});

// LOGIN E REGISTRO

Route::get('/login/{erro?}', [LoginController::class, 'showIndex'])->name('login.login');
Route::post('/login', [LoginController::class, 'autenticar']);

Route::get('/register', [LoginController::class, 'create'])->name('register.register');
Route::post('/register', [LoginController::class, 'store']);

//LOGOUT

Route::get('/logout', [LoginController::class, 'sair'])->name('logout.logout');

// CLIENTES

Route::middleware(['auth'])->group(function () {

Route::get('/clientes/create', [App\Http\Controllers\ClientesController::class , 'formCreate'])->name('clientes.create');
Route::post('/clientes/create', [App\Http\Controllers\ClientesController::class , 'createClientes'])->name('clientes.store');
Route::get('/clientes/edit/{id}', [App\Http\Controllers\ClientesController::class , 'editClientes'])->name('clientes.edit');
Route::post('/clientes/edit/{id}', [App\Http\Controllers\ClientesController::class , 'updateClientes'])->name('clientes.update');
Route::get('/clientes/delete/{id}', [App\Http\Controllers\ClientesController::class , 'deleteClientes'])->name('clientes.delete');


});
