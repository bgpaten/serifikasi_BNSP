<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

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

Route::middleware(['auth', 'role:user,admin'])->group(function () {
    Route::get('/daftar/create', [PendaftaranController::class, 'create'])->name('daftar.create');
    Route::post('/daftar/store', [PendaftaranController::class, 'store'])->name('daftar.store');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [PendaftaranController::class, 'dash'])->name('dashboard');

    Route::get('/daftar/data', [PendaftaranController::class, 'index'])->name('daftar.index');
    Route::get('/daftar/edit/{id}', [PendaftaranController::class, 'edit'])->name('daftar.edit');
    Route::get('/daftar/destroy/{id}', [PendaftaranController::class, 'destroy'])->name('daftar.destroy');
    Route::put('/daftar/update/{id}', [PendaftaranController::class, 'update'])->name('daftar.update');

    Route::get('/dashboard/daftar', [PendaftaranController::class, 'createDash'])->name('daftar.dash');
    Route::post('/dashboard/store', [PendaftaranController::class, 'storeDash'])->name('dash.store');



});

require __DIR__.'/auth.php';
