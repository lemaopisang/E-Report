<?php

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [UserController::class, 'index'])->name('ereporthub.index');

Route::get('register', [RegisterController::class, 'formRegister'])->name('ereporthub.formRegister');
