<?php


Route::get('/', ['as' => 'home',
    'uses' => 'MainController@index']
);

Route::get('loremipsum', 'LoremIpsumController@getText');
Route::post('loremipsum/post', 'LoremIpsumController@postFormInput');
Route::post('loremipsum/download', 'LoremIpsumController@download');

Route::get('randomuser', 'RandomUserController@getUser');
Route::post('randomuser/post', 'RandomUserController@postFormInput');
Route::post('randomuser/download', 'RandomUserController@download');

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
