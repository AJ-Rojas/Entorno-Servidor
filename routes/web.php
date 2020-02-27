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

Route::get('/', 'HomeController@index');

Route::get('/usuarios', 'UserControler@index')
    ->name('users');

Route::get('/usuarios/{user}', 'UserControler@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo', 'UserControler@create')->name('user.create');

Route::post('usuarios', 'UserControler@store');

Route::get('/usuarios/{user}/editar', 'UserControler@edit')->name('users.edit');

Route::put('/usuarios/{user}', 'UserControler@update');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

Route::delete('/usuarios/{user}', 'UserControler@destroy')->name('users.destroy');




Route::get('/productos', 'ProductController@index')
    ->name('products.index');

Route::get('/productos/{product}', 'ProductController@show')
    ->where('product', '[0-9]+')
    ->name('products.show');

Route::get('/productos/nuevo', 'ProductController@create')->name('products.create');

Route::post('/productos', 'ProductController@store');

Route::get('/productos/{product}/editar', 'ProductController@edit')->name('products.edit');

Route::put('/productos/{product}', 'ProductController@update');

Route::delete('/productos/{product}', 'ProductController@destroy')->name('products.destroy');



Route::get('/proveedores', 'SuppliersController@index')
    ->name('suppliers.index');

Route::get('/proveedores/{provider}', 'SuppliersController@show')
    ->where('provider', '[0-9]+')
    ->name('suppliers.show');

Route::get('/proveedores/nuevo', 'SuppliersController@create')->name('suppliers.create');

Route::post('/proveedores', 'SuppliersController@store');

Route::get('/proveedores/{provider}/editar', 'SuppliersController@edit')->name('suppliers.edit');

Route::put('/proveedores/{provider}', 'SuppliersController@update');

Route::delete('/proveedores/{provider}', 'SuppliersController@destroy')->name('suppliers.destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
