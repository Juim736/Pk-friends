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


Route::group(['middleware' => 'visitors','XSSProtection'], function(){
    Route::get('/','PkAuthController@index');
    Route::get('/pk-login','PkAuthController@index');
    Route::get('/sign-up-form','PkAuthController@registration');
	Route::post('/sign-up-post','PkAuthController@signUp');
	Route::post('/login-pk','PkAuthController@signIn');
});

Route::group(['middleware' => 'authenticate','XSSProtection'],function(){
	Route::post('sign-out','PkAuthController@signOut')->name('signOut');
	Route::get('/pk-friends','PkController@pk');


	Route::group(['middleware' => 'pkadmin'],function(){
		Route::get('/users_of_pk','PkController@pkUsers');
	});

	Route::get('/table','DatatablesController@getIndex');
	Route::get('/pk-table','DatatablesController@anyData')->name('datatables.data');
	Route::get('/getData','PkController@getAllUser');


});

Auth::routes();