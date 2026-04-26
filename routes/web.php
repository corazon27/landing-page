<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tentang', function () {
    return view('about');
})->name('about');

Route::get('/layanan', function () {
    return view('services');
})->name('services');

Route::prefix('layanan')->group(function () {
    Route::get('/web-perusahaan', function () {
        return view('layanan.web-perusahaan');
    })->name('layanan.perusahaan');
    
    // Anda bisa menambah route layanan lainnya di sini nanti

    Route::get('/web-toko', function () {
        return view('layanan.web-toko');
    })->name('layanan.toko');

    Route::get('/web-katalog-produk', function () {
        return view('layanan.web-katalog-produk');
    })->name('layanan.katalog-produk');

    Route::get('/web-rental', function () {
        return view('layanan.web-rental');
    })->name('layanan.rental');
    
});

Route::get('/affiliate', function () {
    return view('affiliate');
})->name('affiliate');

Route::get('/portofolio', function () {
    return view('portofolio');
})->name('portofolio');

Route::get('/tanya-jawab', function () {
    return view('faq');
})->name('faq');

// Auth
Route::get('/register', function () {
    return view('affiliate.register'); // Titik (.) menandakan masuk ke dalam folder
})->name('affiliate.register');
Route::get('/login', function () { return view('auth.login'); })->name('login');

// Dashboard Affiliate
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () { return view('affiliate.dashboard'); })->name('dashboard');
});