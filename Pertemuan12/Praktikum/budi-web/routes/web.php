<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasBesarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This app serves the original static HTML pages through Blade views,
| so the UI stays identical to the HTML version.
*/

// Main entry
Route::view('/', 'index');

// === Praktikum (Modul 15 / Tugas 12.2) - Insert demo untuk Tugas Besar ===
Route::get('/tb/insert-raw', [TugasBesarController::class, 'insertRaw']);
Route::get('/tb/insert-builder', [TugasBesarController::class, 'insertBuilder']);
Route::get('/tb/insert-eloquent', [TugasBesarController::class, 'insertEloquent']);


// Aliases for original .html paths (so existing links keep working)
Route::view('/index.html', 'index');
Route::view('/tentang-kami.html', 'tentang-kami');
Route::view('/donasi.html', 'donasi');
Route::view('/berita.html', 'berita');
Route::view('/kontak-kami.html', 'kontak-kami');
Route::view('/anak.html', 'anak');
Route::view('/login.html', 'login');
Route::view('/berita-detail.html', 'berita-detail');
Route::view('/anak-detail.html', 'anak-detail');

// (Optional) prettier URLs
Route::redirect('/tentang', '/tentang-kami.html');
Route::redirect('/donasi', '/donasi.html');
Route::redirect('/berita', '/berita.html');
Route::redirect('/kontak', '/kontak-kami.html');
Route::redirect('/anak', '/anak.html');
Route::redirect('/login', '/login.html');
Route::redirect('/berita-detail', '/berita-detail.html');
Route::redirect('/anak-detail', '/anak-detail.html');
