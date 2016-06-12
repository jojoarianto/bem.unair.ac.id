<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// for url generator
Route::get('gen', 'GeneratorController@index');
Route::post('gen', 'GeneratorController@store');

Route::get('{id}', 'GeneratorController@show');

