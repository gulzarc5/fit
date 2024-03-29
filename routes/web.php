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

Route::get('/admin/login', 'Admin\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\LoginController@adminLogin');
Route::post('/admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::group(['middleware'=>'auth:admin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/deshboard', 'DeshboardController@index')->name('admin.deshboard');
});
Route::get('/home', 'HomeController@index')->name('home');
