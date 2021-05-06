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
    'prefix' => 'admin',
], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('', 'AdminController@index')->name('admin');

        Route::resource('software', 'SoftwareController');
    });
});

Route::get('/', 'PageController@main')->name('main');

Route::get('/works', 'PageController@works')->name('works');
Route::get('/works/{code}', 'PageController@work')->name('work');

Route::get('/artists', 'PageController@artists')->name('artists');
Route::get('/artists/{code}', 'PageController@artist')->name('artist');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/recruit', 'PageController@recruit')->name('recruit');

Route::get('/contact', 'PageController@contact')->name('contact');
