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
Route::get      ('/users/{id}'          ,'Users@single'     )->name('users.single'      ); // view users
Route::put      ('/users/{id}/update'   ,'Users@update'     )->name('users.update'      ); // update user details
Route::delete   ('/users/{id}/delete'   ,'Users@delete'     )->name('users.delete'      ); // delete user
Route::post     ('/users/create'        ,'Users@create'     )->name('users.create'      );

Route::get      ('/products'            ,'Products@all'     )->name('products.all'      );
Route::get      ('/products/{id}'       ,'Products@single'  )->name('products.single'   );
Route::get      ('/products/{id}/view'  ,'Products@view'    )->name('products.view'     );
Route::put      ('/products/{id}/update','Products@update'  )->name('products.update'   );
Route::delete   ('/products/{id}/delete','Products@delete'  )->name('products.delete'   );
Route::post     ('/products/create'     ,'Products@create'  )->name('products.create'   );

Route::get      ('/orders'              ,'Orders@all'       )->name('orders.all'        );
Route::get      ('/orders/{id}'         ,'Orders@single'    )->name('orders.single'     );
Route::put      ('/orders/{id}/update'  ,'Orders@update'    )->name('orders.update'     );
Route::delete   ('/orders/{id}/delete'  ,'Orders@delete'    )->name('orders.delete'     );
Route::get      ('/orders/by/{user_id}' ,'Orders@byUser'    )->name('orders.users'      );
Route::post     ('/orders/create'       ,'Orders@create'    )->name('orders.create'     );