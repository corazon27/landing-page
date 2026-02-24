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

Route::get('/portofolio', function () {
    return view('portofolio');
})->name('portofolio');

Route::get('/tanya-jawab', function () {
    return view('faq');
})->name('faq');