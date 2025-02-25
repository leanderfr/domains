<?php

use App\Http\Controllers\DomainController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/domains', [DomainController::class, 'index'])->name('domains.index');
Route::get('/domains/create', [DomainController::class, 'create'])->name('domains.create');
Route::post('/domains', [DomainController::class, 'store'])->name('domains.store');
Route::get('/domains/{id}', [DomainController::class, 'show'])->name('domains.show');
Route::get('/domains/{id}/edit', [DomainController::class, 'edit'])->name('domains.edit');
Route::patch('/domains/{id}', [DomainController::class, 'update'])->name('domains.update');



//Route::resource('/domains', DomainController::class);



