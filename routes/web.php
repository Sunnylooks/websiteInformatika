<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pendidikan', function () {
    return view('pendidikan/pendidikan');
});

Route::get('/profil', function () {
    return view('profil/profil');
});
Route::get('/riset', function () {
    return view('riset/riset');
});