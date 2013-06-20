<?php

Route::get('/', 'HomeController@index');

Route::get('/laravel_log', function(){
	return View::make('laravel');
});
