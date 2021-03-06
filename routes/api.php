<?php

use Illuminate\Http\Request;
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

Route::group(['namespace' => 'App\Http\Controllers\api'], function () {
    Route::get('/crypto/check_api', ['as' => 'crypto.check_api', 'uses' => 'CryptoController@checkApi']);
    Route::get('/crypto/store_price', ['as' => 'crypto.store_price', 'uses' => 'CryptoController@storePrice']);
    Route::get('/crypto/get_price', ['as' => 'crypto.get_price', 'uses' => 'CryptoController@getPrice']);
});

