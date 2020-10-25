<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Api\v1'], function () {

    Route::any('v1/demo/index','DemoController@index');
    Route::get('v1/login/getToken','LoginController@getToken');
    Route::get('v1/login/verifyToken','LoginController@verifyToken');
    Route::get('v1/login/getAppToken','LoginController@getAppToken');

    Route::group(['middleware' => ['checkToken']], function () {
        Route::get('v1/user/getUser','UserController@getUser');
        Route::get('v1/user/updateUser','UserController@updateUser');

    });
});



