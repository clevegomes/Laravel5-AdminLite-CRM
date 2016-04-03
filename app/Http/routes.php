<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
//
//Route::group(['middleware' => 'auth'], function()
//{
//	Route::get('/', function ()
//	{
//		return view('welcome');
//	});
//});
Route::auth();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'DashboardController@index');
    Route::resource('companies', 'CompaniesController');
    Route::resource('chatter', 'ChatterController');
    Route::resource('dashboard', 'DashboardController');
    Route::resource('jobs', 'JobsController');
    Route::resource('calendar', 'CalendarController');
    Route::get('companies/{level}', 'CompaniesController@index');
    Route::get('events', 'CalendarController@events');
//    Route::get('messages', 'MessageController@userMessages');

});



Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});
