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

//Registrasi
Route::get('/','MasyarakatController@index')->name('masyarakat.index');
Route::get('/register','Auth\\RegisterController@RegisterFormMasyarakat');
Route::post('register/store','Auth\RegisterController@RegisterMasyarakat')->name('masyarakat.register');
Route::get('admin/register','Auth\RegisterController@RegisterFormAdmin');
Route::post('admin/store','Auth\RegisterController@RegisterAdmin')->name('petugas.register');

//login
Route::get('login','Auth\\LoginController@FormLoginMasyarakat');
Route::post('login','Auth\LoginController@LoginMasyarakat')->name('masyarakat.login');
Route::get('/petugas/login','Auth\LoginController@FormLoginpetugas');
Route::post('petugas/login/create','Auth\LoginController@Loginpetugas')->name('petugas.login');





Route::middleware('masyarakat')->group(function(){
    Route::get('pengaduan','MasyarakatController@FormPengaduan');
    Route::post('pengaduan/simpan','MasyarakatController@simpanPengaduan')->name(
        'masyarakat.pengaduan');
    Route::get('laporan_pengaduan','MasyarakatController@laporanku');
    Route::get('logout','MasyarakatController@logout');
    Route::get('laporan_pengaduan/detailLaporan/{id}','MasyarakatController@detailLaporan');


});

Route::get('petugas/pengaduan','PetugasController@tampilPengaduan');
Route::get('petugas','PetugasController@index')->name('petugas.index');

Route::get('petugas/pengaduan/{id}','PetugasController@detailpengaduan')->name(
    'petugas.detailpengaduan');
Route::get('petugas/destroy/{id}','PetugasController@destroypengaduan')->name(
        'petugas.destroypengaduan');
Route::get('petugas/detailpengaduan/{id}/tanggapan','TanggapanController@FormTanggapan');
Route::post('petugas/detailpengaduan/{id}/tanggapan/store','TanggapanController@storeTanggapan')->
name('petugas.tanggapan');
Route::post('petugas/detailpengaduan/onchange/{id}','PetugasController@StatusOnChange')->
name('petugas.StatusOnChange');



Route::get('Admin/pengaduan','AdminController@tampilPengaduan');
Route::get('admin','AdminController@index')->name('admin.index');
Route::get('admin/pengaduan/{id}','AdminController@detailpengaduan')->name(
    'admin.detailpengaduan');
Route::get('admin/pengaduans/pdf','AdminController@cetakPdf')->name('admin.pdf');
Route::get('admin/pengaduans/pdf{id}','AdminController@detailpdf')->name('admin.detailpdf');





Route::middleware('petugas')->group(function(){
    Route::resource('petugas', 'PetugasController')->except('show');







});

Route::middleware('admin')->group(function(){

    Route::resource('admin', 'AdminController');




});




