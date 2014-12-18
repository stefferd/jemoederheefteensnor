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


Route::get('/editor', array('as' => 'mustache.editor', 'uses' => 'MustacheController@editor'));
Route::post('/editor', array('as' => 'mustache.save', 'uses' => 'MustacheController@save'));
Route::get('/', array('as' => 'mustache.index', 'uses' => 'MustacheController@index'));