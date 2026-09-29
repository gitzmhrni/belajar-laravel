<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

// route kamu yang sebelumnya
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Profil POS Barokah Mart';
});
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/supplier', function () {
    return 'Halaman Supplier';
});
Route::get('/supplier', function () {
    return 'Halaman Supplier';
});

Route::get('/supplier/{id}', function ($id) {
    return 'Detail Supplier ID: ' . $id;
})->name('supplier.detail');
Route::post('/supplier', function () {
    return 'Tambah Supplier';
});

// LOGIN
Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// USERS - KHUSUS ADMIN
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/users', function () {
        return 'Halaman Kelola Akun Kasir';
    })->name('users.index');
    Route::get('/categories', function () {
        return 'Halaman Kelola Kategori';
    })->name('categories.index');
});
// RIWAYAT TRANSAKSI KASIR
Route::get('/pos/history', function () {
    return 'Riwayat Transaksi Saya';
})->name('pos.history');