<?php

use App\Http\Controllers\DomainController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', [WelcomeController::class, 'welcome'])->name('welcome');

/*
Route::get('/domain', [DomainController::class, 'index'])->name('domain.index');
Route::get('/domain/create', [DomainController::class, 'create'])->name('domain.create');
Route::post('/domain', [DomainController::class, 'store'])->name('domain.store');
Route::get('/domain/{id}', [DomainController::class, 'show'])->name('domain.show');
Route::get('/domain/{id}/edit', [DomainController::class, 'edit'])->name('domain.edit');
Route::patch('/domain/{id}', [DomainController::class, 'update'])->name('domain.update');
*/


Route::resource('domain', DomainController::class);



