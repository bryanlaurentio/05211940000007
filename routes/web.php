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
//memanggil method get pada Object Route NamaObject::nama_method
Route::get('/welcome', function () {
    return view('welcome'); //menampilkan file dengan nama welcome.blade.php yang ada di folder view
})->name('welcome') ;

Route::get('/halo', function () { return view('coba'); })->name('halo') ;

Route::get('/web', 'PegawaiController@coba');


Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pendapatan', 'PendapatanController@index');
Route::get('/meja', 'MejaController@index');
Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/pegawai/read/{id}', 'PegawaiController@read');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::get('/pendapatan/tambahpendapatan','PendapatanController@tambah');
Route::get('/meja/tambah','MejaController@tambah');
Route::get('/mahasiswa/tambah','MahasiswaController@tambah');

Route::post('/pegawai/store','PegawaiController@store');
Route::post('/pendapatan/storependapatan','PendapatanController@store');
Route::post('/meja/store','MejaController@store');
Route::post('/mahasiswa/store','MahasiswaController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::get('/pendapatan/editpendapatan/{id}','PendapatanController@edit');
Route::get('/meja/edit/{id}','MejaController@edit');

Route::post('/pegawai/update','PegawaiController@update');
Route::post('/pendapatan/updatependapatan','PendapatanController@update');
Route::post('/meja/update','MejaController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pendapatan/hapuspendapatan/{id}','PendapatanController@hapus');
Route::get('/meja/hapus/{id}','MejaController@hapus');
Route::get('/mahasiswa/hapus/{id}','MahasiswaController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pendapatan/caripendapatan','PendapatanController@cari');
Route::get('/meja/cari','MejaController@cari');
Route::get('/mahasiswa/cari','MahasiswaController@cari');

