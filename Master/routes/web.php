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

Route::get('/','PageController@index');
Route::get('/pencarian','PageController@pencarian')->name('pencarian.cari');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'perusahaan','middleware'=>'auth'], function(){
    // PERUSAHAAN ROUTE
    Route::get('/', 'PerusahaanController@index')->name('perusahaan.index');
    Route::post('/avatar', 'PerusahaanController@update_avatar')->name('perusahaan.avatar');
    Route::get('/store', 'PerusahaanController@store')->name('perusahaan.store');
    Route::post('/update', 'PerusahaanController@update')->name('perusahaan.update');
    Route::get('/informasi', 'InformasiController@index')->name('informasiperusahaan.index');
    Route::post('/informasi', 'InformasiController@update')->name('informasiperusahaan.update');
    Route::get('/buatmagang', 'BuatmagangController@index')->name('buatmagangperusahaan.index');
    Route::post('/buatmagang', 'BuatmagangController@update')->name('buatmagangperusahaan.update');
    Route::get('/terhubung', 'TerhubungController@index')->name('terhubungperusahaan.index');
    Route::get('/keamanan', 'KeamananController@index')->name('keamananperusahaan.index');
    Route::post('/keamanan', 'KeamananController@store')->name('keamananperusahaan.store');
    Route::get('/bantuan', 'BantuanController@index')->name('bantuanperusahaan.index');
    // END PERUSAHAAN ROUTE
});


Route::group(['prefix'=>'siswa','middleware'=>'auth'], function(){
    // SISWA ROUTE
    Route::get('/', 'SiswaProfilController@index')->name('siswa.index');
    Route::post('/avatar', 'SiswaProfilController@update_avatar')->name('siswa.avatar');
    Route::get('/store', 'SiswaProfilController@store')->name('siswa.store');
    Route::post('/informasi', 'SiswaProfilController@update')->name('siswa.update');
    Route::get('/favorite', 'SiswaFavoriteController@index')->name('siswafavorite.index');
    Route::get('/tawaran', 'SiswaTawaranController@index')->name('siswatawaran.index');
    Route::get('/bantuan', 'SiswaBantuanController@index')->name('siswabantuan.index');
    // END SISWA ROUTE
});


Route::group(['prefix'=>'caristudy'] , function(){
    // STUDY ROUTE
    Route::get('/', 'CariStudyController@index')->name('caristudy.index');
    Route::get('/info', 'InfoStudyController@index')->name('info.index');
    Route::get('/info/universitas', 'UniversitasController@index')->name('universitas.index');
    // END CARI STUDY ROUTE
});


Route::group(['prefix'=>'study'] , function(){
    //STUDY ROUTE
    Route::get('/', 'StudyController@index')->name('study.index');
    Route::get('/order', 'StudyOrderController@index')->name('order.index');
    Route::get('/materi', 'StudyMateriController@index')->name('materi.index');
    Route::get('/materi/download', 'StudyDownloadController@index')->name('download.index');
    // END CARI ROUTE
});



Route::group(['prefix'=>'job'] , function(){
// JOB
Route::get('/', 'JobController@index')->name('job.index');
// End JOB
});