<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', ['as' => 'home',
    'uses' => 'MainController@index']
);

Route::get('loremipsum',
    ['as' => 'loremipsum', 'uses' => 'LoremIpsumController@getText']);
Route::post('loremipsum',
    ['as' => 'loremipsum_post', 'uses' => 'LoremIpsumController@postFormInput']);

Route::get('randomuser',
    ['as' => 'randomuser', 'uses' => 'RandomUserController@getUser']);
Route::post('randomuser',
    ['as' => 'randomuser_post', 'uses' => 'RandomUserController@postFormInput']);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
