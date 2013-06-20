<?php

Route::get('/', 'HomeController@index');

Route::get('/laravel_log', function(){
	return View::make('laravel');
});

App::missing(function($exception){
	return Response::view('404', array(), 404);
});
