<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Middleware\isAdmin;

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

Route::get('/', HomeController::class, 'index');
Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index')->middleware('admin');
Route::get('admin/create', [AdminController::class,'create'])->name('admin.create')->middleware('admin');
Route::put('actualizarUsuarios/{id}', [AdminController::class,'update'])->name('usuarios.update')->middleware('admin');
Route::get('admin/show/{id}', [AdminController::class,'show'])->name('admin.show')->middleware('admin');
Route::get('admin/edit/{id}', [AdminController::class,'edit'])->name('admin.edit')->middleware('admin');
Route::get('admin/listaUsuarios', [AdminController::class,'listaUsuarios'])->name('admin.listaUsuarios')->middleware('admin');
Route::get('admin/nuevocliente', [AdminController::class,'nuevocliente'])->name('admin.nuevocliente')->middleware('admin');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');



