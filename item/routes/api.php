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

//热门企业数据接口
Route::get('enterprise/show', 'enterprise\enterpriseController@show');
Route::get('enterprise/shows', 'enterprise\enterpriseController@shows');
//热门行业业数据接口
Route::get('industry/show', 'industry\industryController@show');
Route::get('industry/shows', 'industry\industryController@shows');
//报名
Route::post('signup/add', 'signup\SignupController@add');
//轮播图
Route::get('imgs/show', 'imgs\ImgsController@show');
//平台活动
Route::get('activity/show', 'activity\ActivityController@show');
//专家讲堂
Route::get('experts/show', 'experts\ExpertsController@show');
Route::post('experts/find', 'experts\ExpertsController@find');
