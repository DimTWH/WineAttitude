<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('accueil');
});

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/lupi', function () {
    return view('vin/lupi');
})->name('lupi');
Route::get('/Aurore-Rara-Neagra', function () {
    return view('vin/aurore-rara-neagra');
})->name('aurore-rara-neagra');
Route::get('/Tewa-Feteasca-Neagra', function () {
    return view('vin/tewa-feteasca-neagra');
})->name('tewa-feteasca-neagra');
Route::get('/Kara-Gani-Ciotra', function () {
    return view('vin/ciotra');
})->name('kara-gani-ciotra');
Route::get('/Selection-Feteasca-Regala', function () {
    return view('vin/selection-feteasca-regala');
})->name('selection-feteasca-regala');