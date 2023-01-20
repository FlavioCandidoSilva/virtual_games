<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


// AUTENTICAÇÃO

Route::middleware(['auth'])->group(function () {

    Route::get('/', [App\Http\Controllers\ClientesController::class, 'index'])->name('home');
    Route::get('/sair', [App\Http\Controllers\LoginController::class, 'sair'])->name('sair');
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

    Route::get('/clientes/create', [App\Http\Controllers\ClientesController::class, 'formCreate'])->name('clientes.create');
    Route::post('/clientes/create', [App\Http\Controllers\ClientesController::class, 'createClientes'])->name('clientes.store');
    Route::get('/clientes/edit/{id}', [App\Http\Controllers\ClientesController::class, 'editClientes'])->name('clientes.edit');
    Route::post('/clientes/edit/{id}', [App\Http\Controllers\ClientesController::class, 'updateClientes'])->name('clientes.update');
    Route::post('/clientes/delete/{id}', [App\Http\Controllers\ClientesController::class, 'deleteClientes'])->name('clientes.delete');

    //STATUS
    Route::get('/status', [App\Http\Controllers\StatusController::class, 'showStatus'])->name('status.show');
    Route::get('/status/create', [App\Http\Controllers\StatusController::class, 'createStatus'])->name('status.create');
    Route::post('/status/create', [App\Http\Controllers\StatusController::class, 'storeStatus'])->name('status.store');
    Route::get('/status/edit/{id}', [App\Http\Controllers\StatusController::class, 'updateStatus'])->name('status.update');

    //PRODUTOS
    Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'showProdutos'])->name('produtos.show');
    Route::get('/produtos/create', [App\Http\Controllers\ProdutosController::class, 'createProdutos'])->name('produtos.create');
    Route::post('/produtos/create', [App\Http\Controllers\ProdutosController::class, 'storeProdutos'])->name('produtos.store');
    Route::get('/produtos/edit/{id}', [App\Http\Controllers\ProdutosController::class, 'editProdutos'])->name('produtos.edit');
    Route::get('/produtos/update/{id}', [App\Http\Controllers\ProdutosController::class, 'updateProdutos'])->name('produtos.update');


    //AUDITORIA
    Route::get('/auditoria', [App\Http\Controllers\AuditoriaController::class, 'index'])->name('auditoria.show');
    Route::get('/auditoria/detalhes/{id}', [App\Http\Controllers\AuditoriaController::class, 'showAudit'])->name('auditoria.detalhes');

    //USUÁRIOS
    Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios.show');
    Route::post('/usuarios/activate/{id}', [App\Http\Controllers\UserController::class, 'restore'])->name('usuarios.activate');
    Route::post('/usuarios/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteUser'])->name('usuarios.delete');
    Route::get('/usuarios/edit/{id}', [App\Http\Controllers\UserController::class, 'editUser'])->name('usuarios.edit');
    Route::get('/usuarios/inactive', [App\Http\Controllers\UserController::class, 'inactiveUser'])->name('usuarios.inactive');

});
