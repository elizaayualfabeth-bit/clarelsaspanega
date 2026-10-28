<?php

use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/pengumuman', function () {
    return view('pengumuman');
});
Route::get('/spanega', function () {
    return view('spanega');
});