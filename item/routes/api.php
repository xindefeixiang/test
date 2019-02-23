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

<<<<<<< HEAD

});
Route::get('worklist', 'hot\WorklistController@GetWork');
Route::get('positionlist', 'hot\PositionController@GetWork');
=======
});

// App\Http\Controllers\Admin\AdminController，命名空间为Admin
Route::namespace('Admin')->group(function() {
    //ResumeController
    Route::post('resume/resume_add', 'ResumeController@resume_add');
    Route::any('resume/resume_show', 'ResumeController@resume_show');
    Route::get('resume/resume_more_del', 'ResumeController@resume_more_del');
    Route::post('resume/interview_invit', 'ResumeController@interview_invit');

    //EnterpriseController
    Route::post('enterprise/enterprise_add', 'EnterpriseController@enterprise_add');
    Route::any('enterprise/enterprise_show', 'EnterpriseController@enterprise_show');

    //PositionController
    Route::post('position/position_add', 'PositionController@position_add');
    Route::get('position/position_show', 'PositionController@position_show');
    Route::get('position/position_del', 'PositionController@position_del');
    Route::get('position/position_rename', 'PositionController@position_rename');

});
>>>>>>> b72ef6a5b415e6e2de54e3ec2f28213d7fd31dbd
