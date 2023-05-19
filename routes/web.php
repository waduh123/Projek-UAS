<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/mobile-lagends', function () {
    return view('ml');
});
Route::get('/free-fire', function () {
    return view('ff');
});
Route::get('/pubg', function () {
    return view('pubg');
});
Route::get('/genshin-impact', function () {
    return view('gi');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/input', function () {
    return view('input');
});
Route::get('/cek-pesanan', function () {
    return view('cp');
});
