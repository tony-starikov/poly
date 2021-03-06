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

Route::group([
    'middleware' => 'set_locale',
], function () {
    Auth::routes([
        'reset' => false,
        'confirm' => false,
        'verify' => false,
        'register' => false,
    ]);

    Route::get('/', 'PageController@main')->name('main');

    Route::get('locale/{locale}', 'PageController@changeLocale')->name('locale');

    Route::get('/works', 'PageController@main')->name('works');
    Route::get('/work/{code}', 'PageController@main')->name('work');

    Route::get('/artists', 'PageController@main')->name('artists');
    Route::get('/artist/{code}', 'PageController@main')->name('artist');

    Route::get('/about', 'PageController@main')->name('about');

    Route::get('/recruit', 'PageController@main')->name('recruit');

    Route::get('/contact', 'PageController@main')->name('contact');
});

Route::group([
    'middleware' => 'auth',
    'namespace' => 'Admin',
    'prefix' => 'admin',
], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('', 'AdminController@index')->name('admin');

        Route::post('/change_password','AdminController@changePassword')->name('admin.change.password');
        Route::post('/change_email','AdminController@changeEmail')->name('admin.change.email');

        Route::get('file/{id}', 'FileController@main')->name('files.main');

        Route::get('menu/en', 'LocaleFileController@readEn')->name('menu.en.settings');
        Route::post('menu/edit/en', 'LocaleFileController@menuEnEdit')->name('menu.en.edit');

        Route::get('menu/ua', 'LocaleFileController@readUa')->name('menu.ua.settings');
        Route::post('menu/edit/ua', 'LocaleFileController@menuUaEdit')->name('menu.ua.edit');

        Route::get('menu/ru', 'LocaleFileController@readRu')->name('menu.ru.settings');
        Route::post('menu/edit/ru', 'LocaleFileController@menuRuEdit')->name('menu.ru.edit');

        Route::get('menu/de', 'LocaleFileController@readDe')->name('menu.de.settings');
        Route::post('menu/edit/de', 'LocaleFileController@menuDeEdit')->name('menu.de.edit');


        Route::group(['prefix' => 'page'], function () {
            Route::get('main', 'PageController@main')->name('admin.main.page');
            Route::post('main/edit', 'PageController@mainEdit')->name('admin.main.page.edit');

            Route::get('works', 'PageController@works')->name('admin.works.page');
            Route::post('works/edit', 'PageController@worksEdit')->name('admin.works.page.edit');

            Route::get('artists', 'PageController@artists')->name('admin.artists.page');
            Route::post('artists/edit', 'PageController@artistsEdit')->name('admin.artists.page.edit');

            Route::get('about', 'PageController@about')->name('admin.about.page');
            Route::post('about/edit', 'PageController@aboutEdit')->name('admin.about.page.edit');

            Route::get('recruit', 'PageController@recruit')->name('admin.recruit.page');
            Route::post('recruit/edit', 'PageController@recruitEdit')->name('admin.recruit.page.edit');

            Route::get('contact', 'PageController@contact')->name('admin.contact.page');
            Route::post('contact/edit', 'PageController@contactEdit')->name('admin.contact.page.edit');

            Route::get('video', 'PageController@bgVideo')->name('admin.video.page');
            Route::post('video/edit', 'PageController@bgVideoEdit')->name('admin.video.page.edit');
        });

        Route::resource('software', 'SoftwareController');
        Route::resource('positions', 'PositionController');
        Route::resource('artists', 'ArtistController');
        Route::resource('works', 'WorkController');
        Route::resource('files', 'FileController');
    });
});

