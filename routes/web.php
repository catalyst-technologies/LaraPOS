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

Route::get      ('/users'               ,'Users@all'        )->name('users.all'         ); // view all users | admin only
Route::get      ('/users/create'        ,'Users@create'     )->name('users.create'      );
Route::post     ('/users/save'          ,'Users@save'       )->name('users.save'        );
Route::get      ('/users/edit/{id}'     ,'Users@edit'       )->name('users.edit'        );
Route::get      ('/users/view/{id}'     ,'Users@view'       )->name('users.view'        );
Route::post     ('/users/update/{id}'   ,'Users@update'     )->name('users.update'      ); // update user details
Route::get      ('/users/delete/{id}'   ,'Users@delete'     )->name('users.delete'      ); // delete user


Route::get      ('/products'            ,'Products@all'     )->name('products.all'      );
Route::get      ('/products/view/{id}'  ,'Products@single'  )->name('products.single'   );
Route::get      ('/products/create'     ,'Products@create'  )->name('products.create'   );
Route::post     ('/products/save'       ,'Products@save'    )->name('products.save'     );
Route::post     ('/products/update/{id}','Products@update'  )->name('products.update'   );
Route::get      ('/products/delete/{id}','Products@delete'  )->name('products.delete'   );
Route::get      ('/products/edit/{id}'  ,'Products@edit'    )->name('products.edit'     );

Route::get      ('/orders'              ,'Orders@all'       )->name('orders.all'        );
Route::get      ('/orders/{id}'         ,'Orders@single'    )->name('orders.single'     );
Route::put      ('/orders/{id}/update'  ,'Orders@update'    )->name('orders.update'     );
Route::delete   ('/orders/{id}/delete'  ,'Orders@delete'    )->name('orders.delete'     );
Route::get      ('/orders/by/{user_id}' ,'Orders@byUser'    )->name('orders.users'      );
Route::post     ('/orders/create'       ,'Orders@create'    )->name('orders.create'     );
