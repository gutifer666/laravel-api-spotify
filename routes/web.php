<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotifyController;

Route::view('/', 'home')->name('home');
Route::get('login', [SpotifyController::class, 'login'])->name('login');
Route::get('profile', [SpotifyController::class, 'getUser'])->name('profile');