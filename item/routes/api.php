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
// 个人
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::any('user/add', ['uses' => 'UserController@add']);
    Route::any('user/update',['uses' => 'UserController@update']);
});
//注册接口
Route::post('register', 'Auth\RegisterController@register');
//登录接口
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
//需要认证的接口
Route::group(['middleware' => 'auth:api'], function() {


});
Route::get('worklist', 'hot\WorklistController@GetWork');
Route::get('positionlist', 'hot\PositionController@GetWork');