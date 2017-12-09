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
Route::get('/logout', 'Auth\LoginController@logout')
	->name('logout');

Route::get('/', 'Dashboard@show')
	->name('dashboard')
	->middleware('redirectIfNoAuth');

# User Routes
Route::get('/users', 'Users@all')
	->name('users.all')
	->middleware('redirectIfNoAuth','authAdminOnly');
Route::get('/users/create', 'Users@create')
	->name('users.create')
	->middleware('redirectIfNoAuth','authAdminOnly');
Route::post('/users/save', 'Users@save')
	->name('users.save')
	->middleware('redirectIfNoAuth','authAdminOnly');
Route::get('/users/edit/{id}', 'Users@edit')
	->name('users.edit')
	->middleware('redirectIfNoAuth','authAdminOnly');
Route::get('/users/view/{id}', 'Users@view')
	->name('users.view')
	->middleware('redirectIfNoAuth','authAdminOnly');
Route::post('/users/update/{id}', 'Users@update')
	->name('users.update')
	->middleware('redirectIfNoAuth','authAdminOnly');
Route::get('/users/delete/{id}', 'Users@delete')
	->name('users.delete')
	->middleware('redirectIfNoAuth','authAdminOnly');


# Customer Routes
Route::get('/customers','Customers@all')
	->name('customers.all');
Route::get('/customers/create','Customers@create')
	->name('customers.create');
Route::get('/customers/edit/{id}','Customers@edit')
	->name('customers.edit');
Route::get('/customers/delete/{id}','Customers@delete')
	->name('customers.delete');
Route::post('/customers/save','Customers@save')
	->name('customers.save');
Route::post('/customers/update/{id}','Customers@update')
	->name('customers.update');

# Supplier routes
Route::get('/suppliers','Suppliers@all')
	->name('suppliers.all');
Route::get('/suppliers/create','Suppliers@create')
	->name('suppliers.create');
Route::get('/suppliers/edit/{id}','Suppliers@edit')
	->name('suppliers.edit');
Route::get('/suppliers/delete/{id}','Suppliers@delete')
	->name('suppliers.delete');
Route::post('/suppliers/save','Suppliers@save')
	->name('suppliers.save');
Route::post('/suppliers/update/{id}','Suppliers@update')
	->name('suppliers.update');


# Item routes
Route::get('/items','Items@all')
	->name('items.all');
Route::get('/items/create','Items@create')
	->name('items.create');
Route::get('/items/edit/{id}','Items@edit')
	->name('items.edit');
Route::get('/items/delete/{id}','Items@delete')
	->name('items.delete');
Route::post('/items/save','Items@save')
	->name('items.save');
Route::post('/items/update/{id}','Items@update')
	->name('items.update');

Route::get('/items/inventory/{item_id}','Item@inventory')
	->name('items.inventory.get');
Route::post('/items/inventory/{item_id}','Inventory@save_inventory')
	->name('items.inventory.save');
