<?php

use Illuminate\Http\Request;

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

header('Access-Control-Allow-Origin:  *');
//header('Access-Control-Allow-Origin:  http://schedule.mspinfo.net');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, PATCH, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, Authorization, Access-Token');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('set-location', 'TestController@setLocation');
Route::post('set-location', 'TestController@setLocation');
