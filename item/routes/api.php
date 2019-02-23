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

<<<<<<< HEAD
});
=======
<<<<<<< HEAD
=======

>>>>>>> 07add8012834ba5cfebfde2553ece9ce1896ffaf

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



Route::get('worklist', 'hot\WorklistController@GetWork');
Route::get('positionlist', 'hot\PositionController@GetWork');



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

<<<<<<< HEAD
});
=======
});

>>>>>>> 07add8012834ba5cfebfde2553ece9ce1896ffaf
>>>>>>> c52c7da71aaf8fcce847013761c7c975fb3167b1
