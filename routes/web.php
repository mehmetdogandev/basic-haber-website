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
    return view('index');
});
Route::get('/anasayfa', function () {
    return view('index');
});

Route::get('/gündem-haberleri', function () {
    return view('gundem');
});


Route::get('/spor-haberleri', function () {
    return view('spor');
});

Route::get('/ekonomi-haberleri', function () {
    return view('eko');
});

Route::get('/teknoloji-haberleri', function () {
    return view('tekno');
});
Route::get('/kultur-haberleri', function () {
    return view('kultur');
});

Route::get('/yapay-zeka-haberleri', function () {
    return view('yapayzeka');
});

Route::get('/metaverse-haberleri', function () {
    return view('metaverse');
});

Route::get('/sergiler-haberleri', function () {
    return view('sergi');
});

Route::get('/tiyatro-gosterimleri-haberleri', function () {
    return view('tytro');
});


Route::get('/konserler-haberleri', function () {
    return view('konserhbr');
});



