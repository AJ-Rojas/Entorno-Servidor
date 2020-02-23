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
    return 'Home';
});

Route::get('/usuarios', 'UserControler@index');

Route::get('/usuarios/{id}', 'UserControler@show')
    ->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', 'UserControler@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');
