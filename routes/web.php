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

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'Dashboard@show')->name('dashboard')->middleware('redirectIfNoAuth');

Route::get('/users', 'Users@all')->name('users.all')->middleware('redirectIfNoAuth');
Route::get('/users/create', 'Users@create')->name('users.create')->middleware('redirectIfNoAuth');
Route::post('/users/save', 'Users@save')->name('users.save')->middleware('redirectIfNoAuth');
Route::get('/users/edit/{id}', 'Users@edit')->name('users.edit')->middleware('redirectIfNoAuth');
Route::get('/users/view/{id}', 'Users@view')->name('users.view')->middleware('redirectIfNoAuth');
Route::post('/users/update/{id}', 'Users@update')->name('users.update')->middleware('redirectIfNoAuth');
Route::get('/users/delete/{id}', 'Users@delete')->name('users.delete')->middleware('redirectIfNoAuth');

Route::get('/products', 'Products@all')->name('products.all')->middleware('redirectIfNoAuth');
Route::get('/products/view/{id}', 'Products@view')->name('products.view')->middleware('redirectIfNoAuth');
Route::get('/products/{id}/edit', ' Products@edit')->name('products.edit')->middleware('redirectIfNoAuth');
Route::put('/products/{id}/update', 'Products@update')->name('products.update')->middleware('redirectIfNoAuth');
Route::get('/products/{id}/delete', 'Products@delete')->name('products.delete')->middleware('redirectIfNoAuth');
Route::get('/products/create', 'Products@create')->name('products.create')->middleware('redirectIfNoAuth');
Route::post('/products/save', 'Products@save')->name('products.save')->middleware('redirectIfNoAuth');

Route::get('/orders', 'Orders@all')->name('orders.all')->middleware('redirectIfNoAuth');
Route::get('/orders/{id}', 'Orders@single')->name('orders.single')->middleware('redirectIfNoAuth');
Route::post('/orders/{id}/update', 'Orders@update')->name('orders.update')->middleware('redirectIfNoAuth');
Route::post('/orders/{id}/delete', 'Orders@delete')->name('orders.delete')->middleware('redirectIfNoAuth');
Route::get('/orders/by/{user_id}', 'Orders@byUser')->name('orders.users')->middleware('redirectIfNoAuth');
Route::post('/orders/create', 'Orders@create')->name('orders.create')->middleware('redirectIfNoAuth');
