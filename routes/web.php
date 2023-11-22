<?php

use App\Http\Controllers\BeneficioController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'index'])->name(('login.index'));
Route::post('/auth', [LoginController::class, 'auth'])->name(('login.auth'));
Route::get('/logout', [LoginController::class, 'logout'])->name(('login.logout'));

Route::get('/dashboard', [DashboardController::class, 'index'])->name(('dashboard.index'));


Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionarioController::class, 'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store');
Route::get('/funcionarios/{id}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}/delete', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');

Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::put('/departamentos/{id}', [DepartamentoController::class, 'update'])->name('departamentos.update');
Route::get('/departamentos/{id}/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');
Route::delete('/departamentos/{id}/delete', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');


Route::get('/cargos', [CargoController::class, 'index'])->name('cargos.index');
Route::post('/cargos', [CargoController::class, 'store'])->name('cargos.store');
Route::get('/cargos/create', [CargoController::class, 'create'])->name('cargos.create');
Route::put('/cargos/{id}', [CargoController::class, 'update'])->name('cargos.update');
Route::get('/cargos/{id}/edit', [CargoController::class, 'edit'])->name('cargos.edit');
Route::delete('/cargos/{id}/delete', [CargoController::class, 'destroy'])->name('cargos.destroy');


Route::get('/beneficios', [BeneficioController::class, 'index'])->name('beneficios.index');
Route::post('/beneficios', [BeneficioController::class, 'store'])->name('beneficios.store');
Route::get('/beneficios/create', [BeneficioController::class, 'create'])->name('beneficios.create');
Route::put('/beneficios/{id}', [BeneficioController::class, 'update'])->name('beneficios.update');
Route::get('/beneficios/{id}/edit', [BeneficioController::class, 'edit'])->name('beneficios.edit');
Route::delete('/beneficios/{id}/delete', [BeneficioController::class, 'destroy'])->name('beneficios.destroy');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

