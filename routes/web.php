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

Route::group(['prefix'=>'artikel'] , function(){
    Route::get('/','ArtikelController@index')->name('artikel.index');
    Route::get('/show/kategori={id}','ArtikelController@index_by_kategory')->name('artikel.bycategory');
    Route::get('/show/artikel/{article}','ArtikelController@show')->name('artikel.show');
});





// -------------------------- Admin ------------------------------
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/','AdminArtikelController@index')->name('adminartikel.index');
    Route::get('/password','GantiPasswordController@index')->name('password.index');

    Route::group(['prefix'=>'artikel'] , function(){
        Route::get('/tambah','AdminArtikelController@create')->name('tambahartikel.create');
        Route::post('/tambah','AdminArtikelController@store')->name('tambahartikel.store');
        Route::get('/{id}/edit','AdminArtikelController@edit')->name('tambahartikel.edit');
        Route::post('/{id}/update','AdminArtikelController@update')->name('tambahartikel.update');
        Route::get('/{id}/delete','AdminArtikelController@destroy')->name('hapusartikel.destroy');
    });

    
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::group(array('before' => 'auth'), function ()
// {
//     Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
//     Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\LfmController@upload');

// });

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });