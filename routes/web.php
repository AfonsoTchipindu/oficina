<?php

use App\Http\Controllers\Backend\TecnicoController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 
//rota Admin
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');
//rota Secretaria
Route::get('secretaria/dashboard',[AdminController::class, 'dashboard'])->middleware('auth')->name('secretaria.dashboard');
//rota Secretaria
Route::get('cliente/dashboard',[AdminController::class, 'dashboard'])->middleware('auth')->name('cliente.dashboard');
//rota Secretaria
Route::get('secretaria/dashboard',[AdminController::class, 'dashboard'])->middleware('auth')->name('secretaria.dashboard');
//rota Tecnico
Route::get('gerente/dashboard',[TecnicoController::class, 'dashboard'])->middleware('auth')->name('gerente.dashboard');
