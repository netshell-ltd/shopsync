<?php

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::group(['prefix' => 'product'], function(){
	Route::resource('product', 'ProductController');
//});