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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
    'register' => false,
]);

Route::group([
    'middleware' => 'auth',
    'namespace' => 'Admin',
], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
});

Route::get('/', 'MainController@index')->name('main');

Route::get('/works', 'WorksController@index')->name('works');
Route::get('/works/{code}', 'WorksController@single')->name('work');

Route::get('/artists', 'ArtistsController@index')->name('artists');
Route::get('/artists/{code}', 'ArtistsController@single')->name('artist');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/recruit', 'RecruitController@index')->name('recruit');

Route::get('/contact', 'ContactController@index')->name('contact');
