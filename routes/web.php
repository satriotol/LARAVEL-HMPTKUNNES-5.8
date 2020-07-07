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

Route::get('/','beritakitaController@home');
Route::get('/cari','beritakitaController@cari');
Route::post('/kirimpesan','beritakitaController@kirimpesan');
Route::get('/lihatberita/{id}','beritakitaController@lihatberita');

// article
Route::get('/article','beritakitaController@article');
Route::get('article/event','beritakitaController@event');
Route::get('article/chemist','beritakitaController@chemist');
Route::get('article/advokasi','beritakitaController@advokasi');
Route::get('article/oprec','beritakitaController@oprec');
Route::get('article/materi','beritakitaController@materi');
Route::get('article/cerc','beritakitaController@cerc');
Route::get('article/store','beritakitaController@store');
// end of article

// chemengfair
Route::get('/chemengfair','beritakitaController@chemengfair');
Route::get('/chemengfair/semnas','beritakitaController@semnas');
Route::get('/chemengfair/iso','beritakitaController@iso');
Route::get('/chemengfair/cesa','beritakitaController@cesa');
Route::get('/chemengfair/s2c','beritakitaController@s2c');
Route::get('/chemengfair/ception','beritakitaController@ception');
Route::get('/chemengfair/chemengawards','beritakitaController@chemengawards');
// end of chemengfair

// Departement
Route::get('/departemen','beritakitaController@departemen');
Route::get('/departemen/ga','beritakitaController@ga');
Route::get('/departemen/hrd','beritakitaController@hrd');
Route::get('/departemen/prc','beritakitaController@prc');
Route::get('/departemen/sed','beritakitaController@sed');
Route::get('/departemen/rnt','beritakitaController@rnt');
Route::get('/departemen/std','beritakitaController@std');
Route::get('/departemen/socdev','beritakitaController@socdev');
Route::get('/departemen/techno','beritakitaController@techno');
// end of chemengfair

// kabinet
Route::get('/kabinet','beritakitaController@kabinet');
Route::get('/kabinet/kontribusi','beritakitaController@kontribusi');
Route::get('/kabinet/prestasi','beritakitaController@prestasi');
Route::get('/kabinet/inovasi','beritakitaController@inovasi');
Route::get('/kabinet/elaborasi','beritakitaController@elaborasi');
// end of kabinet

Route::get('/alumni','beritakitaController@alumni');
Route::post('/alumni/store','beritakitaController@alumnistore');
Route::get('/aboutus','beritakitaController@aboutus');
Route::get('/kontak','beritakitaController@kontak');
Route::get('/departemen','beritakitaController@departemen');