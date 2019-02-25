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

Route::get('/', function () {
    return view('welcome');
});
Route::get('industry/show', 'industry\IndustryController@show');

Route::post('signup/add', 'signup\SignupController@add');

Route::get('imgs/show', 'imgs\ImgsController@show');

Route::get('activity/show', 'activity\ActivityController@show');

Route::get('experts/show', 'experts\ExpertsController@show');

Route::post('experts/find', 'experts\ExpertsController@find');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
