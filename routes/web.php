<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
Route::view('/', 'beranda');
Route::view('kegiatan', 'kegiatan');
Route::view('profile-smk', 'profile-smk');
Route::view('kontak', 'hubungi-kami');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
