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

Route::group(['prefix'=>'artikel'] , function(){
    Route::get('/','ArtikelController@index')->name('artikel.index');
    Route::get('/show/kategori={id}','ArtikelController@index_by_kategory')->name('artikel.bycategory');
});





// -------------------------- Admin ------------------------------
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/','AdminArtikelController@index')->name('adminartikel.index');

    Route::group(['prefix'=>'artikel'] , function(){
        Route::get('/tambah','AdminArtikelController@create')->name('tambahartikel.create');
        Route::post('/tambah','AdminArtikelController@store')->name('tambahartikel.store');
        Route::get('/{id}/edit','AdminArtikelController@edit')->name('tambahartikel.edit');
        Route::post('/{id}/edit','AdminArtikelController@update')->name('tambahartikel.update');
        Route::get('/{id}/delete','AdminArtikelController@destroy')->name('hapusartikel.destroy');
    });

    
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');