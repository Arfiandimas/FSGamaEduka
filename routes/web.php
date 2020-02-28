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

// Route::get('/', function () {
//     return view('welcome');
// });


// -------------------------- Siswa ------------------------------
Route::get('/','UtamaController@index')->name('utama.index');
Route::get('/artikel','ArtikelController@index')->name('artikel.index');





// -------------------------- Admin ------------------------------
Route::get('/admin/artikel','AdminArtikelController@index')->name('adminartikel.index');
Route::get('/admin/artikel/tambah','AdminArtikelController@create')->name('tambahartikel.create');
Route::post('/admin/artikel/tambah','AdminArtikelController@store')->name('tambahartikel.store');
Route::get('/admin/artikel/{id}/edit','AdminArtikelController@edit')->name('tambahartikel.edit');
Route::post('/admin/artikel/{id}/edit','AdminArtikelController@update')->name('tambahartikel.update');
Route::get('/admin/artikel/{id}/delete','AdminArtikelController@destroy')->name('hapusartikel.destroy');