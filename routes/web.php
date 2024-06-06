<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/anjay', function () {
    return view('content.anjay');
});

Route::get('/', [MenuController::class, 'topList'])->name('content.home');
Route::get('/menu', [MenuController::class, 'menu'])->name('content.menu');
Route::get('/admin', [MenuController::class, 'index'])->name('dishes.index');
Route::get('dishes/create', [MenuController::class, 'create'])->name('dishes.create');
Route::post('dishes', [MenuController::class, 'store'])->name('dishes.store');
Route::get('dishes/{id}', [MenuController::class, 'show'])->name('dishes.show');
Route::get('dishes/{id}/edit', [MenuController::class, 'edit'])->name('dishes.edit');
Route::put('dishes/{id}', [MenuController::class, 'update'])->name('dishes.update');
Route::delete('dishes/{id}', [MenuController::class, 'destroy'])->name('dishes.destroy');

Route::resource('dishes', MenuController::class);