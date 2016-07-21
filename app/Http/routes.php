<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/conf', function () {
    return view('conf');
});

Route::get('/configuration', [
    'as' => 'profile', 'uses' => 'ConfigurationController@update'
]);

Route::get('/get_ebay_order', [
    'as' => 'profile', 'uses' => 'OrderController@getEbayOrder'
]);
