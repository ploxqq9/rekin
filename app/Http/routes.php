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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('home');
    });
    Route::get ('/userloginview', [
        'uses' => 'AppController@userLoginView',
        'as' => 'userloginview'
    ]);
    Route::get ('/admloginview', [
        'uses' => 'AppController@admLoginView',
        'as' => 'admloginview'
    ]);
    Route::get ('/admcreateview', [
        'uses' => 'AppController@admCreateView',
        'as' => 'admcreateview'
    ]);
    Route::post ('/admcreate', [
        'uses' => 'UserController@admCreate',
        'as' => 'admcreate'
    ]);
    Route::post ('/admlogin', [
        'uses' => 'UserController@admLogin',
        'as' => 'admlogin'
    ]);
    Route::post ('/usercreate', [
        'uses' => 'UserController@userCreate',
        'as' => 'usercreate'
    ]);
    Route::post ('/userlogin', [
        'uses' => 'UserController@userLogin',
        'as' => 'userlogin'
    ]);
    

});
