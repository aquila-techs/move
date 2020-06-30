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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', 'APIs\UserController@authenticate');
Route::post('register','APIs\UserController@register');

Route::group(['middleware' => ['jwt_verify']], function (){

    Route::get('users','APIs\UserController@index');
    Route::get('auth_user','APIs\UserController@getAuthenticatedUser');

});
