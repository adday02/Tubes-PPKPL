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
Route::get('/', function () {
    return view('utama');
});
*/
Route::get('/','UtamaController@index');



//Login

//Instruktur
Route::resource('instruktur','ProfileInstrukturController')->middleware('auth:instruktur');
Route::resource('instruktur-jadwal','JadwalInstrukturController')->middleware('auth:instruktur');
Route::resource('instruktur-riwayatPembelajaran','RiwayatInstrukturController')->middleware('auth:instruktur');
//EndInstruktur


//Murid
Route::resource('murid','ProfileMuridController')->middleware('auth:murid');
Route::resource('murid-jadwal','JadwalMuridController')->middleware('auth:murid');
Route::resource('murid-jadwalsemua','JadwalSemuaMuridController')->middleware('auth:murid');
Route::resource('murid-riwayatPembelajaran','RiwayatMuridController')->middleware('auth:murid');
//EndMurid

//Admin
Route::resource('admin','DashboardController')->middleware('auth:admin');
Route::resource('admin-calonMurid','CalonMuridController')->middleware('auth:admin');
Route::resource('admin-murid','MuridController')->middleware('auth:admin');
Route::resource('admin-lulusan','LulusanController')->middleware('auth:admin');
Route::resource('admin-instruktur','InstrukturController')->middleware('auth:admin');
Route::resource('admin-paket','PaketController')->middleware('auth:admin');
Route::resource('admin-jadwal','JadwalController')->middleware('auth:admin');
Route::resource('admin-pemasukkan','PemasukkanController')->middleware('auth:admin');
Route::resource('admin-pengeluaran','PengeluaranController')->middleware('auth:admin');
Route::resource('admin-testimoni','TestimoniController')->middleware('auth:admin');
//EndAdmin

Route::get('/masuk',function(){
	return view('login');
})->middleware('guest');

Route::post('/kirimdata','LoginController@masuk')->name('login');
Route::get('/keluar','LoginController@keluar');

//EndLogin

//Daftar
Route::resource('daftar','DaftarController');
//EndDaftar

Route::get('/covid', 'CovidController@index')->name('covid');