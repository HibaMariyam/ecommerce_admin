<?php

use App\Livewire\Home;
use App\Livewire\Register;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');

