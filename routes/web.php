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
    return redirect('/register');
});

Route::get('/register','registerController@read');
Route::post('/register/proses','registerController@insert');
Route::get('/back-admin','registerController@view');
Route::get('/back-admin/export','registerController@export');
