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
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/produkadmin', 'ProdukController@produkadmin')->name('produkadmin');

Route::get('/produkadmin/create', 'ProdukController@create')->name('produkadmin.create');
Route::PUT('/produkadmin/store', 'ProdukController@store')->name('produkadmin.store');

Route::get('/produkadmin/edit/{id}', 'ProdukController@edit')->name('produkadmin.edit');
Route::PUT('/produkadmin/update{id}', 'ProdukController@update')->name('produkadmin.update');

Route::get('/produkadmin/delete/{id}', 'ProdukController@delete')->name('produkadmin.delete');

Route::get('/produk', 'ProdukController@produk')->name('produk');

Route::get('/about', 'AboutController@about');