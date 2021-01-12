<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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


Route::get('/', 'Controller@welcome');
Route::get('/mahasiswa/create', 'MahasiswaController@createMhs');
Route::get('/matkul/create', 'MatkulController@createMatkul');
Route::get('/transkrip/create', 'TranskripController@createTranskrip');

Route::get('/matkul', 'MatkulController@viewMatkuls');
Route::get('/mhs', 'MahasiswaController@viewMahasiswa');
Route::get('/transkrip', 'TranskripController@viewTranskrip');
Route::get('/transkrip/home', 'TranskripController@viewNIM');
//Route::get('/transkrip/mtkl', 'TranskripController@viewMatkul');


Route::post('/mhs/store', 'MahasiswaController@store');
Route::post('/matkul/store', 'MatkulController@store');
Route::post('/transkrip/store', 'TranskripController@store');

Route::post('/update/mhs/{id}', 'MahasiswaController@update');
Route::post('/update/matkul/{id}', 'MatkulController@update');
Route::post('/update/transkrip/{id}', 'TranskripController@update');

Route::get('/edit/mhs/{id}', 'MahasiswaController@edit');
Route::get('/edit/matkul/{id}', 'MatkulController@edit');
Route::get('/edit/transkrip/{id}', 'TranskripController@edit');

Route::delete('/delete/mhs/{id}', 'MahasiswaController@delete');
Route::delete('/delete/matkul/{id}', 'MatkulController@delete');
Route::delete('/delete/transkrip/{id}', 'TranskripController@delete');

Route::get('/productdtl-pdf','TranskripController@generatePDF');