<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Clients\ClientsController;


//Prefix: clients
//name: admin.clients.create


Route::get('/', [ClientsController::class, 'index'])->name('dashboard');

Route::get('create', [ClientsController::class, 'create'])->name('create');

Route::post('/', [ClientsController::class, 'store'])->name('store');

Route::get('{client}/edit', [ClientsController::class, 'edit'])->name('edit');