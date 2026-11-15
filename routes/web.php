<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IAMController;

Route::get('/', [IAMController::class, 'index']);
Route::get('login', [IAMController::class, 'login'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [IAMController::class, 'ceklogin'])
    ->middleware('guest');
Route::get('/register', [IAMController::class, 'register'])
    ->middleware('guest');
Route::post('/register', [IAMController::class, 'simpanregister'])
    ->middleware('guest');
Route::post('/logout', [IAMController::class, 'logout']);
Route::get('/dashboard', [IAMController::class, 'dashboard']);
