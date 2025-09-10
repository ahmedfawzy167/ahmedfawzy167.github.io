<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
