<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'authenticate']);
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
