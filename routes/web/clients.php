<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Clients\ClientsController;
use App\Http\Controllers\Admin\Clients\ClientContactsController;

Route::get('/', [ClientsController::class, 'index'])->name('dashboard');

//Created route by Ken Kevin Tajonera
Route::get('create', [ClientsController::class, 'create'])->name('create');
Route::post('/', [ClientsController::class, 'store'])->name('store');

Route::get('{client}/edit', [ClientsController::class, 'edit'])->where('client', '[0-9]+')->name('edit');
Route::get('{client}', [ClientsController::class, 'show'])->where('client', '[0-9]+')->name('show');
Route::put('{client}', [ClientsController::class, 'update'])->where('client', '[0-9]+')->name('update');
Route::put('{client}/profile-image', [ClientsController::class, 'updateProfileImage'])->where('client', '[0-9]+')->name('update.profile-image');

//Created route by Khaizan Bagood
Route::delete('{client}', [ClientsController::class, 'destroy'])->where('client', '[0-9]+')->name('delete');
Route::delete('{client}/profile-image', [ClientsController::class, 'destroyProfileImage'])->where('client', '[0-9]+')->name('delete.profile-image');

Route::get('{client}/contact/create', [ClientContactsController::class, 'create'])->where('client', '[0-9]+')->name('contacts.create');
Route::post('{client}/contact', [ClientContactsController::class, 'store'])->where('client', '[0-9]+')->name('contacts.store');
Route::put('{client}/contact', [ClientContactsController::class, 'update'])->where('client', '[0-9]+')->name('contacts.update');