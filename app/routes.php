<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/{id}/editor', array('as' => 'mustache.editor', 'uses' => 'MustacheController@editor'));
Route::post('/{id}/editor', array('as' => 'mustache.save', 'uses' => 'MustacheController@save'));
Route::get('/edit', array('as' => 'mustache.upload', 'uses' => 'MustacheController@upload'));
Route::post('/edit', array('as' => 'mustache.create', 'uses' => 'MustacheController@create'));
Route::get('/', array('as' => 'mustache.index', 'uses' => 'MustacheController@index'));

Route::get('/install/migrate', function() {
    define('STDIN',fopen("php://stdin","r"));
   Artisan::call('migrate', array('--force' => true));
});