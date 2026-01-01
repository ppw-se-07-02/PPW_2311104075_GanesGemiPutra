<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnguidedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Project "budi-web" + tambahan untuk TUGAS UNGUIDED (Modul 11):
| - Router (tanpa parameter / dengan parameter / optional parameter)
| - View + pengelolaan assets
| - Blade loop
| - Controller -> View
|--------------------------------------------------------------------------
*/

// ====== Routes halaman utama project (tetap) ======
Route::view('/', 'index');

// Aliases untuk path .html (biar link lama tetap jalan)
Route::view('/tentang-kami.html', 'tentang-kami');
Route::view('/donasi.html', 'donasi');
Route::view('/berita.html', 'berita');
Route::view('/kontak-kami.html', 'kontak-kami');
Route::view('/anak.html', 'anak');
Route::view('/login.html', 'login');
Route::view('/berita-detail.html', 'berita-detail');
Route::view('/anak-detail.html', 'anak-detail');

// URL yang lebih rapi
Route::redirect('/tentang', '/tentang-kami.html');
Route::redirect('/donasi', '/donasi.html');
Route::redirect('/berita', '/berita.html');
Route::redirect('/kontak', '/kontak-kami.html');
Route::redirect('/anak', '/anak.html');
Route::redirect('/login', '/login.html');
Route::redirect('/berita-detail', '/berita-detail.html');
Route::redirect('/anak-detail', '/anak-detail.html');

// ====== TUGAS 2.1 VIEW + ASSETS ======
Route::view('/assets-demo', 'assets-demo');

// ====== TUGAS 3.1 BLADE LOOP (for/while/foreach) ======
Route::get('/mahasiswa', function () {
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswa', compact('nilai'));
});

// ====== TUGAS 4.1 CONTROLLER ======
Route::get('/u/controller', [UnguidedController::class, 'index']);

// ====== TUGAS 1.1 ROUTER ======
Route::prefix('/u')->group(function () {

    // 1) Minimal 5 route tanpa parameter
    Route::get('/home', fn () => 'Unguided: Halaman Home');
    Route::get('/about', fn () => 'Unguided: Halaman About');
    Route::get('/services', fn () => 'Unguided: Halaman Services');
    Route::get('/contact', fn () => 'Unguided: Halaman Contact');
    Route::get('/help', fn () => 'Unguided: Halaman Help');

    // 2) Minimal 3 route dengan parameter
    Route::get('/berita/{id}', function ($id) {
        return "Unguided: Detail Berita dengan id = $id";
    });
    Route::get('/anak/{id}', function ($id) {
        return "Unguided: Detail Anak dengan id = $id";
    });
    Route::get('/kategori/{nama}', function ($nama) {
        return "Unguided: Kategori = $nama";
    });

    // 3) Minimal 3 route dengan optional parameter
    Route::get('/kendaraan/{jenis?}/{merek?}', function ($jenis = 'motor', $merek = 'honda') {
        return "Unguided: Cek kendaraan $jenis $merek";
    });
    Route::get('/profil/{nama?}', function ($nama = 'Guest') {
        return "Unguided: Profil $nama";
    });
    Route::get('/halo/{nama?}', function ($nama = 'Dunia') {
        return "Unguided: Halo $nama";
    });
});

// Fallback (optional)
Route::fallback(function () {
    return response("Maaf, alamat tidak ditemukan", 404);
});
