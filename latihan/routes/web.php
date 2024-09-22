<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Menggunakan Route Resource untuk CRUD
Route::resource('crud', CrudController::class);

Route::get('/crud', [CrudController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [CrudController::class, 'create'])->name('crud.create');
Route::post('/crud', [CrudController::class, 'store'])->name('crud.store');
Route::get('/crud/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit');
Route::put('/crud/{id}', [CrudController::class, 'update'])->name('crud.update');
Route::delete('/crud/{id}', [CrudController::class, 'destroy'])->name('crud.destroy');
