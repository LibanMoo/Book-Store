<?php

use App\Http\Controllers\BookStoreController;
use App\Models\BookStore;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('bookstore', BookStoreController::class);


Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('BookStoreResource', BookStoreController::class);
});

// Route::get('/{id}/edit', [BookStoreController::class, 'edit'])->name('edit');

