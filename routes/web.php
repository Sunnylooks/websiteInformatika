<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('Beranda/beranda');
});

Route::get('/beranda', function () {
    return view('Beranda/beranda');
});

Route::get('/lainnya', function () {
    return view('lain_lainnya/lain_lainnya');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa/mhs');
});

Route::get('/mahasiswa/news', function () {
    return view('mahasiswa/news');
});

Route::get('/pendidikan', function () {
    return view('pendidikan/pendidikan');
});

Route::get('/profil', function () {
    return view('profil/profil');
});
Route::get('/riset', function () {
    return view('riset/riset');
});

Route::get('/berita', function () {
    return view('berita/berita');
});

Route::get('/admin', function () {
    return view('admin/mahasiswa/index');
});

Route::get('/admin/pegawai', function () {
    return view('admin.pegawai.pegawai');
});

Route::get('/admin/pegawai/tambah', function () {
    return view('admin.pegawai.tambah');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);