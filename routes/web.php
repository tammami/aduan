<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'AuthController@index');
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@index']);
Route::get('/auth', 'AuthController@show');

Route::middleware(['auth'])->group(function () {
    Route::get('/auth/logout', 'AuthController@logout');
    Route::get('/dashboard', 'BidangController@index'); //Ganti sementara
    Route::post('/dashboard', 'DashboardController@storePenjadwalan');

    // Pengguna
    Route::resource('pengguna', 'PenggunaController');

    // Kode Lokasi
    Route::get('/unit', 'UnitController@index');
    Route::get('/unit_create', 'UnitController@create');
    Route::post('/unit', 'UnitController@store');
    Route::get('/unit_edit/{id}', 'UnitController@edit');
    Route::patch('/unit', 'UnitController@update');

    Route::get('/wilayah', 'WilayahController@index');
    Route::get('/direktorat', 'DirektoratController@index');
    Route::get('/bidang', 'BidangController@index');
    Route::get('/sub_bidang', 'SubBidangController@index');
    Route::get('/jenis_aduan', 'JenisAduanController@index');
    
    // Kode Aset
    Route::get('/aset_golongan', 'AsetGolonganController@index');
    Route::get('/aset_golongan_create', 'AsetGolonganController@create');
    Route::post('/aset_golongan', 'AsetGolonganController@store');
    Route::get('/aset_golongan_edit/{id}', 'AsetGolonganController@edit');
    Route::patch('/aset_golongan', 'AsetGolonganController@update');

    Route::get('/aset_bidang', 'AsetBidangController@index');
    Route::get('/aset_bidang_create', 'AsetBidangController@create');
    Route::post('/aset_bidang', 'AsetBidangController@store');
    Route::get('/aset_bidang_edit/{id}', 'AsetBidangController@edit');
    Route::patch('/aset_bidang', 'AsetBidangController@update');
    
    Route::get('/aset_kelompok', 'AsetKelompokController@index');
    Route::get('/aset_kelompok_create', 'AsetKelompokController@create');
    Route::post('/aset_kelompok', 'AsetKelompokController@store');
    Route::get('/aset_kelompok_edit/{id}', 'AsetKelompokController@edit');
    Route::patch('/aset_kelompok', 'AsetKelompokController@update');

    Route::get('/aset_sub_kelompok', 'AsetSubKelompokController@index');
    Route::get('/aset_sub_kelompok_create', 'AsetSubKelompokController@create');
    Route::post('/aset_sub_kelompok', 'AsetSubKelompokController@store');
    Route::get('/aset_sub_kelompok_edit/{id}', 'AsetSubKelompokController@edit');
    Route::patch('/aset_sub_kelompok', 'AsetSubKelompokController@update');

    Route::get('/aset_sub_sub_kelompok', 'AsetSubSubKelompokController@index');
    Route::get('/aset_sub_sub_kelompok_create', 'AsetSubSubKelompokController@create');
    Route::post('/aset_sub_sub_kelompok', 'AsetSubSubKelompokController@store');
    Route::get('/aset_sub_sub_kelompok_edit/{id}', 'AsetSubSubKelompokController@edit');
    Route::patch('/aset_sub_sub_kelompok', 'AsetSubSubKelompokController@update');

    // Input Data KIB
    Route::get('/golongan_tanah', 'GolonganTanahController@index');
    Route::post('/golongan_tanah', 'GolonganTanahController@store');
    
    Route::get('/golongan_bangunan_gedung', 'GolonganBangunanGedungController@index');
    Route::post('/golongan_bangunan_gedung', 'GolonganBangunanGedungController@store');

    Route::get('/golongan_peralatan_mesin', 'GolonganPeralatanMesinController@index');
    Route::post('/golongan_peralatan_mesin', 'GolonganPeralatanMesinController@store');
    
    Route::get('/golongan_jaringan_perpipaan', 'GolonganJaringanPerpipaanController@index');
    Route::post('/golongan_jaringan_perpipaan', 'GolonganJaringanPerpipaanController@store');

    Route::get('/golongan_aset_tetap_lainnya', 'GolonganAsetTetapLainnyaController@index');
    Route::post('/golongan_aset_tetap_lainnya', 'GolonganAsetTetapLainnyaController@store');

    Route::get('/golongan_konstruksi', 'GolonganKonstruksiController@index');
    Route::post('/golongan_konstruksi', 'GolonganKonstruksiController@store');

    Route::resource('pengguna', 'PenggunaController');
});
