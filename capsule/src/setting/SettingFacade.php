<?php namespace Capsule\Setting;

use Illuminate\Support\Facades\Facade;

class SettingFacade extends Facade
{
	public static function getFacadeAccessor()
	{
		return  'register-setting';
	}
}