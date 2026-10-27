<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\InformasiController as AdminInformasiController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Auth;

Route::get('/login', function () {
    return redirect()->route('admin.login.form');
})->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // atau halaman lain setelah logout
})->name('logout');

// Route admin login (tampilan form dan proses login)
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');


// Group route admin, harus login dulu (middleware auth)
Route::middleware('admin.session')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/informasi', [AdminInformasiController::class, 'index'])->name('admin.informasi.index');
    Route::get('/informasi/create', [AdminInformasiController::class, 'create'])->name('admin.informasi.create');
    Route::post('/informasi', [AdminInformasiController::class, 'store'])->name('admin.informasi.store');
    Route::get('/informasi/{id}/edit', [AdminInformasiController::class, 'edit'])->name('admin.informasi.edit');
    Route::put('/informasi/{id}', [AdminInformasiController::class, 'update'])->name('admin.informasi.update');
    Route::delete('/informasi/{id}', [AdminInformasiController::class, 'destroy'])->name('admin.informasi.destroy');
});

// Route publik informasi
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
Route::get('/informasi/{id}', [InformasiController::class, 'show'])->name('informasi.show');

// Route halaman lain publik
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::get('/psb', function () {
    return view('psb');
})->name('psb');

Route::get('/psb/brosur', function () {
    return view('psb');
})->name('psb.brosur');


    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/informasi', InformasiController::class);
    Route::get('/admin/keluhan', [App\Http\Controllers\Admin\KontakAdminController::class, 'index'])->name('admin.keluhan.index');


// Route group untuk admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('informasi', \App\Http\Controllers\Admin\InformasiController::class);
});

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');


