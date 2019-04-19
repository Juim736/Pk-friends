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

Route::group(['prefix' => 'selfmanage','middleware' => ['authenticate','XSSProtection']],function() {
        Route::get('/self-manage', 'SelfManageController@index');
        Route::get('/daily-manage','SelfManageController@dailyManage')->name('daily.set');
        Route::get('/weekly-manage','SelfManageController@weeklyManage')->name('weekly.set');
        Route::post('/weekly-manage','SelfManageController@weeklysetManage');
        Route::get('/monthly-manage','SelfManageController@mounthlyManage')->name('monthly.set');
        Route::post('/monthly-manage','SelfManageController@mounthlysetManage');
        Route::get('/yearly-manage','SelfManageController@yearlyManage')->name('yearly.set');
        Route::post('/yearly-manage','SelfManageController@yearlysetManage');


        Route::get('/package-manage','SelfManageController@packageManage')->name('package.set');
    });

