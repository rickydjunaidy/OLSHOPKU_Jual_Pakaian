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
//login untuk customer
Route::get('/', 'HomeController@index');
Route::get('/produk', 'ProdukController@index');
Route::get('/produk/{id}', 'ProdukController@show');

Route::get('/profile', 'ProfileController@index');

Route::get('/order', 'OrderController@index');
Route::get('/pembayaran/{id}', 'OrderController@pembayaran');

Route::get('/detail_order/{id}', 'DetailOrderController@index');

//login untuk admin
Route::get('/admin', 'HomeController@adminindex');

Route::get('/admin/kategori', 'KategoriController@adminindex');

Route::get('/admin/kurir', 'KurirController@adminindex');

Route::get('/admin/user', 'UserController@adminindex');

Route::get('/admin/hak_akses', 'HakAksesController@adminindex');

Route::get('/admin/profile', 'ProfileController@adminindex');

Route::get('/admin/produk', 'ProdukController@adminindex');

Route::get('/admin/order', 'OrderController@adminindex');

Route::get('/admin/detailorder', 'DetailOrderController@adminindex');
