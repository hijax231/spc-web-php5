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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get-brgy-list', 'GetBrgyLs@getList');
Route::get('/get-dept-list', 'GetDeptList@getList');

Route::post('/postNews_android', 'android_controller@store');

Route::get('/getNews_android', 'android_controller@index');

Route::get('/getNews', 'CountCtrl@getNews');
