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

Route::get('/', [
	'uses' => 'FilmController@index',
	'as' => 'films.index'
]);

Route::get('/films', [
	'uses' => 'FilmController@films',
	'as' => 'films.all'
]);

Route::get('/film/{film}', [
	'uses' => 'FilmController@film',
	'as' => 'films.one'
]);

Route::get('/create', [
	'uses' => 'FilmController@create',
	'as' => 'films.new'
]);

Route::post('/create', [
	'uses' => 'FilmController@submit_create',
	'as' => 'films.post_new'
]);

Auth::routes();

Route::post('/comment', [
    'uses' => 'Filmcontroller@comment',
    'as' => 'films.comment'
])->middleware('auth');;
