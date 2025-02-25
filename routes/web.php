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
Route::get('/domains/{id}/delete', [DomainController::class, 'delete'])->name('domains.delete');

Route::post('/domains', [DomainController::class, 'store'])->name('domains.store');
Route::patch('/domains/{id}', [DomainController::class, 'update'])->name('domains.update');
Route::delete('/domains/{id}', [DomainController::class, 'destroy'])->name('domains.destroy');




//Route::resource('/domains', DomainController::class);



