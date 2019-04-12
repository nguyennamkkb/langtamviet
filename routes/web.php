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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'ltvadmin','middleware'=>'adminlogin'],function(){
	Route::get('dashboard','Admin\AdminController@index');
	Route::resource('slide','Admin\SlideController');
	Route::resource('theloaianh','Admin\TheloaiController');
	Route::resource('anhsx','Admin\AnhsxController');
	Route::resource('tintuc','Admin\TitucController');
	Route::resource('loaitin','Admin\loaitinController');



});