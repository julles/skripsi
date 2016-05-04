<?php namespace Capsule\Settings;

use Illuminate\Support\ServiceProvider;
use Capsule\Settings\Setting;
use Auth;

class SettingCapsuleProvider extends ServiceProvider
{
	public function boot()
	{
		$this->publishes([__DIR__.'/capsule_setting.php' => config_path('capsule_setting.php')]  , 'fb');
	}

	public function register()
	{	
		$configPath = config_path('capsule_setting.php');
		$dirPath = __dir__.'/capsule_setting.php';
		if(file_exists($configPath))
		{
			$this->mergeConfigFrom($configPath,'setting');
		}else{
			$this->mergeConfigFrom($dirPath,'setting');
		}

		$this->app->bind('register-setting' , function(){
			return new Setting;
		});
	}
}