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

Route::group(['prefix' => 'api/v1'], function () {
    Route::post('feedback', 'FeedbackController@store');
    Route::get('feedback/data', 'FeedbackController@dashboardData');
});

Route::get('/', 'FeedbackController@input');
Route::get('feedback/input', 'FeedbackController@input');
Route::get('feedback/dashboard', 'FeedbackController@dashboard');
