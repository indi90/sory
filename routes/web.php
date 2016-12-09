<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', function() {
        return redirect()->route('dashboard');
    });

    Route::get('dashboard', [
        'as' => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);

    // Add Peripheral view
    Route::get('peripheral/barcode', [
        'as' => 'peripheral.barcode',
        'uses' => 'PeripheralController@barcode'
    ]);

    // Peripheral Route
    Route::resource('peripheral', 'PeripheralController');


    // Add Peripheral
    Route::post('peripheral', [
        'as' => 'peripheral',
        'uses' => 'PeripheralController@add_peripheral'
    ]);

    // Store Peripheral
    Route::post('peripheral/store', [
        'as' => 'peripheral.store',
        'uses' => 'PeripheralController@store'
    ]);

    // Asset Route
    Route::resource('asset', 'AssetController');

    // Software Route
    Route::resource('software', 'SoftwareController');

});
