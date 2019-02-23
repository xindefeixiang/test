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
//和志恒
Route::namespace('Home')->group(function () {
    //热门企业接口
    Route::any('program/industry', 'ProgramController@industry');
    //全部企业接口
    Route::any('program/industryall','ProgramController@industryall');
    //公司详情接口
    Route::any('program/details','ProgramController@details');
    //评论接口
    Route::any('program/comments','ProgramController@comments');
});

//注册接口
Route::post('register', 'Auth\RegisterController@register');
//登录接口
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
//需要认证的接口
Route::group(['middleware' => 'auth:api'], function() {

});
