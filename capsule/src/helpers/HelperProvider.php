<?php namespace Capsule\Helpers;

use Illuminate\Support\ServiceProvider;
use Capsule\Helpers\Helper;

class HelperProvider extends ServiceProvider
{
	public function boot()
	{
		//
	}

	public function register()
	{	
		$this->app->bind('register-helper' , function(){
			return new Helper;
		});
	}
}