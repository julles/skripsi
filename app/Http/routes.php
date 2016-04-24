<?php
Route::group(['middleware' => 'auth'],function(){
	Route::get('/','HomeController@getIndex');
	Route::controller('home','HomeController');
	Route::controller('teams','TeamController');
	Route::controller('profile','ProfileController');
});

Route::controller('auth','AuthController');
