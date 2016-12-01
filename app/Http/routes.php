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

	Route::get('/home', 'HomeController@index');

    Route::get('/home/{categoria?}', 'HomeController@index');

    Route::get('/home/{id}/read', 'HomeController@read');

	Route::get('/post/create', 'PostController@create');
        
    Route::get('/post/{id}/edit', 'PostController@edit');

    Route::get('/post/desactives', 'PostController@desactives');

    Route::get('/post/{id}/active', 'PostController@active');

	Route::post('/post/store', 'PostController@store');
        
    Route::patch('/post/{id}/update', 'PostController@update');
        
    Route::get('/post/{id}/disable', 'PostController@disable');
        
    Route::delete('/categoria/{id}/destroy', 'CategoriaController@destroy');
        
    Route::get('/categoria/create', 'CategoriaController@create');
        
    Route::get('/categoria/{id}/edit', 'CategoriaController@edit');

    Route::patch('/categoria/{id}/update', 'CategoriaController@update');

	Route::post('/categoria/store', 'CategoriaController@store');
        
    Route::get('/categoria/index', 'CategoriaController@index');

    Route::get('categoria', 'CategoriaController@index');
    
});
