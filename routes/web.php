<?php

use App\Http\Controllers\BookStoreController;
use App\Models\BookStore;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', BookStoreController::class);
