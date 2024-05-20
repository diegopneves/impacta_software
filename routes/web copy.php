<?php

use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




//CHAMADO
Route::get('/meu-chamado',[ChamadoController::class, 'indexdashboard'])->name('chamado.index');
Route::get('/create-chamado',[ChamadoController::class, 'createdashboard'])->name('chamado.create');
Route::post('/store-chamado',[ChamadoController::class, 'store'])->name('chamado.store');
Route::get('/show-chamado/{chamado}',[ChamadoController::class, 'showdashboard'])->name('chamado.show');
Route::get('/edit-chamado/{chamado}',[ChamadoController::class, 'editdashboard'])->name('chamado.edit');
Route::put('/update-chamado/{chamado}',[ChamadoController::class, 'update'])->name('chamado.update');
Route::delete('/destroy-chamado/{chamado}',[ChamadoController::class, 'destroy'])->name('chamado.destroy');
