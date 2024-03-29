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
Route::get('/about','UtamaController@about')->name('utama.about');
Route::get('/testimoni','UtamaController@testimoni')->name('utama.testimoni');
Route::get('/daftar','PendaftaranSiswaController@create')->name('daftar.create');
Route::post('/daftar','PendaftaranSiswaController@store')->name('daftar.store');


Route::group(['prefix'=>'artikel'] , function(){
    Route::get('/','ArtikelController@index')->name('artikel.index');
    Route::get('/show/kategori={id}','ArtikelController@index_by_kategory')->name('artikel.bycategory');
    Route::get('/show/{article}','ArtikelController@show')->name('artikel.show');
    Route::get('/search','ArtikelController@search')->name('article.search');
});


// -------------------------- Admin ------------------------------
Route::group(['prefix'=>'admingamaeduka','middleware'=>'auth'], function(){
    Route::get('/','AdminArtikelController@index')->name('adminartikel.index');
    Route::get('/password','GantiPasswordController@index')->name('password.index');
    Route::post('/password','GantiPasswordController@changePassword')->name('password.changePassword');
    Route::get('/search','AdminArtikelController@search')->name('adminarticle.search');

    Route::group(['prefix'=>'artikel'] , function(){
        Route::get('/tambah','AdminArtikelController@create')->name('tambahartikel.create');
        Route::post('/tambah','AdminArtikelController@store')->name('tambahartikel.store');
        Route::get('/{id}/edit','AdminArtikelController@edit')->name('tambahartikel.edit');
        Route::post('/{id}/update','AdminArtikelController@update')->name('tambahartikel.update');
        Route::get('/{id}/delete','AdminArtikelController@destroy')->name('hapusartikel.destroy');
        Route::get('/categories','AdminArtikelController@category')->name('categories.category');
        Route::post('/categories/tambahcategory','AdminArtikelController@tambahcategory')->name('tambahcategory.tambahcategory');
        Route::get('/categories/{id}/hapuscategory','AdminArtikelController@hapuscategory')->name('hapuscategory.hapuscategory');
    });

    Route::group(['prefix'=>'program'] , function(){
        Route::get('/','ProgramController@index')->name('program.index');
        Route::get('/tambah','ProgramController@create')->name('program.create');
        Route::post('/tambah','ProgramController@store')->name('program.store');
        Route::get('/{id}/edit','ProgramController@edit')->name('editprogram.edit');
        Route::post('/{id}/update','ProgramController@update')->name('program.update');
        Route::get('/{id}/delete','ProgramController@destroy')->name('hapusprogram.destroy');
        Route::get('/{id}/restore','ProgramController@restore')->name('restoreprogram.restore');
    });

    Route::group(['prefix'=>'testimoni'] , function(){
        Route::get('/', 'AdminTestimoniController@index')->name('admin_testimoni.index');
        Route::get('/tambah', 'AdminTestimoniController@create')->name('tambah_testimoni.create');
        Route::post('/tambah', 'AdminTestimoniController@store')->name('tambah_testimoni.store');
        Route::get('/{id}/edit', 'AdminTestimoniController@edit')->name('edit_testimoni.edit');
        Route::post('/{id}/update', 'AdminTestimoniController@update')->name('update_testimoni.update');
        Route::get('/{id}/delete', 'AdminTestimoniController@destroy')->name('delete_testimoni.destroy');
    });

    Route::group(['prefix'=>'siswa'] , function(){
        Route::get('/', 'PendaftaranSiswaController@index')->name('siswa.index');
        Route::get('/getdatasiswa', 'PendaftaranSiswaController@getdatasiswa')->name('getdatasiswa.getdatasiswa');
        Route::get('/{id}/edit', 'PendaftaranSiswaController@edit')->name('edit_siswa.edit');
        Route::post('/{id}/update', 'PendaftaranSiswaController@update')->name('update_siswa.update');
        Route::get('/{id}/delete', 'PendaftaranSiswaController@destroy')->name('delete_siswa.destroy');
        Route::get('/{foto}/download', 'PendaftaranSiswaController@downloadFoto')->name('download.downloadFoto');
    });

    
    
});

Route::group(['prefix'=>'admingamaeduka'] , function(){
Auth::routes();
// Auth::routes(['register' => false]);
});