<?php
Route::group(['middleware' => 'auth'],function(){
	Route::get('/','HomeController@getIndex');
	Route::controller('home','HomeController');
});

Route::controller('auth','AuthController');