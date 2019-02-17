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

Route::get('/', 'indexController@index');

Route::get('karcis', 'Karcis@index');

Route::get('scan',  'ProdukController@index')->name('scan');
Route::put('scan',  'ProdukController@scanFestival');

Route::get('cek', 'ProdukController@cek');
Route::post('cek', 'ProdukController@cekstatus');

Route::get('festival',  'ProdukController@makePDFfestival');
Route::get('deluxe',  'ProdukController@makePDFdeluxe');
Route::get('vip',  'ProdukController@makePDFvip');

