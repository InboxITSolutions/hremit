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

Route::get('/','WebsiteController@index');
Route::get('/about','WebsiteController@getAbout');
Route::get('/contact','WebsiteController@getContact');
Route::get('/gallery','WebsiteController@getGallery');
Route::get('/media','WebsiteController@getMedia');
Route::get('/agents','DatabaseController@index');
Route::get('/ajax-district','DatabaseController@getDistrict');
Route::get('/ajax-region','DatabaseController@getRegion');
Route::get('/agent-fetch','DatabaseController@getAgent');

