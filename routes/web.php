<?php

use App\Http\Controllers\DomainController;
use Illuminate\Support\Facades\Route;


// pagina de apresentacao, permite escolher entre dominios / hosts
Route::get('/', function () {
    return view('home');
})->name('home');



// crud de dominios 
Route::get('/domains', [DomainController::class, 'index'])->name('domains.index');
Route::get('/domains/create', [DomainController::class, 'create'])->name('domains.create');
Route::get('/domains/{id}/edit', [DomainController::class, 'edit'])->name('domains.edit');
Route::get('/domains/{id}/show', [DomainController::class, 'show'])->name('domains.show');

Route::post('/domains', [DomainController::class, 'store'])->name('domains.store');
Route::patch('/domains/{id}', [DomainController::class, 'update'])->name('domains.update');




//Route::resource('/domains', DomainController::class);



