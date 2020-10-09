<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', 'MahasiswaController@index')->name('index2_mahasiswa');
Route::get('/mahasiswa', 'MahasiswaController@index')->name('index_mahasiswa');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('create_mahasiswa');
Route::post('/mahasiswa/store', 'MahasiswaController@store')->name('store_mahasiswa');
Route::get('/mahasiswa/edit/{name}', 'MahasiswaController@edit');
Route::post('/mahasiswa/update', 'MahasiswaController@update');
