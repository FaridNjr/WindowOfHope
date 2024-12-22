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

Route::get('/anjing', function () {
    return view('anjing');
});

Route::get('/adopt', function () {
    return view('adopt');
});
Route::get('/AnjingBasenji', function () {
    return view('AnjingBasenji');
});
Route::get('/prettyRed', function () {
    return view('prettyRed');
});
Route::get('/kucingPersia', function () {
    return view('kucingPersia');
});
Route::get('/toyPoodle', function () {
    return view('toyPoodle');
});
Route::get('/domestik', function () {
    return view('domestik');
});
Route::get('/hamster1', function () {
    return view('hamster1');
});
Route::get('/anggora1', function () {
    return view('anggora1');
});
Route::get('/anj1', function () {
    return view('anj1');
});
Route::get('/anj2', function () {
    return view('anj2');
});
Route::get('/bunglon1', function () {
    return view('bunglon1');
});
Route::get('/dara1', function () {
    return view('dara1');
});
Route::get('/koi', function () {
    return view('koi');
});
Route::get('/kel1', function () {
    return view('kel1');
});
Route::get('/kura1', function () {
    return view('kura1');
});
Route::get('/bebek1', function () {
    return view('bebek1');
});
Route::get('/anj3', function () {
    return view('anj3');
});
Route::get('/cat1', function () {
    return view('cat1');
});
Route::get('/cat2', function () {
    return view('cat2');
});
Route::get('/kel2', function () {
    return view('kel2');
});
Route::get('/kel3', function () {
    return view('kel3');
});
Route::get('/kucingM', function () {
    return view('/kucingM');
});



