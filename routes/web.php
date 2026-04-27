<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Affiliate\RegisterController;
use App\Http\Controllers\Affiliate\LoginController;
use App\Http\Controllers\Affiliate\SettingsController;
use App\Http\Controllers\Affiliate\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// --- GUEST ROUTES (PUBLIC) ---
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/tentang', function () { return view('about'); })->name('about');
Route::get('/layanan', function () { return view('services'); })->name('services');

Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/web-perusahaan', function () { return view('layanan.web-perusahaan'); })->name('perusahaan');
    Route::get('/web-toko', function () { return view('layanan.web-toko'); })->name('toko');
    Route::get('/web-katalog-produk', function () { return view('layanan.web-katalog-produk'); })->name('katalog-produk');
    Route::get('/web-rental', function () { return view('layanan.web-rental'); })->name('rental');
});

Route::get('/affiliate', function () { return view('affiliate'); })->name('affiliate');
Route::get('/portofolio', function () { return view('portofolio'); })->name('portofolio');
Route::get('/tanya-jawab', function () { return view('faq'); })->name('faq');

// --- AFFILIATE AUTH (GUEST ONLY) ---
Route::middleware('guest:affiliate')->group(function () {
    Route::get('/register', function () { return view('affiliate.register'); })->name('affiliate.register');
    Route::post('/register', [RegisterController::class, 'store'])->name('affiliate.register.store');
    Route::get('/login', function() { return view('affiliate.login'); })->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
});

// --- 1. EMAIL VERIFICATION ROUTES ---
// SANGAT PENTING: Jangan beri prefix name 'affiliate.' di sini agar Laravel mengenali 'verification.notice'
Route::middleware('auth:affiliate')->group(function () {
    
    Route::get('/email/verify', function () {
        return view('affiliate.verify-email'); 
    })->name('verification.notice'); // Link tujuan otomatis jika user belum verified

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->route('affiliate.dashboard')->with('success', 'Email berhasil diverifikasi!');
    })->middleware('signed')->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Link verifikasi baru telah dikirim!');
    })->middleware('throttle:6,1')->name('verification.send');

    // Route Logout (Bisa dipanggil via route('logout'))
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// --- 2. AFFILIATE DASHBOARD AREA (DENGAN PREFIX & MIDDLEWARE VERIFIED) ---
Route::prefix('affiliate')->name('affiliate.')->group(function () {
    
    Route::middleware(['auth:affiliate', 'verified'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
    });

    // Alias logout agar route('affiliate.logout') juga bekerja jika kamu menggunakannya di sidebar
    Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:affiliate')->name('logout');
});