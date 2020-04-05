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

// PERUSAHAAN ROUTE
Route::get('/perusahaan', 'PerusahaanController@index')->name('perusahaan.index');
Route::post('/avatar', 'PerusahaanController@update_avatar')->name('perusahaan.avatar');
Route::get('/perusahaan/store', 'PerusahaanController@store')->name('perusahaan.store');
Route::post('/perusahaan', 'PerusahaanController@update')->name('perusahaan.update');

Route::get('/perusahaan/informasi', 'InformasiController@index')->name('informasiperusahaan.index');
Route::post('/perusahaan/informasi', 'InformasiController@update')->name('informasiperusahaan.update');

Route::get('/perusahaan/buatmagang', 'BuatmagangController@index')->name('buatmagangperusahaan.index');
Route::post('/perusahaan/buatmagang', 'BuatmagangController@update')->name('buatmagangperusahaan.update');


Route::get('/perusahaan/terhubung', 'TerhubungController@index')->name('terhubungperusahaan.index');

Route::get('/perusahaan/keamanan', 'KeamananController@index')->name('keamananperusahaan.index');
Route::post('/perusahaan/keamanan', 'KeamananController@store')->name('keamananperusahaan.store');

Route::get('/perusahaan/bantuan', 'BantuanController@index')->name('bantuanperusahaan.index');
// END PERUSAHAAN ROUTE


// SISWA ROUTE
Route::get('/siswa', 'SiswaProfilController@index')->name('siswa.index');
Route::post('/siswa/avatar', 'SiswaProfilController@update_avatar')->name('siswa.avatar');
Route::get('/siswa/store', 'SiswaProfilController@store')->name('siswa.store');
Route::post('/siswa/informasi', 'SiswaProfilController@update')->name('siswa.update');

Route::get('/siswa/favorite', 'SiswaFavoriteController@index')->name('siswafavorite.index');

Route::get('/siswa/tawaran', 'SiswaTawaranController@index')->name('siswatawaran.index');

Route::get('/siswa/bantuan', 'SiswaBantuanController@index')->name('siswabantuan.index');
// END SISWA ROUTE

// STUDY ROUTE
Route::get('/caristudy', 'CariStudyController@index')->name('caristudy.index');
Route::get('/caristudy/info', 'InfoStudyController@index')->name('info.index');
Route::get('/caristudy/info/universitas', 'UniversitasController@index')->name('universitas.index');
Route::get('/study', 'StudyController@index')->name('study.index');
Route::get('/study/order', 'StudyOrderController@index')->name('order.index');
Route::get('/study/materi', 'StudyMateriController@index')->name('materi.index');
Route::get('/study/materi/download', 'StudyDownloadController@index')->name('download.index');
// END STUDY ROUTE