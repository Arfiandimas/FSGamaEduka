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

Route::group(['prefix'=>'artikel'] , function(){
    Route::get('/','ArtikelController@index')->name('artikel.index');
    Route::get('/show/kategori={id}','ArtikelController@index_by_kategory')->name('artikel.bycategory');
    Route::get('/show/artikel/{article}','ArtikelController@show')->name('artikel.show');
});





// -------------------------- Admin ------------------------------
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/','AdminArtikelController@index')->name('adminartikel.index');
    Route::get('/password','GantiPasswordController@index')->name('password.index');
    Route::post('/password','GantiPasswordController@changePassword')->name('password.changePassword');

    Route::group(['prefix'=>'artikel'] , function(){
        Route::get('/tambah','AdminArtikelController@create')->name('tambahartikel.create');
        Route::post('/tambah','AdminArtikelController@store')->name('tambahartikel.store');
        Route::get('/{id}/edit','AdminArtikelController@edit')->name('tambahartikel.edit');
        Route::post('/{id}/update','AdminArtikelController@update')->name('tambahartikel.update');
        Route::get('/{id}/delete','AdminArtikelController@destroy')->name('hapusartikel.destroy');
    });

    Route::group(['prefix'=>'program'] , function(){
        Route::get('/','ProgramController@index')->name('program.index');
        Route::get('/tambah','ProgramController@create')->name('program.create');
        Route::post('/tambah','ProgramController@store')->name('program.store');
        Route::get('/{id}/edit','ProgramController@edit')->name('editprogram.edit');
        Route::post('/{id}/update','ProgramController@update')->name('program.update');
        Route::get('/{id}/delete','ProgramController@destroy')->name('hapusprogram.destroy');
    });

    Route::group(['prefix'=>'testimoni'] , function(){
        Route::get('/', 'AdminTestimoniController@index')->name('admin_testimoni.index');
        Route::get('/tambah', 'AdminTestimoniController@create')->name('tambah_testimoni.create');
        Route::post('/tambah', 'AdminTestimoniController@store')->name('tambah_testimoni.store');
        Route::get('/{id}/edit', 'AdminTestimoniController@edit')->name('edit_testimoni.edit');
        Route::post('/{id}/update', 'AdminTestimoniController@update')->name('update_testimoni.update');
        Route::get('/{id}/delete', 'AdminTestimoniController@destroy')->name('delete_testimoni.destroy');
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