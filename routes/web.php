<?php

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
    return view('welcome');
});


// -------------------------- Siswa ------------------------------
Route::get('/artikel','ArtikelController@index')->name('artikel.index');





// -------------------------- Admin ------------------------------
Route::get('/admin/artikel','AdminArtikelController@index')->name('adminartikel.index');
Route::get('/admin/artikel/tambah','AdminTambahArtikelController@index')->name('admintambahartikel.index');