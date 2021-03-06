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

Route::get('/', function () {
    return view('index');
});

Route:: get('/member' , 'MemberController@index' );
Route:: get('/member/tambah' , 'MemberController@tambah' );
Route:: post('/member/store' , 'MemberController@store' );
Route:: get('/member/edit/{id}' , 'MemberController@edit' );
Route:: post('/member/update' , 'MemberController@update' );
Route:: get('/member/hapus/{id}' , 'MemberController@hapus' );
Route:: get('/member/cari' , 'MemberController@cari' );

// CRUD : Eloquent ORM
Route:: get('/pegawai' , 'PegawaiController@index' );
Route:: get('/pegawai/tambah' , 'PegawaiController@tambah' );
Route:: post('/pegawai/store' , 'PegawaiController@store' );
Route:: get('/pegawai/edit/{id}' , 'PegawaiController@edit' );
Route:: put('/pegawai/update/{id}' , 'PegawaiController@update' );
Route:: get('/pegawai/hapus/{id}' , 'PegawaiController@hapus' );

Route:: get('pengguna' , 'PenggunaController@index' );