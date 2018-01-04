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

Route::get('/test','Test@index');

Route::get('/', 'Dashboard@show')
        ->name('dashboard')
        ->middleware('redirectIfNoAuth');
Route::get('/dashboard/sales/{by}','Dashboard@get_sales')
        ->name('dashboard.sales')
        ->middleware('redirectIfNoAuth');

# User Routes
Route::get('/users', 'Users@all')
        ->name('users.all')
        ->middleware('redirectIfNoAuth');
Route::get('/users/create', 'Users@create')
        ->name('users.create')
        ->middleware('redirectIfNoAuth');
Route::post('/users/save', 'Users@save')
        ->name('users.save')
        ->middleware('redirectIfNoAuth');
Route::get('/users/edit/{id}', 'Users@edit')
        ->name('users.edit')
        ->middleware('redirectIfNoAuth');
Route::get('/users/view/{id}', 'Users@view')
        ->name('users.view')
        ->middleware('redirectIfNoAuth');
Route::post('/users/update/{id}', 'Users@update')
        ->name('users.update')
        ->middleware('redirectIfNoAuth');
Route::get('/users/delete/{id}', 'Users@delete')
        ->name('users.delete')
        ->middleware('redirectIfNoAuth');


# Customer Routes
Route::get('/customers', 'Customers@all')
        ->name('customers.all')
        ->middleware('redirectIfNoAuth');
Route::get('/customers/create', 'Customers@create')
        ->name('customers.create')
        ->middleware('redirectIfNoAuth');
Route::get('/customers/edit/{id}', 'Customers@edit')
        ->name('customers.edit')
        ->middleware('redirectIfNoAuth');
Route::get('/customers/delete/{id}', 'Customers@delete')
        ->name('customers.delete')
        ->middleware('redirectIfNoAuth');
Route::post('/customers/save', 'Customers@save')
        ->name('customers.save')
        ->middleware('redirectIfNoAuth');
Route::post('/customers/update/{id}', 'Customers@update')
        ->name('customers.update')
        ->middleware('redirectIfNoAuth');

# Supplier routes
Route::get('/suppliers', 'Suppliers@all')
        ->name('suppliers.all')
        ->middleware('redirectIfNoAuth');
Route::get('/suppliers/create', 'Suppliers@create')
        ->name('suppliers.create')
        ->middleware('redirectIfNoAuth');
Route::get('/suppliers/edit/{id}', 'Suppliers@edit')
        ->name('suppliers.edit')
        ->middleware('redirectIfNoAuth');
Route::get('/suppliers/delete/{id}', 'Suppliers@delete')
        ->name('suppliers.delete')
        ->middleware('redirectIfNoAuth');
Route::post('/suppliers/save', 'Suppliers@save')
        ->name('suppliers.save')
        ->middleware('redirectIfNoAuth');
Route::post('/suppliers/update/{id}', 'Suppliers@update')
        ->name('suppliers.update')
        ->middleware('redirectIfNoAuth');


# Item routes
Route::get('/items', 'Items@all')
        ->name('items.all')
        ->middleware('redirectIfNoAuth');
Route::get('/items/create', 'Items@create')
        ->name('items.create')
        ->middleware('redirectIfNoAuth');
Route::get('/items/edit/{id}', 'Items@edit')
        ->name('items.edit')
        ->middleware('redirectIfNoAuth');
Route::get('/items/delete/{id}', 'Items@delete')
        ->name('items.delete')
        ->middleware('redirectIfNoAuth');
Route::post('/items/save', 'Items@save')
        ->name('items.save')
        ->middleware('redirectIfNoAuth');
Route::post('/items/update/{id}', 'Items@update')
        ->name('items.update')
        ->middleware('redirectIfNoAuth');

Route::get('/inventory/{id}/edit', 'Inventory@show')
        ->name('inventory.edit')
        ->middleware('redirectIfNoAuth');
Route::post('/inventory/{id}/update', 'Inventory@update')
        ->name('inventory.update')
        ->middleware('redirectIfNoAuth');

# Sales Route
Route::get('/sales', 'Sales@index')
        ->name('sales')
        ->middleware('redirectIfNoAuth');
Route::post('/sales/save', 'Sales@save')
        ->name('sales.save')
        ->middleware('redirectIfNoAuth');
#todo: must not be able to submit if not authenticated
Route::get('/receiving', 'Receiving@index')
        ->name('receiving')
        ->middleware('redirectIfNoAuth');
Route::post('/receiving/save', 'Receiving@save')
        ->name('receiving.save')
        ->middleware('redirectIfNoAuth');

# Reports Route
Route::get('reports/sales', 'Reports\Sales@index')
        ->name('reports.sales')
        ->middleware('redirectIfNoAuth');
Route::get('reports/receivings', 'Reports\Receivings@index')
        ->name('reports.receiving')
        ->middleware('redirectIfNoAuth');


# Branch Route
Route::get('/branch', 'Branch@all')
      ->name('branch.all')
      ->middleware('redirectIfNoAuth');
Route::get('/branch/create', 'Branch@create')
        ->name('branch.create')
        ->middleware('redirectIfNoAuth');
Route::get('/branch/edit/{id}', 'Branch@edit')
        ->name('branch.edit')
        ->middleware('redirectIfNoAuth');
Route::get('/branch/delete/{id}', 'Branch@delete')
        ->name('branch.delete')
        ->middleware('redirectIfNoAuth');
Route::post('/branch/save', 'Branch@save')
        ->name('branch.save')
        ->middleware('redirectIfNoAuth');
Route::post('/branch/update/{id}', 'Branch@update')
        ->name('branch.update')
        ->middleware('redirectIfNoAuth');
Route::get('branch/select/{id}','Branch@select_branch')
        ->name('branch.select')
        ->middleware('redirectIfNoAuth');
# API resource routes
Route::resource('api/item', 'API\Items');
Route::resource('api/saletemp', 'API\SaleTemp');

Route::resource('api/receivingtemp', 'API\ReceivingTemp');
