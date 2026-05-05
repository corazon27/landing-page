<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontArtikelController;

// rute admin
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\ArticleController as AdminArticle;
use App\Http\Controllers\Admin\CashFlowController as AdminCashFlow;

// rute affiliate
use App\Http\Controllers\Affiliate\RegisterController;
use App\Http\Controllers\Affiliate\LoginController;
use App\Http\Controllers\Affiliate\DashboardController;
use App\Http\Controllers\Affiliate\SettingsController;

// rute komentar
use App\Http\Controllers\CommentController;


use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// --- GUEST ROUTES (PUBLIC) ---
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/tentang', function () { return view('about'); })->name('about');
Route::get('/layanan', function () { return view('services'); })->name('services');
Route::get('/hubungi-kami', function () { return view('kontak'); })->name('kontak');
Route::get('/fitur-web-kasir', function () { return view('fitur.fitur-kasir'); })->name('fitur.fitur-kasir');
Route::get('/fitur-web-ecommerce', function () { return view('fitur.fitur-ecommerce'); })->name('fitur.fitur-ecommerce');

Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/web-company-profile', function () { return view('layanan.web-perusahaan'); })->name('perusahaan');
    Route::get('/web-kasir', function () { return view('layanan.web-kasir'); })->name('kasir');
    Route::get('/web-katalog-produk', function () { return view('layanan.web-katalog-produk'); })->name('katalog-produk');
    Route::get('/web-booking', function () { return view('layanan.web-rental'); })->name('rental');
    Route::get('/web-ecommerce', function () { return view('layanan.web-ecommerce'); })->name('ecommerce');
});

Route::get('/affiliate', function () { return view('affiliate'); })->name('affiliate');
Route::get('/portofolio', function () { return view('portofolio'); })->name('portofolio');
Route::get('/tanya-jawab', function () { return view('faq'); })->name('faq');

// --- AFFILIATE AUTH (GUEST ONLY) ---
Route::middleware('guest:affiliate')->group(function () {
    Route::get('/affiliate/register', function () { return view('affiliate.register'); })->name('affiliate.register');
    Route::post('/affiliate/register', [RegisterController::class, 'store'])->name('affiliate.register.store');
    Route::get('/affiliate/login', function() { return view('affiliate.login'); })->name('affiliate.login');
    Route::post('/affiliate/login', [LoginController::class, 'login'])->name('affiliate.login.post');
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

// Rute Admin (Kendali Pusat)
Route::get('/kendali-pusat', [AdminLogin::class, 'showLoginForm'])->name('admin.login');
Route::post('/kendali-pusat', [AdminLogin::class, 'login']);

Route::middleware(['auth:admin'])->prefix('management-center')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
    Route::resource('cashflow', AdminCashFlow::class)->names([
        'index' => 'admin.cashflow.index',
        'create' => 'admin.cashflow.create',
        'store' => 'admin.cashflow.store'
    ]);

    // Rute Khusus untuk Upload Image CKEditor (karena tidak ada di resource standar)
    Route::post('/artikel/upload', [AdminArticle::class, 'uploadEditorImage'])->name('admin.articles.upload');
    
    Route::resource('articles', AdminArticle::class)->names([
        'index'   => 'admin.articles.index',
        'create'  => 'admin.articles.create',
        'store'   => 'admin.articles.store',
        'edit'    => 'admin.articles.edit',
        'update'  => 'admin.articles.update',
        'destroy' => 'admin.articles.destroy',
    ])->parameters([
        'articles' => 'id' // Agar tetap menggunakan {id} sesuai controller Anda
    ]);

    Route::get('/comments', [CommentController::class, 'index'])->name('admin.comments.index');
    Route::patch('/comments/{id}/approve', [CommentController::class, 'approve'])->name('admin.comments.approve');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('admin.comments.destroy');

    Route::post('/logout', [AdminLogin::class, 'logout'])->name('admin.logout');
});

Route::get('/artikel', [frontArtikelController::class, 'index'])->name('front.artikel.index');
Route::get('/artikel/{slug}', [frontArtikelController::class, 'show'])->name('front.artikel.detail');

Route::post('/articles/{id}/comments', [CommentController::class, 'store'])->name('comments.store');