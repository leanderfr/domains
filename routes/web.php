<?php

use App\Http\Controllers\DomainController;
use App\Http\Controllers\HostsController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;



if (App::environment('remote')) {
    URL::forceSchema('https');
}

// *****************************************************************************
// pagina de apresentacao, permite escolher entre dominios / hosts
// *****************************************************************************
Route::get('/', function () {
    return view('home');
})->name('home');



// *****************************************************************************
// crud de dominios 
// *****************************************************************************
Route::get('/domains', [DomainController::class, 'index'])->name('domains.index');
Route::get('/domains/create', [DomainController::class, 'create'])->name('domains.create');
Route::get('/domains/{id}/edit', [DomainController::class, 'edit'])->name('domains.edit');
Route::get('/domains/{id}/delete', [DomainController::class, 'delete'])->name('domains.delete');

Route::post('/domains', [DomainController::class, 'store'])->name('domains.store');
Route::patch('/domains/{id}', [DomainController::class, 'update'])->name('domains.update');
Route::delete('/domains/{id}', [DomainController::class, 'destroy'])->name('domains.destroy');

Route::get('/domains/{id}/status', [DomainController::class, 'status'])->name('domains.status');

// *****************************************************************************
// crud de servicos hospedagem
// *****************************************************************************
Route::get('/hosts', [HostsController::class, 'index'])->name('hosts.index');


//Route::resource('/domains', DomainController::class);



