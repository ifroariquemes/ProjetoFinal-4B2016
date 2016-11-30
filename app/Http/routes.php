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

Route::group(['middlewareGroups' => ['web']], function () {
	
	Route::auth();

	Route::get('/', function () {
    	return view('home');
	});

	Route::get('/home', 'HomeController@index');

	Route::get('/post/create', 'PostController@create');
        
        Route::get('/post/edit', 'PostController@edit');

	Route::post('/post/store', 'PostController@store');
        
        Route::get('/categoria/create', 'CategoriaController@create');
        
        Route::get('/categoria/edit', 'CategoriaController@edit');

	Route::post('/categoria/store', 'CategoriaController@store');
        
        Route::get('/categoria/index', 'CategoriaController@index');
        
        Route::patch('/post/{id}/update', 'PostController@update');
        
        Route::patch('/post/{id}/disable', 'PostController@disable');
        

});
