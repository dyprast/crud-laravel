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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('siswa')->group(function (){
	Route::get('/', 'SiswaController@index');
	Route::get('/tambah_siswa' ,'SiswaController@add');
	Route::post('/simpan_siswa', 'SiswaController@save');
	Route::get('/count_jurusan/{jurusan_id}', 'SiswaController@countJurusan');
	Route::get('/ubah_siswa/{id}', 'SiswaController@edit');
	Route::post('/update_siswa/{id}', 'SiswaController@update');
	Route::get('/delete/{id}', 'SiswaController@delete');
	Route::get('/min_count_jurusan/{id}/{jurusan_id}', 'SiswaController@minCountJurusan');
});

Route::prefix('kelas')->group(function (){
	Route::get('/', 'KelasController@index');
	Route::get('/tambah_kelas' ,'KelasController@add');
	Route::post('/simpan_kelas', 'KelasController@save');
	Route::get('/ubah_kelas/{id}', 'KelasController@edit');
	Route::post('/update_kelas/{id}', 'KelasController@update');
	Route::get('/delete/{id}', 'KelasController@delete');
});

Route::prefix('jurusan')->group(function (){
	Route::get('/', 'JurusanController@index');
	Route::get('/tambah_jurusan' ,'JurusanController@add');
	Route::post('/simpan_jurusan', 'JurusanController@save');
	Route::get('/ubah_jurusan/{id}', 'JurusanController@edit');
	Route::post('/update_jurusan/{id}', 'JurusanController@update');
	Route::get('/delete/{id}', 'JurusanController@delete');
});



