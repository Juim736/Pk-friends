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

Route::group(['prefix' => 'user','middleware' => ['authenticate','XSSProtection']],function() {
    Route::get('/', 'UserController@userProfile');
    Route::get('/user-profile', 'UserController@userProfile');
    Route::post('/profile-update', 'UserController@updateProfile');
});
