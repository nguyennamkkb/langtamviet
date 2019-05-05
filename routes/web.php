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

Route::group(['prefix'=>'/'],function(){
	Route::get('', 'HomeController@index');
	Route::get('hoatdong', 'HomeController@hoatdong');
	Route::get('lienhe', 'HomeController@lienhe');
	Route::get('post','TintucController@showPost');
	Route::get('sanpham','TintucController@sanpham');
	Route::get('post/singlepost/{id}','TintucController@singlePost');

});




Route::group(['prefix'=>'ltvadmin','middleware'=>'adminlogin'],function(){
	Route::get('dashboard','Admin\AdminController@index');
	Route::resource('slide','Admin\SlideController');
	Route::resource('theloaianh','Admin\TheloaiController');
	Route::resource('anhsx','Admin\AnhsxController');
	Route::resource('tintuc','Admin\TitucController');
	Route::resource('loaitin','Admin\loaitinController');
	


});
Auth::routes();