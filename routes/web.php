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

Route::get('/', 'MainController@index');
Route::get('/works', 'WorksController@index');
Route::get('/artists', 'ArtistsController@index');
Route::get('/about', 'AboutController@index');
Route::get('/recruit', 'RecruitController@index');
Route::get('/contact', 'ContactController@index');
