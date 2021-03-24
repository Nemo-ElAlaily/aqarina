<?php

define('PAGINATION_COUNT', 10);

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function (){
        Route::get('/', 'AdminController@index')->name('index');
        /* users routes */
        Route::resource('/users', 'UserController')->except('show');
        /* features routes */
        Route::resource('/features', 'FeatureController')->except('show');
        /* property types routes */
        Route::resource('/property_types', 'PropertyTypeController')->except('show');
        /* property status routes */
        Route::resource('/property_statuses', 'PropertyStatusController')->except('show');
        /* currencies routes */
        Route::resource('/currencies', 'CurrencyController')->except('show');
        /* agencies routes */
        Route::resource('/agencies', 'AgencyController')->except('show');
        /* countries routes */
        Route::resource('/countries', 'CountryController')->except('show');
        /* cities routes */
        Route::resource('/cities', 'CityController')->except('show');
        /* properties routes */
        Route::resource('/properties', 'PropertyController')->except('show');
    });
});
