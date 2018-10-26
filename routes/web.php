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

Route::get('/admin/user', 'UserController@adminindex');

Route::get('/admin/kategori', 'KategoriController@adminindex');
Route::get('/admin/kategori/show/{id}', 'KategoriController@adminshow');
Route::get('/admin/kategori/add', 'KategoriController@adminadd');
Route::post('/admin/kategori/store', 'KategoriController@adminstore');
Route::get('/admin/kategori/edit/{id}', 'KategoriController@adminedit');
Route::put('/admin/kategori/update', 'KategoriController@adminupdate');
Route::delete('/admin/kategori/destroy/{id}', 'KategoriController@admindestroy');

Route::get('/admin/kurir', 'KurirController@adminindex');
Route::get('/admin/kurir/show/{id}', 'KurirController@adminshow');
Route::get('/admin/kurir/add', 'KurirController@adminadd');
Route::post('/admin/kurir/store', 'KurirController@adminstore');
Route::get('/admin/kurir/edit/{id}', 'KurirController@adminedit');
Route::put('/admin/kurir/update', 'KurirController@adminupdate');
Route::delete('/admin/kurir/destroy/{id}', 'KurirController@admindestroy');

Route::get('/admin/hak_akses', 'HakAksesController@adminindex');
Route::get('/admin/hak_akses/show/{id}', 'HakAksesController@adminshow');
Route::get('/admin/hak_akses/add', 'HakAksesController@adminadd');
Route::post('/admin/hak_akses/store', 'HakAksesController@adminstore');
Route::get('/admin/hak_akses/edit/{id}', 'HakAksesController@adminedit');
Route::put('/admin/hak_akses/update', 'HakAksesController@adminupdate');
Route::delete('/admin/hak_akses/destroy/{id}', 'HakAksesController@admindestroy');

Route::get('/admin/profile', 'ProfileController@adminindex');
Route::get('/admin/profile/show/{id}', 'ProfileController@adminshow');
Route::get('/admin/profile/add', 'ProfileController@adminadd');
Route::post('/admin/profile/store', 'ProfileController@adminstore');
Route::get('/admin/profile/edit/{id}', 'ProfileController@adminedit');
Route::put('/admin/profile/update', 'ProfileController@adminupdate');
Route::delete('/admin/profile/destroy/{id}', 'ProfileController@admindestroy');

Route::get('/admin/produk', 'ProdukController@adminindex');
Route::get('/admin/produk/show/{id}', 'ProdukController@adminshow');
Route::get('/admin/produk/add', 'ProdukController@adminadd');
Route::post('/admin/produk/store', 'ProdukController@adminstore');
Route::get('/admin/produk/edit/{id}', 'ProdukController@adminedit');
Route::put('/admin/produk/update', 'ProdukController@adminupdate');
Route::delete('/admin/produk/destroy/{id}', 'ProdukController@admindestroy');

Route::get('/admin/order', 'OrderController@adminindex');
Route::get('/admin/order/show/{id}', 'OrderController@adminshow');
Route::get('/admin/order/add', 'OrderController@adminadd');
Route::post('/admin/order/store', 'OrderController@adminstore');
Route::get('/admin/order/edit/{id}', 'OrderController@adminedit');
Route::put('/admin/order/update', 'OrderController@adminupdate');
Route::delete('/admin/order/destroy/{id}', 'OrderController@admindestroy');

Route::get('/admin/detailorder', 'DetailOrderController@adminindex');
Route::get('/admin/detailorder/show/{id}', 'DetailOrderController@adminshow');
Route::get('/admin/detailorder/add', 'DetailOrderController@adminadd');
Route::post('/admin/detailorder/store', 'DetailOrderController@adminstore');
Route::get('/admin/detailorder/edit/{id}', 'DetailOrderController@adminedit');
Route::put('/admin/detailorder/update', 'DetailOrderController@adminupdate');
Route::delete('/admin/detailorder/destroy/{id}', 'DetailOrderController@admindestroy');
