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

Route::get('main', 'PageController@mainApi');
Route::get('about', 'PageController@aboutApi');
Route::get('works', 'PageController@worksApi');
Route::get('contact', 'PageController@contactApi');
Route::get('artists', 'PageController@artistsApi');
Route::get('recruit', 'PageController@recruitApi');
Route::get('work/{code}', 'PageController@workApi');
Route::get('artist/{code}', 'PageController@artistApi');
