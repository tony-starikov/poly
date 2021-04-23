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

Route::get('/', 'MainController@index')->name('main');

Route::get('/works', 'WorksController@index')->name('works');
Route::get('/works/{name}', 'WorksController@single')->name('work');

Route::get('/artists', 'ArtistsController@index')->name('artists');
Route::get('/artists/{name}', 'ArtistsController@single')->name('artist');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/recruit', 'RecruitController@index')->name('recruit');

Route::get('/contact', 'ContactController@index')->name('contact');
